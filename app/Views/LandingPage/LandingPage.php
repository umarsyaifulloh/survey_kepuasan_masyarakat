<?= $this->extend('LandingPage/Template'); ?>
<?= $this->section('content'); ?>
<!--begin::Header Section-->
<div class="mb-0" id="home">
    <header class="masthead">
        <!--begin::Wrapper-->
        <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom">
            <!--begin::Header-->
            <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
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
                                <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Beranda</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#tentang" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Tentang</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#list" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Survey</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#berita" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Berita</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#kontak" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Kontak</a>
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
                            <a href="<?= site_url('/auth/login'); ?>" class="btn btn-success">Masuk</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Landing hero-->
            <div class=" d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                <!--begin::Heading-->
                <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                    <!--begin::Title-->
                    <h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15" data-aos="zoom-in" data-aos-duration="1500">Selamat Datang!
                        <br />Website
                        <span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                            <span id="kt_landing_hero_text">Survey Kepuasan Masyarakat</span>
                        </span>
                        <br />Kabupaten Wonogiri
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Landing hero-->
        </div>
        <!--end::Wrapper-->
        <style>
            .masthead {
                background-image: url("<?= base_url(); ?>/assets/media/wonogiri/bg.jpg");
                width: 100%;
                height: 100%;
                position: relative;
                background-size: cover;
            }
        </style>
    </header>
