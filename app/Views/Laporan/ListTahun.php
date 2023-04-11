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
                <div class="modal-header pb-0 border-0 justify-content">
                    <?php if (session()->get('users_role_id') == 1) : ?>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-center">
                                <a href="<?= site_url('/laporan/listopd/'); ?>" class="btn btn-outline-dark mt-auto" value="Go back!" onclick="history.back()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_new_target_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">List Tahun</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Row-->
                        <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                            <?php foreach ($listTahun as $tahun) : ?>
                                <!--begin::Col-->
                                <div class="col-md-6 col-lg-4 col-xl-3 col-6">
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                        <!--begin::Name-->
                                        <a href="<?= site_url('/laporan/listsurvey/' . $opd_kode . '/' . $tahun['survey_tahun']); ?>" class="text-gray-800 text-hover-primary d-flex flex-column">
                                            <!--begin::Image-->
                                            <div class="symbol symbol-75px mb-5">
                                                <img src="<?= base_url(); ?>/assets/media/svg/files/folder-document.svg" alt="" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bolder mb-2"><?= $tahun['survey_tahun']; ?></div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Name-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Col-->
                            <?php endforeach; ?>
                        </div>
                        <!--end:Row-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>