<?= $this->extend('Templates/Template'); ?>
<?= $this->section('content'); ?>

<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <div class="modal-header mb-3 border-0 justify-content">
                    <!--begin::Wrapper-->
                    <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                        <!--begin::Aside mobile toggle-->
                        <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
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
                    <div class="d-flex">
                        <div class="flex-shrink-0 text-center">
                            <a href="<?= site_url('/opd'); ?>" class="btn btn-outline-dark btn-sm mt-auto" value="Go back!">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg></a>
                        </div>
                        <!--begin::Page title-->
                        <div class="flex-column align-items-start justify-content-center" data-kt-swapper="true" data-kt-swapper-mode="prepend">
                            <!--begin::Heading-->
                            <div class="mt-2 text-dark fw-bolder my-0 fs-2">Ubah OPD</div>
                            <!--end::Heading-->
                        </div>
                        <!--end::Page title=-->
                    </div>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Container-->
                <div class="container-xxl" id="kt_content_container">
                    <!--begin::Basic info-->
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <form action="<?= site_url('/opd/update/' . $opd['opd_kode']); ?>" method="POST" enctype="multipart/form-data" id="kt_account_profile_details_form" class="form">
                                <?= csrf_field(); ?>
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">Logo OPD</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('<?= base_url(); ?>/img/logoopd/defaultLogo.png')">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?= base_url(); ?>/img/logoopd/<?= $opd['opd_logo']; ?>)">
                                                </div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip">
                                                    <i class=" bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input class="<?= ($validation->hasError('opd_logo')) ? 'is-invalid' : ''; ?>" type="file" id="opd_logo" name="opd_logo" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <input type="hidden" name="logoLama" value="<?= $opd['opd_logo']; ?>" />
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Batalkan">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Hapus Foto Profil">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Hint-->
                                            <div class="form-text">Format file: png, jpg, jpeg.</div>
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('opd_logo'); ?>
                                                </div>
                                            </div>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama
                                            OPD</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="opd_nama" id="opd_nama" value="<?= (old('opd_nama')) ? old('opd_nama') : $opd['opd_nama']; ?>" autofocus class="form-control form-control-lg form-control-solid <?= ($validation->hasError('opd_nama')) ? 'is-invalid' : ''; ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('opd_nama'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Kode
                                            OPD</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="opd_kode" id="opd_kode" value="<?= (old('opd_kode')) ? old('opd_kode') : $opd['opd_kode']; ?>" autofocus class="form-control form-control-lg form-control-solid <?= ($validation->hasError('opd_kode')) ? 'is-invalid' : ''; ?>" required />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('opd_kode'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="opd_email" id="opd_email" value="<?= (old('opd_email')) ? old('opd_email') : $opd['opd_email']; ?>" autofocus class="form-control form-control-lg form-control-solid <?= ($validation->hasError('opd_email')) ? 'is-invalid' : ''; ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('opd_email'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Alamat</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="opd_alamat" id="opd_alamat" value="<?= (old('opd_alamat')) ? old('opd_alamat') : $opd['opd_alamat']; ?>" autofocus class="form-control form-control-lg form-control-solid <?= ($validation->hasError('opd_alamat')) ? 'is-invalid' : ''; ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('opd_alamat'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                                            <span class="required">Nomor Telepon</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="opd_telp" id="opd_telp" value="<?= (old('opd_telp')) ? old('opd_telp') : $opd['opd_telp']; ?>" autofocus class="form-control form-control-lg form-control-solid <?= ($validation->hasError('opd_telp')) ? 'is-invalid' : ''; ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('opd_telp'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Actions-->
                                <div class="card-footer">
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Actions-->
                                        <div class="text-center">
                                            <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Reset</button>
                                            <button type="submit" class="btn btn-primary">
                                                <span class="indicator-label">Ubah</span>
                                                <span class="indicator-progress">Silahkan Tunggu...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Basic info-->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>