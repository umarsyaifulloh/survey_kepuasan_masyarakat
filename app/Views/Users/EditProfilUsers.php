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
                            <a href="<?= site_url('/users/profil'); ?>" class="btn btn-outline-dark btn-sm mt-auto" value="Go back!">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg></a>
                        </div>
                        <!--begin::Page title-->
                        <div class="flex-column align-items-start justify-content-center" data-kt-swapper="true" data-kt-swapper-mode="prepend">
                            <!--begin::Heading-->
                            <div class="mt-2 text-dark fw-bolder my-0 fs-2">Profil Admin</div>
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
                    <!--begin::Navbar-->
                    <div class="card mb-5 mb-xl-10">
                        <div class="card-body pt-9 pb-0">
                            <!--begin::Details-->
                            <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                                <!--begin: Pic-->
                                <div class="me-7 mb-4">
                                    <div class="symbol symbol-100px symbol-lg-100px symbol-fixed position-relative">
                                        <img src="<?= base_url(); ?>/img/fotousers/<?= $users['users_image']; ?>" alt="image" />
                                    </div>
                                </div>
                                <!--end::Pic-->
                                <!--begin::Info-->
                                <div class="flex-grow-1">
                                    <!--begin::Title-->
                                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                        <!--begin::User-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Name-->
                                            <div class="d-flex align-items-center mb-2">
                                                <a class="text-gray-900 fs-2 fw-bolder me-1"><?= $users['users_nama']; ?></a>
                                                <a class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan"><?= $users['role_nama']; ?></a>
                                            </div>
                                            <!--end::Name-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                                <a class="d-flex align-items-center text-gray-400 mb-2">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                    <span class="svg-icon svg-icon-4 me-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black" />
                                                            <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon--><?= $users['users_email']; ?>
                                                </a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--begin::Basic info-->
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bolder m-0">Edit Profil Admin</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <form class="form" method="POST" action="<?= site_url('/users/updateprofil'); ?>" enctype="multipart/form-data">
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="PUT">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6 required">Foto
                                            Profil</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('<?= base_url(); ?>/img/fotousers/defaultFoto.png')">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?= base_url(); ?>/img/fotousers/<?= $users['users_image']; ?>)">
                                                </div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Ubah Foto Profil">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input class="<?= ($validation->hasError('users_image')) ? 'is-invalid' : ''; ?>" type="file" id="gambar" name="users_image" accept=".png, .jpg, .jpeg" />

                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <input type="hidden" name="fotoLama" value="<?= $users['users_image']; ?>" />
                                                <!--begin::Cancel-->
                                                <span class=" btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Batalkan">
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
                                        <label class="col-lg-4 col-form-label fw-bold fs-6 required">Nama
                                            Lengkap</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" id="users_nama" name="users_nama" class="form-control form-control-lg form-control-solid" placeholder="Nama Lengkap" value="<?= (old('users_nama')) ? old('users_nama') : $users['users_nama']; ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('users_nama'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">NIP</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" id="users_nip" name="users_nip" class="form-control form-control-lg form-control-solid" placeholder="NIP" value="<?= $users['users_nip']; ?>" disabled />
                                            <input type="hidden" name="users_nip" value="<?= $users['users_nip']; ?>">
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6 required">Email</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" id="users_email" name="users_email" class="form-control form-control-lg form-control-solid" placeholder="Email" value="<?= (old('users_email')) ? old('users_email') : $users['users_email']; ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('users_email'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6 required">Alamat
                                            Rumah</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" id="users_alamat" name="users_alamat" class="form-control form-control-lg form-control-solid" placeholder="Alamat Rumah" value="<?= (old('users_alamat')) ? old('users_alamat') : $users['users_alamat']; ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('users_alamat'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6 required">Nomor
                                            Telepon</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="tel" id="users_telp" name="users_telp" class="form-control form-control-lg form-control-solid" placeholder="Nomor Telepon" value="<?= (old('users_telp')) ? old('users_telp') : $users['users_telp']; ?>" />
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="target_title" data-validator="notEmpty">
                                                    <?= $validation->getError('users_telp'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <input type="hidden" name="users_password" value="<?= $users['users_password']; ?>">
                                    <input type="hidden" name="users_role_id" value=<?= $users['users_role_id']; ?>>
                                    <input type="hidden" name="users_opd_kode" value="<?= $users['users_opd_kode']; ?>">
                                </div>
                                <!--end::Card body-->
                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Reset</button>
                                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan</button>
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