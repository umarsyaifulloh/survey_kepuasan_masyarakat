<?= $this->extend('Templates/Template'); ?>
<?= $this->section('content'); ?>
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <!--begin::Wrapper-->
        <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
            <!--begin::Aside mobile toggle-->
            <div class="btn btn-icon btn-active-icon-primary tombol-side-bar" id="kt_aside_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Aside mobile toggle-->
        </div>
        <!--end::Wrapper-->
        <div class="modal-dialog modal-dialog-centered mw-1000px">
            <div class="modal-content rounded">
                <div class="modal-header pb-0 border-0 justify-content tombol-back">
                    <div class="d-flex">
                        <div class="flex-shrink-0 text-center">
                            <a href="<?= site_url('/laporan/listsurvey/' . $opd_kode . '/' . $survey['survey_tahun']); ?>" class="btn btn-outline-dark mt-auto" value="Go back!">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_new_target_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Laporan</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Form-->
                        <form id="kt_project_settings_form" class="form">
                            <!--begin::Card body-->
                            <div class="card-body p-9">
                                <!--begin::Row-->
                                <div class="row mb-8">
                                    <!--begin::Col-->
                                    <div class="col-xl-3">
                                        <div class="fs-4 fw-bold mt-2 mb-3">Judul</div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-9 fv-row">
                                        <input type="text" class="form-control form-control-solid" name="survey_judul" value="<?= $survey['survey_judul']; ?>" disabled />
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-8">
                                    <!--begin::Col-->
                                    <div class="col-xl-3">
                                        <div class="fs-4 fw-bold mt-2 mb-3">Deskripsi</div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-9 fv-row">
                                        <textarea name="survey_deskripsi" disabled class="form-control form-control-solid" id="note"><?= $survey['survey_deskripsi']; ?></textarea>
                                    </div>
                                    <!--begin::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-8">
                                    <!--begin::Col-->
                                    <div class="col-xl-3">
                                        <div class="fs-4 fw-bold mt-2 mb-3">Tahun</div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-9 fv-row">
                                        <input type="text" class="form-control form-control-solid" name="survey_tahun" value="<?= $survey['survey_tahun']; ?>" disabled />
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-8">
                                    <!--begin::Col-->
                                    <div class="col-xl-3">
                                        <div class="fs-4 fw-bold mt-2 mb-3">Status</div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-9 fv-row">
                                        <input type="text" class="form-control form-control-solid" name="survey_status" value="<?= $survey['survey_status']; ?>" disabled />
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                        </form>
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="card-header border-0">
                                <div class="card-toolbar mb-4 d-flex justify-content-end">
                                    <div class="my-1 me-4">
                                        <a type="button" id="btnPrint" class="no-print btn btn-sm btn-success my-1 float-right"><span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                                    <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                                    <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                                                </svg>
                                            </span>Print
                                        </a>
                                        <a target="blank" type="button" href="<?= site_url('/export/laporanpdf/' . $survey['survey_id'] . '/' . $opd_kode) ?>" class="no-print btn btn-sm btn-danger my-1">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
                                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                    <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->PDF
                                        </a>
                                        <a type="button" href="<?= site_url('/export/laporanexcel/' . $survey['survey_id']) ?>" class="btn btn-sm btn-primary my-1">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-excel" viewBox="0 0 16 16">
                                                    <path d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z" />
                                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Excel
                                        </a>
                                    </div>
                                </div>
                                <!--begin::Search-->
                                <div id="kt_header_search" class="d-flex align-items-center w-100 fs-2" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="false" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
                                    <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                                    <form data-kt-search-element="form" class="w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                                        <input type="hidden" />
                                        <!--end::Hidden input-->
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-lg-3 svg-icon-gray-800 position-absolute top-50 translate-middle-y ms-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Input-->
                                        <input type="text" id="cari" class="search-input form-control form-control-solid ps-13" name="search" value="" placeholder="Masukkan pertanyaan yang dicari" data-kt-search-element="input" />
                                        <!--end::Input-->
                                        <!--begin::Spinner-->
                                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                            <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                        </span>
                                        <!--end::Spinner-->
                                        <!--begin::Reset-->
                                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <!--end::Reset-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Search-->

                            </div>
                            <!--begin::Table container-->
                            <div class="table-responsive mt-5">
                                <!--begin::Table-->
                                <table class="table table-bordered align-middle gs-0 gy-3 mb-5" border="1" cell="1" id="myTable">
                                    <!--begin::Table head-->
                                    <thead class="table-primary">
                                        <tr class="fw-bolder text-white">
                                            <th class="w-10px text-center">No</th>
                                            <th class="w-100px text-center">Pertanyaan</th>
                                            <th class="w-10px text-center">Opsi</th>
                                            <th class="w-20px text-center">Total Respon</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($listRespon as $respon) : ?>
                                            <tr>
                                                <td class="align-middle" rowspan="<?= (count($respon['opsiTotalAkhir']) + 1); ?>">
                                                    <a class="text-dark text-center fw-bolder d-block mb-1 fs-6"><?= $i++; ?></a>
                                                </td>
                                                <td class="align-middle pertanyaan" rowspan="<?= (count($respon['opsiTotalAkhir']) + 1); ?>">
                                                    <a class="text-dark fw-bolder d-block mb-1 fs-6"><?= $respon['pertanyaan']['pertanyaan_nama']; ?></a>
                                                </td>
                                                <td class="align-top text-center">
                                                    <a class="text-dark fw-bolder d-block"><?= $respon['opsiTotalAwal']['opsi_nama']; ?></a>
                                                </td>
                                                <td class="align-top text-center">
                                                    <a class="text-dark fw-bolder d-block"><?= $respon['opsiTotalAwal']['total_respon']; ?></a>
                                                </td>
                                            </tr>
                                            <?php foreach ($respon['opsiTotalAkhir'] as $opsiTotal) : ?>
                                                <tr>
                                                    <td class="align-top text-center">
                                                        <a class="text-dark fw-bolder d-block"><?= $opsiTotal['opsi_nama']; ?></a>
                                                    </td>
                                                    <td class="align-top text-center">
                                                        <a class="text-dark fw-bolder d-block"><?= $opsiTotal['total_respon']; ?></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </form>
                    <!--end:Form-->
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Start Searching Pertanyaan -->
<script>
    $("#cari").on("keyup", function() {
        $("td").closest("tr").hide()
        var value = $(this).val();
        if (value) {
            $(".pertanyaan:contains('" + value + "')").each(function(index) {
                // console.log(index)
                const parent = $(this).closest("tr")
                const rowspan = $(this).attr("rowspan")
                // console.log(rowspan)
                if (rowspan != undefined) {
                    var current = parent
                    for (var i = 0; i < rowspan; i++) {
                        // console.log(current.text())
                        current.show()
                        current = current.next()
                    }
                } else {
                    parent.show()
                }
            })
        } else {
            $("td").closest("tr").show()
        }
    });
</script>
<!-- End Searching Pertanyaan -->
<!-- Start Print -->
<script>
    $('#btnPrint').on('click', function() {
        window.print();
    })
</script>
<!-- End Print -->
<?= $this->endSection('content'); ?>