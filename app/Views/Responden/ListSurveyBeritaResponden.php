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
            <div class="landing-header bg-white" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!-- Start Alert     -->
                <div class="respon" data-respon="<?= session()->getFlashdata('pesan'); ?>"></div>
                <!-- Finish Alert -->
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center justify-content-between">
                        <!--begin::Logo-->
                        <div class="d-flex align-items-center flex-equal">
                            <!--begin::Mobile menu toggle-->
                            <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-2hx">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--end::Mobile menu toggle-->
                            <!--begin::Logo image-->
                            <a href="#">
                                <img alt="Logo" src="<?= base_url(); ?>/assets/media/logos/logo-wng.png" class="logo-default h-50px h-lg-75px" />
                            </a>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Logo-->
                        <!--begin::Menu wrapper-->
                        <div class="d-lg-block" id="kt_header_nav_wrapper">
                            <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                <!--begin::Menu-->
                                <div class="menu menu-column  flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="/#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Beranda</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="/#tentang" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Tentang</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="/#list" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Survey</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="/#berita" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Berita</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="/#kontak" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Kontak</a>
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
                    <div class="modal-dialog modal-dialog-centered mw-1000px">
                        <div class="modal-content rounded mt-10">
                            <div class="modal-header pb-0 border-0 justify-content">
                            </div>
                            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                <!--begin:Form-->
                                <form id="kt_modal_new_target_form bg-white" class="form" action="#">
                                    <!--begin::Heading-->
                                    <div class="mb-13 text-center">
                                        <!--begin::Title-->
                                        <h1 class="mb-3 mt-5">LIST SURVEY <?= $opd['opd_nama']; ?></h1>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Row-->
                                    <div class="row g-5 g-xl-8">
                                        <?php foreach ($listSurvey as $survey) : ?>
                                            <div class="col-xl-6">
                                                <!--begin::Statistics Widget 5-->
                                                <div class="card bg-info hoverable card-xl-stretch mb-xl-4">
                                                    <!--begin::Body-->
                                                    <a href="<?= site_url('/responden/addresponden/' . $survey['survey_id']); ?>">
                                                        <div class="card-body">
                                                            <div class=" text-white text-center fw-bolder fs-3 mb-3">
                                                                <?= $survey['survey_judul']; ?>
                                                            </div>
                                                        </div>
                                                        <!--end::Body-->
                                                    </a>
                                                </div>
                                                <!--end::Statistics Widget 5-->
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--end::Row-->
                        </form>
                        <!--end:Form-->
                    </div>
                </div>
            </div>
            <div class="wrapper d-flex flex-column flex-row-fluid landing-dark-bg" id="kt_wrapper">
                <div id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-1000px">
                        <div class="modal-content rounded">\
                            <!--begin::Card body-->
                            <div class="card-body p-lg-20">
                                <!--begin::Heading-->
                                <div class="text-center mb-5 mb-lg-10">
                                    <!--begin::Title-->
                                    <h3 class="fs-2hx text-dark mb-5" id="berita" data-kt-scroll-offset="{default: 100, lg: 150}">Berita
                                    </h3>
                                    <!--begin::Text-->
                                    <div class="fs-5 text-muted fw-bold">
                                        Berita Terkini dari <?= $opd['opd_nama']; ?>
                                    </div>
                                    <!--end::Text-->
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Section-->
                                <div class="mb-16">
                                    <!--end::Top-->
                                    <!--begin::Row-->
                                    <div class="row g-10">
                                        <?php foreach ($listBerita as $berita) : ?>
                                            <!--begin::Col-->
                                            <div class="col-md-4">
                                                <!--begin::Publications post-->
                                                <div class="card-xl-stretch me-md-6">
                                                    <!--begin::Overlay-->
                                                    <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="<?= base_url(); ?>/img/beritaimage/<?= $berita['berita_gambar']; ?>">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('<?= base_url(); ?>/img/beritaimage/<?= $berita['berita_gambar'] ?>')">
                                                        </div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Overlay-->
                                                    <!--begin::Body-->
                                                    <div class="m-0">
                                                        <!--begin::Title-->
                                                        <a href="<?= site_url('/responden/detailberita/ ' . $berita['berita_id']); ?>" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">
                                                            <?= $berita['berita_judul']; ?>
                                                        </a>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5">
                                                            <?= strip_only_tags($berita['berita_isi'], '<b><s><img><p><u><var><span><div><table>'); ?>
                                                        </div>
                                                        <!--end::Text-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-bolder">
                                                            <!--begin::Author-->
                                                            <a class="text-gray-700"><?= $berita['users_nama']; ?></a>
                                                            <!--end::Author-->
                                                            <!--begin::Date-->
                                                            <span class="text-muted">pada</span>
                                                            <span class="text-muted"><?= tanggal($berita['tanggal']); ?></span>
                                                            <!--end::Date-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Publications post-->
                                            </div>
                                            <!--end::Col-->
                                        <?php endforeach; ?>
                                        <div class="text-center mt-19">
                                            <a href="<?= site_url('/responden/listberitaopd/' . $opd['opd_kode']); ?>" class="btn btn-flex btn-primary">Lihat
                                                Berita
                                                Lain
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>