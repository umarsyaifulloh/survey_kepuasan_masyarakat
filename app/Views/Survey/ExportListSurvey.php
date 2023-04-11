<?= $this->extend('Templates/Template3'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <center>
        <h2><?= $judul; ?></h2>
    </center>
    <div class="data-tables datatable-dark">

        <table class="table table-bordered" id="mauexport" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tahun</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($survey as $sv) : ?>
                <tr>
                    <td>
                        <a class="text-dark text-center fw-bolder d-block mb-1 fs-6"><?= $i++; ?></a>
                    </td>
                    <td>
                        <a class="text-dark fw-bolder d-block mb-1 fs-6"><?= $sv['survey_judul']; ?></a>
                    </td>
                    <td>
                        <a class="text-dark fw-bolder d-block mb-1 fs-6"><?= $sv['survey_deskripsi']; ?></a>
                    </td>
                    <td>
                        <a class="text-dark text-center fw-bolder d-block mb-1 fs-6"><?= $sv['survey_tahun']; ?></a>
                    </td>
                    <td class="text-center">
                        <span class="badge badge-light-danger"><?= $sv['survey_status']; ?></span>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
<?= $this->endSection('content'); ?>