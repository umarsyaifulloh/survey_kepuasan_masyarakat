<?= $this->extend('Templates/TemplateExport'); ?>
<?= $this->section('content'); ?>
<!--begin::Heading-->
<div class="border-table">
    <!--begin::Title-->
    <h1 class="mb-3">Laporan</h1>
    <!--end::Title-->
</div>
<!--end::Heading-->
<!--begin::table-->
<table class="border-table" cellpadding="5">
    <!--begin::Table head-->
    <thead>
        <tr>
            <th class="text-center1" width="30%">Identitas Survey</th>
            <th class="text-center1" width="70%">Deskripsi Survey</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th class="text-center1" width="30%">Judul</th>
            <td width="70%"><?= $survey['survey_judul']; ?></td>
        </tr>
        <tr>
            <th class="text-center1" width="30%">Deskripsi</th>
            <td width="70%"><?= $survey['survey_deskripsi']; ?></td>
        </tr>
        <tr>
            <th class="text-center1" width="30%">Tahun</th>
            <td width="70%"><?= $survey['survey_tahun']; ?></td>
        </tr>
        <tr>
            <th class="text-center1" width="30%">Status</th>
            <td width="70%"><?= $survey['survey_status']; ?></td>
        </tr>
    </tbody>
    </tbody>
    <!--end::Table body-->
</table>
<br><br>
<!--begin::table-->
<table class="border-table" cellpadding="5">
    <!--begin::Table head-->
    <thead>
        <tr>
            <th class="text-center1" width="10%">No</th>
            <th class="text-center1" width="40%">Pertanyaan</th>
            <th class="text-center1" width="30%">Opsi</th>
            <th class="text-center1" width="20%">Total Respon</th>
        </tr>
    </thead>
    <!--end::Table head-->
    <!--begin::Table body-->
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($listRespon as $respon) : ?>
            <tr>
                <td width="10%" class="align-middle" rowspan="<?= (count($respon['opsiTotalAkhir']) + 1); ?>">
                    <?= $i++; ?>
                </td>
                <td width="40%" class="align-middle" rowspan="<?= (count($respon['opsiTotalAkhir']) + 1); ?>">
                    <?= $respon['pertanyaan']['pertanyaan_nama']; ?>
                </td>
                <td width="30%" class="align-top text-center">
                    <?= $respon['opsiTotalAwal']['opsi_nama']; ?>
                </td>
                <td width="20%" class="align-top text-center">
                    <?= $respon['opsiTotalAwal']['total_respon']; ?>
                </td>
            </tr>
            <?php foreach ($respon['opsiTotalAkhir'] as $opsiTotal) : ?>
                <tr>
                    <td class="align-top text-center">
                        <?= $opsiTotal['opsi_nama']; ?>
                    </td>
                    <td class="align-top text-center">
                        <?= $opsiTotal['total_respon']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </tbody>
    <!--end::Table body-->
</table>
<!--end::Table-->
<script src="<?= base_url(); ?>/assets/js/script.js"></script>
<?= $this->endSection(''); ?>