<?php

namespace App\Controllers;

use App\Models\SurveyModel;
use App\Models\PertanyaanModel;
use App\Models\OpsiModel;
use App\Models\PertanyaanOpsiModel;
use App\Models\RespondenModel;
use App\Models\RPOJModel;
use App\Models\UsersModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use TCPDF;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class Export extends BaseController
{

    public function __construct()
    {
        $this->surveyModel = new SurveyModel();
        $this->opsiModel = new OpsiModel();
        $this->pertanyaanModel = new PertanyaanModel();
        $this->pertanyaanopsiModel = new PertanyaanOpsiModel();
        $this->respondenModel = new RespondenModel();
        $this->rpojModel = new RPOJModel();
        $this->usersModel = new UsersModel();
    }

    /**
     * -------------------------------------------------------------------
     * listSurvey()
     * -------------------------------------------------------------------
     * method ini untuk menampilkan daftar survey berdasarkan session admin OPD yang masuk dan mengeksportnya menjadi beberapa jenis file, ex: pdf, excel, csv
     * 
     * @return	string
     */
    public function listSurvey()
    {
        $users_opd_kode = session()->get('users_opd_kode');
        $data = [
            'judul' => 'DAFTAR SURVEY',
            'survey' => $this->surveyModel->getSurveyByUsers($users_opd_kode),
            'users' => $this->users
        ];
        return view('Survey/ExportListSurvey', $data);
    }

    /**
     * Noted :
     * untuk data laporan yang akan diexport sama dengan yang diambil pada controller laporan begitu juga dengan grafik
     */

    /**
     * -------------------------------------------------------------------
     * laporanPdf($survey_id, $opd_kode)
     * -------------------------------------------------------------------     
     * method ini mengeksport laporan ke dalam bentuk PDF
     * library digunakan adalah TCPDF
     * 
     * @param int $survey_id
     * @param int $opd_kode
     * */
    public function laporanPdf($survey_id, $opd_kode)
    {
        $listPertanyaan = $this->pertanyaanModel->getPertanyaanBySurveyID($survey_id);

        $listRespon = [];
        foreach ($listPertanyaan as $pertanyaan) {
            $listOpsiTotal = $this->opsiModel->getOpsidanTotal($pertanyaan['pertanyaan_id']);
            $opsiTotalAwal = array_shift($listOpsiTotal);
            $data = [
                'pertanyaan' => $pertanyaan,
                'opsiTotalAwal' => $opsiTotalAwal,
                'opsiTotalAkhir' => $listOpsiTotal
            ];
            array_push($listRespon, $data);
        }

        $data = [
            'judul' => 'Laporan Survey',
            'survey' => $this->surveyModel->getSurveyDetail($survey_id),
            'listRespon' => $listRespon,
            'users' => $this->users,
            'opd_kode' => $opd_kode
        ];

        $html = view('Laporan/LaporanPdf', $data);

        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->addPage();
        $pdf->writeHTML($html);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $this->response->setContentType('application/pdf');
        $pdf->Output('laporan.pdf', 'I');
    }

    /**
     * -------------------------------------------------------------------
     * laporanExcel($survey_id, $opd_kode = null)
     * -------------------------------------------------------------------
     * method untuk mengeksport laporan ke dalam Excel
     * library yang digunakan adalah PhpOffice
     * 
     * @param int $survey_id
     * @param int $opd_kode
     */
    public function laporanExcel($survey_id, $opd_kode = null)
    {
        $pertanyaan = $this->pertanyaanModel->getPertanyaanBySurveyID($survey_id);

        $totalRespon = [];
        foreach ($pertanyaan as $q) {
            $data = [
                'pertanyaan' => $q,
                'opsi' => $this->opsiModel->getOpsidanTotal($q['pertanyaan_id'])
            ];
            array_push($totalRespon, $data);
        }

        $data = [
            'judul' => 'Laporan Survey',
            'survey' => $this->surveyModel->getSurveyDetail($survey_id),
            'totalRespon' => $totalRespon,
            'users' => $this->users,
            'opd_kode' => $opd_kode
        ];

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', "LAPORAN");
        $sheet->mergeCells('A1:D1');
        $sheet->getStyle('A1')->getFont()->setBold(true);

        $styleColumn = [
            'alignment' => [
                'horizontal'   => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical'     => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ]
        ];

        $styleColumn1 = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ]
        ];

        $styleBorder = [
            'borders' => [
                'bottom' => [
                    'borderStyle' => Border::BORDER_MEDIUM,
                ],
                'top' => [
                    'borderStyle' => Border::BORDER_MEDIUM,
                ],
                'right' => [
                    'borderStyle' => Border::BORDER_MEDIUM,
                ],
                'left' => [
                    'borderStyle' => Border::BORDER_MEDIUM,
                ]
            ]
        ];

        $spreadsheet->getActiveSheet()->getStyle('A8:D8')->getFill()->applyFromArray(
            [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => '04c8c8'
                ]
            ]
        );

        $sheet->setCellValue('A3', 'JUDUL');
        $sheet->setCellValue('A4', 'DESKRIPSI');
        $sheet->setCellValue('A5', 'TAHUN');
        $sheet->setCellValue('A6', 'STATUS');
        $sheet->setCellValue('A8', 'NO');
        $sheet->setCellValue('B8', 'PERTANYAAN');
        $sheet->setCellValue('C8', 'OPSI');
        $sheet->setCellValue('D8', 'TOTAL');

        $sheet->getStyle('A1:D1')->applyFromArray($styleColumn);
        $sheet->getStyle('A8:D8')->applyFromArray($styleColumn)->getFont()->setBold(true);
        $sheet->getStyle('A8')->applyFromArray($styleBorder);
        $sheet->getStyle('B8')->applyFromArray($styleBorder);
        $sheet->getStyle('C8')->applyFromArray($styleBorder);
        $sheet->getStyle('D8')->applyFromArray($styleBorder);

        $rowB3 = 3;
        $rowB4 = 4;
        $rowB5 = 5;
        $rowB6 = 6;

        $row2 = $row3 = $row4 = $row5 = $row6 = 9;

        $survey = $data['survey'];
        $sheet->setCellValue('B' . $rowB3, $survey['survey_judul'])
            ->setCellValue('B' . $rowB4, $survey['survey_deskripsi'])
            ->setCellValue('B' . $rowB5, $survey['survey_tahun'])
            ->setCellValue('B' . $rowB6, $survey['survey_status']);

        $sheet->getStyle('B' . $rowB3, $survey['survey_judul'])->applyFromArray($styleColumn1)->getFont();
        $sheet->getStyle('B' . $rowB4, $survey['survey_deskripsi'])->applyFromArray($styleColumn1)->getFont();
        $sheet->getStyle('B' . $rowB5, $survey['survey_tahun'])->applyFromArray($styleColumn1)->getFont();
        $sheet->getStyle('B' . $rowB6, $survey['survey_status'])->applyFromArray($styleColumn1)->getFont();

        $i = $j = 1;
        foreach ($totalRespon as $tr) :
            $sheet->setCellValue('A' . $row2 + count($tr['opsi']) - count($tr['opsi']), $i++)->mergeCells('A' . $row2 . ':A' . $row2 + count($tr['opsi']) - 1)
                ->setCellValue('B' . $row2 + count($tr['opsi']) - count($tr['opsi']), $tr['pertanyaan']['pertanyaan_nama'])->mergeCells('B' . $row2 . ':B' . $row2 + count($tr['opsi']) - 1);
            $sheet->getStyle('A' . $row2 + count($tr['opsi']) - count($tr['opsi']), $j++)->applyFromArray($styleColumn);
            $sheet->getStyle('B' . $row2 + count($tr['opsi']) - count($tr['opsi']), $tr['pertanyaan']['pertanyaan_nama'])->applyFromArray($styleColumn1);
            $sheet->getStyle('A' . $row2 . ':A' . $row2 + count($tr['opsi']) - 1)->applyFromArray($styleBorder);
            $sheet->getStyle('B' . $row2 . ':B' . $row2 + count($tr['opsi']) - 1)->applyFromArray($styleBorder);
            foreach ($tr['opsi'] as $total) :
                $sheet->setCellValue('C' . $row2++, $total['opsi_nama'])
                    ->setCellValue('D' . $row3++, $total['total_respon']);
                $sheet->getStyle('D' . $row4++, $total['total_respon'])->applyFromArray($styleColumn);

                $sheet->getStyle('C' . $row5++, $total['opsi_nama'])->applyFromArray($styleBorder);
                $sheet->getStyle('D' . $row6++, $total['total_respon'])->applyFromArray($styleBorder);
            endforeach;
        endforeach;

        $sheet->getDefaultRowDimension()->setRowHeight(-1);
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        $sheet->setTitle("Laporan Survey");

        $filename = "Laporan ";

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachmen;filename= ' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
        die;
    }

    /**
     * -------------------------------------------------------------------
     * grafikPdf($survey_id)
     * -------------------------------------------------------------------     
     * method ini untuk mengeksport grafik laporan ke dalam bentuk PDF
     * library yang digunakan adalah PdfJS
     * 
     * @param int $survey_id
     * @return string
     */
    public function grafikPdf($survey_id)
    {
        $pertanyaan = $this->pertanyaanModel->getPertanyaanBySurveyID($survey_id);

        $total_pertanyaan = count($pertanyaan);

        $responden = $this->respondenModel->getTotalRespondenBySurveyId($survey_id);

        $total_responden = count($responden);

        $dataGrafiks = [];
        foreach ($pertanyaan as $q) {
            $data = [
                'pertanyaan' => $q,
                'total' => $this->opsiModel->getOpsidanTotal($q['pertanyaan_id'])
            ];
            array_push($dataGrafiks, $data);
        }

        $survey = $this->surveyModel->getDetailSurveyOPD($survey_id);

        $data = [
            'judul' => 'Grafik Survey',
            'users' => $this->users,
            'totalpertanyaan' => $total_pertanyaan,
            'totalresponden' => $total_responden,
            'dataGrafiks' => $dataGrafiks,
            'survey' => $survey
        ];

        return view('Grafik/GrafikPdf', $data);
    }
}
