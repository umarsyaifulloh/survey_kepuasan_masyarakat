<?= $this->extend('Templates/Template'); ?>
<?= $this->section('content'); ?>
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <!--begin::Wrapper-->
        <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
            <!--begin::Aside mobile toggle-->
            <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                            fill="black" />
                        <path opacity="0.3"
                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                            fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Aside mobile toggle-->
        </div>
        <!--end::Wrapper-->
        <div class="modal-dialog modal-dialog-centered mw-1000px">
            <div class="modal-content rounded">
                <div class="modal-header pb-0 border-0 justify-content">
                    <div class="d-flex">
                        <div class="flex-shrink-0 text-center">
                            <?php if (session()->get('users_role_id') == 1) : ?>
                            <a href="<?= site_url('/opd/detail/' . $users['opd_kode']) ?>"
                                class="btn btn-outline-dark mt-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                            </a>
                            <?php else : ?>
                            <a href="<?= site_url('/survey') ?>" class="btn btn-outline-dark mt-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form class="form" method="POST" action="<?= site_url('/survey/update/' . $survey['survey_id']); ?>"
                        enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="PUT">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Edit Survey</h1>
                            <!--end::Title-->
                        </div>
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="survey_id"
                            value="<?= (old('survey_id')) ? old('survey_id') : $survey['survey_id']; ?>">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Judul</span>
                            </label>
                            <div class="fv-plugins-message-container invalid-feedback">
                                <div data-field="target_title" data-validator="notEmpty">
                                    <?= $validation->getError('survey_judul'); ?></div>
                            </div>
                            <!--end::Label-->
                            <input type="text"
                                class="form-control form-control-solid <?= ($validation->hasError('survey_judul')) ? 'is-invalid' : ''; ?>"
                                id="survey_judul" name="survey_judul"
                                value="<?= (old('survey_judul')) ? old('survey_judul') : $survey['survey_judul']; ?>"
                                placeholder="Tuliskan Judul Survey" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Deskrips</span>
                            </label>
                            <div class="fv-plugins-message-container invalid-feedback">
                                <div data-field="target_title" data-validator="notEmpty">
                                    <?= $validation->getError('survey_deskripsi'); ?></div>
                            </div>
                            <textarea class="form-control form-control-solid" rows="3" id="survey_deskripsi"
                                name="survey_deskripsi"
                                placeholder="Tuliskan Deskripsi Survey"><?= (old('survey_deskripsi')) ? old('survey_deskripsi') : $survey['survey_deskripsi']; ?></textarea>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Tahun</label>
                                <select class="form-select form-select-solid" data-control="select2"
                                    data-hide-search="true" id="survey_tahun" name="survey_tahun">
                                    <option value="">Masukkan Tahun Survey</option>
                                    <?php
                                    $thn_skr = date('Y');
                                    for ($x = $thn_skr; $x >= 2010; $x--) {
                                    ?>
                                    <option value="<?php echo $x ?>"
                                        <?= $survey['survey_tahun'] == $x ? 'selected' : ''; ?>><?php echo $x ?>
                                    </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <div class="fv-plugins-message-container invalid-feedback">
                                    <div data-field="target_title" data-validator="notEmpty">
                                        <?= $validation->getError('survey_tahun'); ?></div>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-stack mb-8">
                            <!--begin::Label-->
                            <div class="me-5">
                                <label class="fs-6 fw-bold">Status</label>
                            </div>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input type="hidden" name="survey_status" value="Nonaktif">
                                <input class="form-check-input" type="checkbox" name="survey_status" value="Aktif"
                                    <?php if ($survey['survey_status'] == 'Aktif') {
                                                                                                                        echo 'checked';
                                                                                                                    } ?> />
                                <span class="form-check-label fw-bold text-muted">Aktif</span>
                            </label>
                            <!--end::Switch-->
                        </div>
                        <input type="hidden" name="updated_by" value="<?= $users['users_nip']; ?>">
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" class="btn btn-light me-3">Reset</button>
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Edit</span>
                                <span class="indicator-progress">Silahkan Tunggu...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>