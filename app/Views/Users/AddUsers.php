<?= $this->extend('Templates/Template'); ?>
<?= $this->section('content'); ?>

<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
                data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <div class="modal-header mb-3 border-0 justify-content">
                    <!--begin::Wrapper-->
                    <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                        <!--begin::Aside mobile toggle-->
                        <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
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
                    <div class="d-flex">
                        <div class="flex-shrink-0 text-center">
                            <a href="<?= site_url('/opd/detail/' . $opd['opd_kode']); ?>"
                                class="btn btn-outline-dark btn-sm mt-auto" value="Go back!">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg></a>
                        </div>
                        <!--begin::Page title-->
                        <div class="flex-column align-items-start justify-content-center" data-kt-swapper="true"
                            data-kt-swapper-mode="prepend">
                            <!--begin::Heading-->
                            <div class="mt-2 text-dark fw-bolder my-0 fs-2">Tambah Admin</div>
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
                            <form class="form" method="POST"
                                action="<?= site_url('/users/create/' . $opd['opd_kode']); ?>"
                                enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">Foto Profil</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                                style="background-image: url('<?= base_url(); ?>/img/fotousers/defaultFoto.png')">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: url('<?= base_url(); ?>/img/fotousers/defaultFoto.png')">
                                                </div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip">
                                                    <i class=" bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input
                                                        class="<?= ($validation->hasError('users_image')) ? 'is-invalid' : ''; ?>"
                                                        value="<?= old('users_image'); ?>" type="file" id="gambar"
                                                        name="users_image" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    title="Batalkan">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    title="Hapus Foto Profil">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Hint-->
                                            <div class="form-text">Format file: png, jpg, jpeg.</div>
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('users_image'); ?>
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
                                            Lengkap</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" id="users_nama" name="users_nama"
                                                class="form-control form-control-lg form-control-solid <?= ($validation->hasError('users_nama')) ? 'is-invalid' : ''; ?>"
                                                value="<?= old('users_nama'); ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('users_nama'); ?></div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">NIP</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" id="users_nip" name="users_nip"
                                                class="form-control form-control-lg form-control-solid <?= ($validation->hasError('users_nip')) ? 'is-invalid' : ''; ?>"
                                                value="<?= old('users_nip'); ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('users_nip'); ?></div>
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
                                            <input type="email" id="users_email" name="users_email"
                                                class="form-control form-control-lg form-control-solid <?= ($validation->hasError('users_email')) ? 'is-invalid' : ''; ?>"
                                                value="<?= old('users_email'); ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('users_email'); ?></div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Password</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="password" id="users_password" name="users_password"
                                                class="form-control form-control-lg form-control-solid password <?= ($validation->hasError('users_password')) ? 'is-invalid' : ''; ?>"
                                                value="<?= old('users_password'); ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('users_password'); ?></div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Konfirmasi
                                            Password</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="password" id="users_passconf" name="users_passconf"
                                                class="form-control form-control-lg form-control-solid <?= ($validation->hasError('users_passconf')) ? 'is-invalid' : ''; ?>"
                                                value="<?= old('users_password'); ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('users_passconf'); ?></div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Alamat
                                            Rumah</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" id="users_alamat" name="users_alamat"
                                                class="form-control form-control-lg form-control-solid <?= ($validation->hasError('users_alamat')) ? 'is-invalid' : ''; ?>"
                                                value="<?= old('users_alamat'); ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('users_alamat'); ?></div>
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
                                            <input type="tel" id="users_telp" name="users_telp"
                                                class="form-control form-control-lg form-control-solid <?= ($validation->hasError('users_telp')) ? 'is-invalid' : ''; ?>"
                                                value="<?= old('users_telp'); ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('users_telp'); ?></div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <input type="hidden" name="users_role_id" value=2>
                                    <input type="hidden" name="users_opd_kode" value="<?= $opd['opd_kode']; ?>">
                                </div>
                                <!--end::Card body-->
                                <!--begin::Actions-->
                                <div class="card-footer">
                                    <div class="d-flex justify-content-end">
                                        <button type="reset"
                                            class="btn btn-light btn-active-light-primary me-2 d-flex justify-content-end">Reset</button>
                                        <button type="submit"
                                            class="btn btn-primary d-flex justify-content-end">Tambah</button>
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
<?= $this->endSection(''); ?>