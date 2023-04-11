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
                <!--begin::Container-->
                <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
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
                                <a href="<?= site_url('/opd/detail/' . $usersdetail['users_opd_kode']); ?>"
                                    class="btn btn-outline-dark btn-sm mt-auto" value="Go back!">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg></a>
                            </div>
                            <!--begin::Page title-->
                            <div class="flex-column align-items-start justify-content-center">
                                <!--begin::Heading-->
                                <div class="mt-2 text-dark fw-bolder my-0 fs-2">Profil Admin</div>
                                <!--end::Heading-->
                            </div>
                            <!--end::Page title=-->
                        </div>
                    </div>
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="container-xxl content d-flex flex-column flex-column-fluid" id="kt_content">
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
                                        <img src="<?= base_url(); ?>/img/fotousers/<?= $usersdetail['users_image']; ?>"
                                            alt="image" />
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
                                                <a
                                                    class="text-gray-900 fs-2 fw-bolder me-1"><?= $usersdetail['users_nama']; ?></a>
                                                <a class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_upgrade_plan"><?= $usersdetail['role_nama']; ?></a>
                                            </div>
                                            <!--end::Name-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                                <a class="d-flex align-items-center text-gray-400 mb-2">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                    <span class="svg-icon svg-icon-4 me-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                                fill="black" />
                                                            <path
                                                                d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon--><?= $usersdetail['users_email']; ?>
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
                    <!--begin::Navbar-->
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::details View-->
                        <div class="card mb-0" id="kt_profile_details_view">
                            <!--begin::Card header-->
                            <div class="card-header cursor-pointer">
                                <!--begin::Card title-->
                                <div class="card-title m-0">
                                    <h3 class="fw-bolder m-0">Detail Profil</h3>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--begin::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body p-9">
                                <!--begin::Row-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-bold text-muted">Nama Lengkap</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <span
                                            class="fw-bolder fs-6 text-gray-800"><?= $usersdetail['users_nama']; ?></span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-bold text-muted">NIP</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6"><?= $usersdetail['users_nip']; ?></span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-bold text-muted">Email</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6"><?= $usersdetail['users_email']; ?></span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-bold text-muted">Alamat Rumah</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <span
                                            class="fw-bold text-gray-800 fs-6"><?= $usersdetail['users_alamat']; ?></span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-7">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 fw-bold text-muted">Nomor Telepon
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 d-flex align-items-center">
                                        <span
                                            class="fw-bolder fs-6 text-gray-800 me-2"><?= $usersdetail['users_telp']; ?></span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::details View-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(''); ?>