</div>
<!--end::Header Section-->
<!--begin::Statistics Section-->
<div class="mt-sm-n10">
    <!--begin::Wrapper-->
    <div class="pb-15 pt-18 landing-dark-bg">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Heading-->
            <div class="text-center mt-15 mb-18" id="tentang" data-kt-scroll-offset="{default: 100, lg: 150}">
                <div class="text-center mb-17">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-white mb-5" id="tentang" data-aos="fade-right" data-aos-duration="1500" data-kt-scroll-offset="{default: 100, lg: 150}">
                        Tentang Survey Kepuasan Masyarakat</h3>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="mt-10 fs-5 text-muted fw-bold" data-aos="fade-left" data-aos-duration="1500">Survey
                        Kepuasan Masyarakat adalah
                        aplikasi
                        dengan sistem komputerisasi online berbasis web application yang terpadu dan
                        komprehensif.
                        Survey Kepuasan Masyarakat merupakan tolak ukur untuk menilai tingkat kualitas pelayanan
                        yang diberikan oleh Unit Pelayanan Publik. Survey ini dilakukan sebagai upaya untuk
                        meningkatkan kualitas pelayanan publik dan mengetahui kinerja Pelayanan Aparatur
                        Pemerintah
                        pada masyarakat.
                    </div>
                    <!--end::Text-->
                </div>
            </div>
            <!--end::Heading-->
            <!--begin::Statistics-->
            <div class="d-flex flex-center">
                <!--begin::Items-->
                <div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px" data-aos="zoom-out" data-aos-duration="1500" data-aos-delay="500">
                    <!--begin::Item-->
                    <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('<?= base_url(); ?>/assets/media/svg/misc/octagon.svg')">
                        <!--begin::Info-->
                        <div class="mb-0">
                            <img src="<?= base_url(); ?>/assets/media/illustrations/dozzy-1/12.png" class="mh-200px mh-lg-225px" alt="" />
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('<?= base_url(); ?>/assets/media/svg/misc/octagon.svg')">
                        <!--begin::Info-->
                        <!--begin::Info-->
                        <div class="mb-0">
                            <img src="<?= base_url(); ?>/assets/media/illustrations/dozzy-1/4.png" class="mh-200px mh-lg-225px" alt="" />
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('<?= base_url(); ?>/assets/media/svg/misc/octagon.svg')">
                        <!--begin::Info-->
                        <!--begin::Info-->
                        <div class="mb-0">
                            <img src="<?= base_url(); ?>/assets/media/illustrations/dozzy-1/5.png" class="mh-200px mh-lg-225px" alt="" />
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Items-->
            </div>
            <!--end::Statistics-->
            <!--begin::Testimonial-->
            <div class="fs-2 fw-bold text-muted text-center mb-3" data-aos="fade-down-right" data-aos-duration="1500" data-aos-delay="500">
                <span class="fs-1 lh-1 text-gray-700">“</span>Survey dapat diibaratkan sebagai sebuah alat
                diagnostik, bila diagnostiknya benar maka obat yang diberikan juga akan tepat. Akan
                tetapi, kalau diagnostiknya salah atau tidak benar, maka obatnya juga akan salah.
                <span class="fs-1 lh-1 text-gray-700">“</span>
            </div>
            <!--end::Testimonial-->
            <div class="mt-5 fs-2 fw-bold text-muted text-center" data-aos="fade-up-left" data-aos-duration="1500" data-aos-delay="500">
                <span class="fs-2 fw-bolder text-white fst-italic">Ayo isi survey dengan jujur!</span>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Curve bottom-->
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve bottom-->
</div>
<!--end::Statistics Section-->
<!--begin::Team Section-->
<div class="py-10 py-lg-20">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Heading-->
        <div class="text-center mb-12">
            <!--begin::Title-->
            <h3 class="fs-2hx text-dark mb-5" id="list" data-kt-scroll-offset="{default: 100, lg: 150}">
                Survey Organisasi Perangkat Daerah</h3>
            <!--end::Title-->
            <!--begin::Sub-title-->
            <div class="text-center mt-9">
                <a href="<?= site_url('responden/listopd'); ?>" class="btn btn-primary btn-flex">Lihat Semua OPD
                </a>
            </div>
            <!--end::Sub-title=-->
        </div>
        <!--end::Heading-->
        <!--begin::Slider-->
        <div class="tns tns-default">
            <!--begin::Wrapper-->
            <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="12000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 4}}">
                <!--begin::Item-->
                <?php foreach ($daftarOPD as $opd) : ?>
                    <div class="text-center">
                        <!--begin::Photo-->
                        <div class="circle mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('<?= base_url(); ?>/img/logoopd/<?= $opd['opd_logo'] ?>')">
                        </div>
                        <!--end::Photo-->
                        <!--begin::Person-->
                        <div class="mb-0">
                            <!--begin::Name-->
                            <a href="<?= site_url("/responden/surveyberitaresponden/" . $opd['opd_kode']); ?>" class="text-dark fw-bolder text-hover-primary fs-3"><?= $opd['opd_nama']; ?></a>
                            <!--end::Name-->
                        </div>
                        <!--end::Person-->
                    </div>
                    <!--end::Item-->
                <?php endforeach; ?>
            </div>
            <!--end::Wrapper-->
            <!--begin::Button-->
            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                <span class="svg-icon svg-icon-3x">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </button>
            <!--end::Button-->
            <!--begin::Button-->
            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                <span class="svg-icon svg-icon-3x">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </button>
            <!--end::Button-->
        </div>
        <!--end::Slider-->
    </div>
    <!--end::Container-->
</div>
<!--end::Team Section-->
<!--begin::Projects Section-->
<div class="mb-lg-n15 position-relative z-index-2">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
            <!--begin::Card body-->
            <div class="card-body p-lg-20">
                <!--begin::Heading-->
                <div class="text-center mb-5 mb-lg-10">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="berita" data-kt-scroll-offset="{default: 100, lg: 150}">Berita
                    </h3>
                    <!--begin::Text-->
                    <div class="fs-5 text-muted fw-bold">Berita-berita terkini dari Organisasi Perangkat Daerah
                        (OPD)
                        <br />Kabupaten Wonogiri
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
                        <?php foreach ($daftarBerita as $berita) : ?>
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Publications post-->
                                <div class="card-xl-stretch me-md-6">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="<?= base_url(); ?>/img/beritaimage/<?= $berita['berita_gambar']; ?>">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('<?= base_url(); ?>/img/beritaimage/<?= $berita['berita_gambar']; ?>')">
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
                                        <a href="<?= site_url('responden/detailberita/' . $berita['berita_id']); ?>" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">
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
                                            <a href="../../demo7/dist/apps/projects/users.html" class="text-gray-700 text-hover-primary">
                                                <?= $berita['users_nama']; ?> </a>
                                            <!--end::Author-->
                                            <!--begin::Date-->
                                            <span class="text-muted">
                                                <?= tanggal($berita['tanggal']); ?>
                                            </span>
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
                            <a href="<?= site_url('responden/listberita'); ?>" class="btn btn-flex btn-primary">Lihat Berita
                                Lain
                            </a>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Section-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Projects Section-->
