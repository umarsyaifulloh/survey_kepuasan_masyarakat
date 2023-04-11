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
                    <div class="card mb-5 mb-xl-10 mt-10">
                        <div class="card mb-0" id="kt_profile_details_view">
                            <div class="modal-header pb-0 border-0 justify-content">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 text-center">
                                        <a href="<?= site_url('/laporan/listtahun/' . $opd_kode); ?>" class="btn btn-outline-dark mt-auto" value="Go back!">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            <!--begin::Card header-->
                            <!--begin::Card title-->
                            <div class="mb-3 text-center">
                                <!--begin::Title-->
                                <h1 class="mb-3 mt-6">Daftar Laporan Tahun <?= $tahun; ?></h1>
                                <!--end::Title-->
                            </div>
                            <!--begin::Card body-->
                            <div class="card-header border-0 mt-3">
                                <!--begin::Search-->
                                <div id="kt_header_search" class="d-flex align-items-center w-75" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="false" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
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
                                        <input type="text" class="search-input form-control form-control-solid ps-13" name="search" value="" placeholder="Cari" data-kt-search-element="input" id="myInput" />
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
                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="table1">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fw-bolder text-muted">
                                                <th class="w-10px text-center">No</th>
                                                <th class="w-100px text-center">Judul</th>
                                                <th class="w-10px text-center">Status</th>
                                                <th class="w-10px text-center">Laporan</th>
                                                <th class="w-10px text-center">Grafik</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody id="myTable">
                                            <?php $i = 1; ?>
                                            <?php foreach ($listSurvey as $survey) : ?>
                                                <tr>
                                                    <td class="align-top">
                                                        <a class="text-dark text-center fw-bolder d-block mb-1 fs-6"><?= $i++; ?></a>
                                                    </td>
                                                    <td class="align-top">
                                                        <a class="justify text-dark fw-bolder d-block mb-1 fs-6"><?= $survey['survey_judul']; ?></a>
                                                    </td>
                                                    <td class="align-top text-center">
                                                        <span class="badge badge-light-<?= $survey['survey_status'] == 'Aktif' ? 'success' : 'danger' ?>"><?= $survey['survey_status']; ?></span>
                                                    </td>
                                                    <td class="align-top text-center" data-kt-menu="true">
                                                        <a href="<?= site_url('/laporan/laporan/' . $survey['survey_id'] . '/' . $opd_kode); ?>" class="btn btn-flex btn-primary btn-sm">Lihat
                                                        </a>
                                                    </td>
                                                    <td class="align-top text-center" data-kt-menu="true">
                                                        <a href="<?= site_url('grafik/grafik/' . $survey['survey_id']); ?>" class="btn btn-flex btn-primary btn-sm">Lihat
                                                        </a>
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
                            <!--begin::Body-->
                        </div>
                        <!--end::Tables Widget 13-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>