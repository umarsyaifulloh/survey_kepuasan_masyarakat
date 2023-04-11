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
                                    <!--begin::Heading-->
                                    <div class="mb-6 text-center">
                                        <!--begin::Title-->
                                        <h1 class="mb-6">Survey Organisasi Perangkat Daerah</h1>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
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
                                                <input type="text" class="search-input form-control form-control-solid ps-13" name="search" value="" id="myFilter" onkeyup="myFunction()" placeholder="Cari" data-kt-search-element="input" />
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
                                    <!--begin::Row-->
                                    <div class="row g-6 g-xl-9 mb-6 mb-xl-9 kartu-konten" id="myProducts" style="display: none;">
                                        <?php foreach ($listopd as $opd) : ?>
                                            <!--begin::Col-->
                                            <div class="col col-md-6 col-lg-4 col-xl-3 col-6 kartu">
                                                <!--begin::Card body-->
                                                <div class="card-body d-flex justify-content-center text-center flex-column p-4">
                                                    <!--begin::Name-->
                                                    <a href="<?= site_url("/responden/surveyberitaresponden/" . $opd['opd_kode']); ?>" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                        <!--begin::Image-->
                                                        <div class="circle mx-auto mb-5 d-flex w-125px h-125px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('<?= base_url(); ?>/img/logoopd/<?= $opd['opd_logo'] ?>')">
                                                        </div>
                                                        <!--end::Image-->
                                                        <!--begin::Title-->
                                                        <div class="fs-5 fw-bolder mb-2 card-title"><?= $opd['opd_nama'] ?>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Col-->
                                        <?php endforeach; ?>
                                        <?php
                                        // echo $pager->links('ms_opd', 'custom_pagination');
                                        ?>
                                        <ul class="pagination pagination-outline"></ul>
                                    </div>
                                    <!--end:Row-->
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
        var limitPerPage = 8; //Banyak item pada satu halaman
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