<!--begin::Pricing Section-->
<div class="mt-sm-n20">
    <!--begin::Curve top-->
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve top-->
    <!--begin::Wrapper-->
    <div class="pt-20 landing-dark-bg">
        <!--begin::Container-->
        <div class="container">
            <div class="mt-10 text-center">
                <h1 class="fs-2hx fw-bolder text-white" id="kontak" data-kt-scroll-offset="{default: 100, lg: 150}">
                    Kontak</h1>
                <div class="fs-5 text-muted fw-bold">Anda Dapat Menghubungi Kami Melalui Kontak di Bawah Ini
                </div>
            </div>
            <!--begin::Row-->
            <div class="card bg-transparent">
                <!--begin::Body-->
                <div class="card-body p-lg-16">
                    <!--begin::Row-->
                    <div class="row g-5 mb-5 mb-lg-15">
                        <!--begin::Col-->
                        <div class="col-sm-4 ps-lg-10">
                            <!--begin::Address-->
                            <div class="text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-lg-100">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                <span class="svg-icon svg-icon-3tx">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 24 24">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Subtitle-->
                                <h1 class="text-dark fw-bolder my-5">Alamat</h1>
                                <!--end::Subtitle-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fs-3 fw-bold">Jl. Kabupaten No. 4-6, Wonogiri 57612</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Address-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-4 ps-lg-10">
                            <!--begin::Address-->
                            <div class="text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-lg-100">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                <span class="svg-icon svg-icon-3tx">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Subtitle-->
                                <h1 class="text-dark fw-bolder my-5">Telepon</h1>
                                <!--end::Subtitle-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fs-3 fw-bold">(0273) 321002 Fax. 322318</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Address-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-4 ps-lg-10">
                            <!--begin::Address-->
                            <div class="text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-lg-100">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                <span class="svg-icon svg-icon-3tx">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 24 24">
                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Subtitle-->
                                <h1 class="text-dark fw-bolder my-5">Email</h1>
                                <!--end::Subtitle-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fs-3 fw-bold">ppid@wonogirikab.go.id</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Address-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Card-->
                    <div class="card mb-4 bg-transparent text-center">
                        <div class="card-body ps-lg-10 py-4">
                            <!-- <h2 class="text-white-50 text-muted mb-4">Atau,</h2> -->
                            <div class="text-muted fs-4 mb-3">Temukan Kami</div>
                            <a href="https://www.instagram.com/humas_wonogiri/" class="mx-4">
                                <img src="<?= base_url(); ?>/assets/media/svg/brand-logos/instagram-2-1.svg" class="h-30px my-2" alt="" />
                            </a>
                            <a href="https://www.youtube.com/channel/UCvgp25ouFiVgLSXUQWm9rzg" class="mx-4">
                                <img src="<?= base_url(); ?>/assets/media/svg/brand-logos/youtube-play.svg" class="h-30px my-2" alt="" />
                            </a>
                            <a href="https://twitter.com/diskominfowng" class="mx-4">
                                <img src="<?= base_url(); ?>/assets/media/svg/brand-logos/twitter.svg" class="h-30px my-2" alt="" />
                            </a>
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Row-->
            <!--end::Container-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Pricing Section-->
</div>
<!--end::Root-->
<!--end::Main-->
<?= $this->endSection('content'); ?>