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
                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid mt-8 mb-8" id="kt_content">
                        <!--begin::Container-->
                        <div class="container-xxl" id="kt_content_container">
                            <!--begin::About card-->
                            <div class="card">
                                <!--begin::Body-->
                                <div class="card-body p-lg-17">
                                    <!--begin::Team Section-->
                                    <div class="py-10 py-lg-20 mt-n5">
                                        <!--begin::Container-->
                                        <div class="container">
                                            <!--begin::Product slider-->
                                            <div class="tns tns-default mx-n12">
                                                <!--begin::Slider-->
                                                <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
                                                    <?php foreach ($listBeritaTerakhir as $beritaTerakhir) : ?>
                                                        <?php foreach ($beritaTerakhir['berita'] as $berita) : ?>
                                                            <!--begin::Item-->
                                                            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
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
                                                                <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="<?= base_url(); ?>/img/beritaimage/<?= $berita['berita_gambar']; ?>">
                                                                    <div class="overlay-wrapper min-h-300px bgi-no-repeat bgi-position-center bgi-size-cover card-rounded" style="background-image:url('<?= base_url(); ?>/img/beritaimage/<?= $berita['berita_gambar']; ?>')">
                                                                    </div>
                                                                    <div class=" overlay-layer bg-dark card-rounded bg-opacity-25">
                                                                        <i class="bi bi-eye-fill fs-2x text-white"></i>
                                                                    </div>
                                                                </a>
                                                                <!--begin::Description-->
                                                                <div class="fs-5 fw-bold text-gray-600">
                                                                    <!--begin::Text-->
                                                                    <p class="m-0 justify">
                                                                        <?= strip_only_tags_long($berita['berita_isi'], '<b><s><img><p><u><var><span><div><table>'); ?>
                                                                        <a href="<?= site_url('responden/detailberita/' . $berita['berita_id']); ?>" class="link-primary pe-1">Baca Selengkapnya</a>
                                                                    </p>
                                                                    <!--end::Text-->
                                                                </div>
                                                                <!--end::Description-->
                                                            </div>
                                                            <!--end::Item-->
                                                        <?php endforeach; ?>
                                                    <?php endforeach; ?>
                                                </div>
                                                <!--end::Slider-->
                                                <!--begin::Slider button-->
                                                <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Slider button-->
                                                <!--begin::Slider button-->
                                                <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Slider button-->
                                            </div>
                                            <!--end::Product slider-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Team Section-->
                                    <div class="card-header border-0 pt-5 position-relative mb-6">
                                        <!--begin::Search-->
                                        <div id="kt_header_search" class="d-flex align-items-center w-75 position-absolute top-0 start-50 translate-middle-x" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="false" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
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
                                                <input type="text" class="search-input form-control form-control-solid ps-13" name="search" value="" placeholder="Cari" data-kt-search-element="input" id="myFilter" onkeyup="myFunction()" />
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
                                    <!--begin::Section-->
                                    <div class="mb-16 kartu-konten" id="myProducts" style="display: none;">
                                        <!--end::Top-->
                                        <!--begin::Row-->
                                        <div class="row g-10">
                                            <?php foreach ($listBerita as $berita) : ?>
                                                <!--begin::Col-->
                                                <div class="col col-md-4 col-6 kartu">
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
                                                            <a class="fs-4 text-dark fw-bolder text-dark lh-base card-title">
                                                                <?= $berita['berita_judul']; ?>
                                                            </a>
                                                            <!--end::Title-->
                                                            <!--begin::Text-->
                                                            <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5">
                                                                <?= strip_only_tags($berita['berita_isi'], '<b><s><img><p><u><var><span><div><table>'); ?>
                                                                <a href="<?= site_url('responden/detailberita/' . $berita['berita_id']); ?>" class="link-primary pe-1">Baca Selengkapnya</a>
                                                            </div>
                                                            <!--end::Text-->
                                                            <!--begin::Content-->
                                                            <div class="fs-6 fw-bolder">
                                                                <!--begin::Author-->
                                                                <a href="../../demo7/dist/apps/projects/users.html" class="text-gray-700 text-hover-primary">
                                                                    <?= $berita['users_nama']; ?>
                                                                </a>
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
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Section-->
                                    <ul class="pagination pagination-outline"></ul>
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
</div>
<!-- begin::Pagination 2 -->
<script type="text/javascript">
    function getPageList(totalPages, page, maxLength) {
        function range(start, end) {
            return Array.from(Array(end - start + 1), (_, i) => i + start);
        }

        var sideWidth = maxLength < 9 ? 1 : 2;
        var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
        var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

        if (totalPages <= maxLength) {
            return range(1, totalPages);
        }

        if (page <= maxLength - sideWidth - 1 - rightWidth) {
            return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
        }

        if (page >= totalPages - sideWidth - 1 - rightWidth) {
            return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
        }

        return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth +
            1, totalPages));
    }

    $(function() {
        var numberOfItem = $(".kartu-konten .kartu").length;
        var limitPerPage = 6; //Banyak item pada satu halaman
        var totalPages = Math.ceil(numberOfItem / limitPerPage);
        var paginationSize = 5; //Banyak element pagination yang terlihat
        var currentPage;

        function showPage(whichPage) {
            if (whichPage < 1 || whichPage > totalPages) return false;

            currentPage = whichPage;

            $(".kartu-konten .kartu").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage)
                .show();

            $(".pagination li").slice(1, -1).remove();

            getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                $("<li>").addClass("page-item").addClass("m-1").addClass(item ? "current-page" : "dots")
                    .toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
                        .attr({
                            href: "javascript:void(0)"
                        }).text(item || "...")).insertBefore(".next-page");
            });

            $(".previous-page").toggleClass("disabled", currentPage === 1);
            $(".next-page").toggleClass("disabled", currentPage === totalPages);
            return true;
        }

        $(".pagination").append(
            $("<li>").addClass("page-item").addClass("previous-page").addClass("m-1").append($("<a>").addClass(
                "page-link").attr({
                href: "javascript:void(0)"
            }).append($("<i>").addClass("previous"))),
            $("<li>").addClass("page-item").addClass("next-page").addClass("m-1").append($("<a>").addClass(
                "page-link").attr({
                href: "javascript:void(0)"
            }).append($("<i>").addClass("next")))
        );

        $(".kartu-konten").show();
        showPage(1);

        $(document).on("click", ".pagination li.current-page:not(.active)", function() {
            return showPage(+$(this).text());
        });

        $(".next-page").on("click", function() {
            return showPage(currentPage + 1);
        });

        $(".previous-page").on("click", function() {
            return showPage(currentPage - 1);
        });
    });
</script>
<!-- end::Pagination 2 -->
<?= $this->endSection('content'); ?>