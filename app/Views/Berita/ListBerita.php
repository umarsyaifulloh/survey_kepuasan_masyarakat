<?= $this->extend('Templates/Template'); ?>
<?= $this->section('content'); ?>

<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="container-xxl" id="kt_content_container">
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
                    <div class="card mb-5 mb-xl-10 mt-10">
                        <div class="card mb-0" id="kt_profile_details_view">
                            <div class="modal-header pb-0 border-0 justify-content">
                                <?php if (session()->get('users_role_id') == 1) : ?>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-center">
                                        <a href="<?= site_url('/berita/listopd/'); ?>"
                                            class="btn btn-outline-dark mt-auto" value="Go back!"
                                            onclick="history.back()">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-arrow-left-circle-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <?php endif ?>
                            </div>
                            <!--begin::Card header-->
                            <!--begin::Card title-->
                            <div class="mb-3 text-center">
                                <!--begin::Title-->
                                <h1 class="mb-3">List Berita</h1>
                                <!--end::Title-->
                                <!-- Start:Alert -->
                                <div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>
                                <!-- Finish:Alert -->
                            </div>
                            <!--begin::Card body-->
                            <div class="card-header border-0 mt-3">
                                <!--begin::Search-->
                                <div id="kt_header_search" class="d-flex align-items-center w-75"
                                    data-kt-search-keypress="true" data-kt-search-min-length="2"
                                    data-kt-search-enter="enter" data-kt-search-layout="menu"
                                    data-kt-search-responsive="false" data-kt-menu-trigger="auto"
                                    data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
                                    <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                                    <form data-kt-search-element="form" class="w-100 position-relative mb-5 mb-lg-0"
                                        autocomplete="off">
                                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                                        <input type="hidden" />
                                        <!--end::Hidden input-->
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span
                                            class="svg-icon svg-icon-2 svg-icon-lg-3 svg-icon-gray-800 position-absolute top-50 translate-middle-y ms-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                                    rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                                <path
                                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Input-->
                                        <input type="text" class="search-input form-control form-control-solid ps-13"
                                            name="search" value="" placeholder="Cari" data-kt-search-element="input"
                                            id="myInput" />
                                        <!--end::Input-->
                                        <!--begin::Spinner-->
                                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                            data-kt-search-element="spinner">
                                            <span
                                                class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                        </span>
                                        <!--end::Spinner-->
                                        <!--begin::Reset-->
                                        <span
                                            class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                            data-kt-search-element="clear">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                        transform="rotate(-45 6 17.3137)" fill="black" />
                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                        transform="rotate(45 7.41422 6)" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <!--end::Reset-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Search-->
                                <div class="card-toolbar">
                                    <?php if (session()->get('users_opd_kode') == $users_opd_kode) : ?>
                                    <a type="button" href="<?= site_url('/berita/add'); ?>"
                                        class="btn btn-sm btn-primary my-1">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                    transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Tambah Berita
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3"
                                        id="table1">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fw-bolder text-muted">
                                                <th class="w-10px text-center">No</th>
                                                <th class="w-20px text-center">Judul</th>
                                                <th class="w-100px text-center">Isi</th>
                                                <th class="w-10px text-center">Tanggal</th>
                                                <th class="w-10px text-center">Penulis</th>
                                                <th class="w-100px text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody id="myTable">
                                            <?php $i = 1; ?>
                                            <?php foreach ($listberita as $berita) : ?>
                                            <tr>
                                                <td class="align-top">
                                                    <a
                                                        class="text-dark text-center fw-bolder d-block mb-1 fs-6"><?= $i++; ?></a>
                                                </td>
                                                <td class="align-top">
                                                    <a
                                                        class="justify text-dark fw-bolder d-block mb-1 fs-6"><?= $berita['berita_judul']; ?></a>
                                                </td>
                                                <td class="align-top">
                                                    <a class="justify text-dark fw-bolder d-block mb-1 fs-6">
                                                        <?= strip_only_tags($berita['berita_isi'], '<b><s><img><p><u><var><span><div><table>'); ?>
                                                    </a>
                                                </td>
                                                <td class="align-top">
                                                    <a class="text-dark text-center fw-bolder d-block mb-1 fs-6">
                                                        <?= tanggal($berita['tanggal']); ?>
                                                    </a>
                                                </td>
                                                <td class="align-top text-center">
                                                    <a class="text-dark text-center fw-bolder d-block mb-1 fs-6">
                                                        <?= $berita['users_nama']; ?></a>
                                                </td>
                                                <td class="d-flex justify-content-center in-line text-center"
                                                    data-kt-menu="true">
                                                    <a href="<?= site_url('/berita/detail/' . '/' . $berita['berita_id'] . '/' . $users_opd_kode); ?>"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="none">
                                                                <path d=" M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <?php if (session()->get('users_opd_kode') == $users_opd_kode) : ?>
                                                    <a href="<?= site_url('/berita/edit/' . $berita['berita_id']); ?>"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <form
                                                        action="<?= site_url('/berita/delete/' . $berita['berita_id']); ?>"
                                                        class="d-inline btn-delete">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="black" />
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="black" />
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </form>
                                                    <?php endif ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Tables Widget 13-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?= $this->endSection('content'); ?>