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
        <!--begin::Content-->
        <div class="modal-dialog modal-dialog-centered mw-1000px">
            <div class="modal-content rounded">
                <div class="modal-header pb-0 border-0 justify-content">
                    <div class="d-flex">
                        <div class="flex-shrink-0 text-center">
                            <?php if (session()->get('users_opd_kode') == 1) : ?>
                            <a href="<?= site_url('berita/index/' . session()->get('users_opd_kode')); ?>"
                                class="btn btn-outline-dark mt-auto" value="Go back!" onclick="history.back()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                            </a>
                            <?php else : ?>
                            <a href="<?= site_url('berita/'); ?>" class="btn btn-outline-dark mt-auto" value="Go back!"
                                onclick="history.back()">
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
                <div class="content d-flex flex-column flex-column-fluid mt-8 mb-8" id="kt_content">
                    <!--begin::Container-->
                    <div class="container-xxl" id="kt_content_container">
                        <!--begin::Meet-->
                        <div class="mb-2">
                            <!--begin::Wrapper-->
                            <div class="mb-2">
                                <!--begin::Wrapper-->
                                <div class="mb-2">
                                    <!--begin::Top-->
                                    <div class="text-center mb-7">
                                        <!--begin::Title-->
                                        <h3 class="fs-2hx text-dark mb-6"><?= $berita['berita_judul']; ?>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Content-->
                                        <div class="fs-4">
                                            <!--begin::Author-->
                                            <a class="text-gray-700"><?= $berita['users_nama']; ?></a>
                                            <!--end::Author-->
                                        </div>
                                        <div class="fs-4 mb-6">
                                            <!--begin::Date-->
                                            <span class="text-muted">pada</span>
                                            <span class="text-muted"><?= tanggal($berita['tanggal']); ?></span>
                                            <!--end::Date-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Top-->
                                <!--begin::Overlay-->
                                <a class="d-block overlay text-center mb-7" data-fslightbox="lightbox-hot-sales"
                                    href="<?= base_url(); ?>/img/beritaimage/<?= $berita['berita_gambar']; ?>">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-contain card-rounded min-h-300px"
                                        style="background-image:url('<?= base_url(); ?>/img/beritaimage/<?= $berita['berita_gambar']; ?>')">
                                    </div>
                                    <!--begin::Action-->
                                    <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                        <i class="bi bi-eye-fill fs-2x text-white"></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Overlay-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Description-->
                            <div class="fs-5 fw-bold text-gray-600 text-justify">
                                <!--begin::Text-->
                                <p class="m-0 justify">
                                    <?= $berita['berita_isi']; ?>
                                </p>
                                <!--end::Text-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Meet-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Content-->
                <!-- BLABLABLA -->
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>