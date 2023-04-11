<?= $this->extend('Templates/Template2'); ?>
<?= $this->section('content'); ?>

<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root landing-dark-bg">
    <!--begin::Header Section-->
    <div class="mb-0">
        <!--begin::Wrapper-->
        <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom">
            <!--begin::Header-->
            <div class="landing-header bg-white" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center justify-content-between">
                        <!--begin::Logo-->
                        <div class="d-flex align-items-center flex-equal">
                            <!--begin::Mobile menu toggle-->
                            <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                id="kt_landing_menu_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-2hx">
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
                            </button>
                            <!--end::Mobile menu toggle-->
                            <!--begin::Logo image-->
                            <a href="#">
                                <img alt="Logo" src="<?= base_url(); ?>/assets/media/logos/logo-wng.png"
                                    class="logo-default h-50px h-lg-75px" />
                            </a>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Logo-->
                        <!--begin::Menu wrapper-->
                        <div class="d-lg-block" id="kt_header_nav_wrapper">
                            <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu"
                                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                <!--begin::Menu-->
                                <div class="menu menu-column  flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold"
                                    id="kt_landing_menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="/#kt_body"
                                            data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Beranda</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="/#tentang"
                                            data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Tentang</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="/#list"
                                            data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Survey</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="/#berita"
                                            data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Berita</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="/#kontak"
                                            data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Kontak</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Menu wrapper-->
                        <!--begin::Toolbar-->
                        <div class="flex-equal text-end ms-1">
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <div class="wrapper d-flex flex-column flex-row-fluid landing-dark-bg" id="kt_wrapper">
                <div id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid mt-8 mb-8" id="kt_content">
                        <!--begin::Container-->
                        <div class="container-xxl" id="kt_content_container">
                            <!--begin::About card-->
                            <div class="card">
                                <!--begin::Body-->
                                <div class="card-body p-lg-17">
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
                                                        <span
                                                            class="text-muted"><?= tanggal($berita['tanggal']); ?></span>
                                                        <!--end::Date-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Top-->
                                            <!--begin::Overlay-->
                                            <a class="d-block overlay text-center mb-7"
                                                data-fslightbox="lightbox-hot-sales"
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
                                <!--end::Body-->
                            </div>
                            <!--end::About card-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Content-->
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection('content'); ?>