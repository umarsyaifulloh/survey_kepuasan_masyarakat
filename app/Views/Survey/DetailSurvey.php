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
                    <div class="d-flex">
                        <div class="flex-shrink-0 text-center">
                            <?php if (session()->get('users_role_id') == 1) : ?>
                                <a href="<?= site_url('/opd/detail/' . '/' . $opd['opd_kode']) ?>" class="btn btn-outline-dark mt-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg></a>
                                </a>
                            <?php else : ?>
                                <a href="<?= site_url('/survey') ?>" class="btn btn-outline-dark mt-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg></a>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_new_target_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Detail Survey</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Form-->
                        <form id="kt_project_settings_form" class="form">
                            <!--begin::Card body-->
                            <div class="card-body p-9">
                                <div class="row mb-8">
                                    <div class="col-xl-3">
                                        <div class="fs-4 fw-bold mt-2 mb-3">Judul</div>
                                    </div>
                                    <div class="col-xl-9 fv-row">
                                        <input type="text" class="form-control form-control-solid" name="name" value="<?= $survey['survey_judul']; ?>" disabled />
                                    </div>
                                </div>
                                <!--begin::Row-->
                                <div class="row mb-8">
                                    <div class="col-xl-3">
                                        <div class="fs-4 fw-bold mt-2 mb-3">Deskripsi</div>
                                    </div>
                                    <div class="col-xl-9 fv-row">
                                        <textarea name="description" disabled class="form-control form-control-solid h-100px"><?= $survey['survey_deskripsi']; ?></textarea>
                                    </div>
                                </div>
                                <!--begin::Row-->
                                <div class="row mb-8">
                                    <div class="col-xl-3">
                                        <div class="fs-4 fw-bold mt-2 mb-3">Tahun</div>
                                    </div>
                                    <div class="col-xl-9 fv-row">
                                        <input type="text" class="form-control form-control-solid" name="type" value="<?= $survey['survey_tahun']; ?>" disabled />
                                    </div>
                                </div>
                                <!--begin::Row-->
                                <div class="row mb-8">
                                    <div class="col-xl-3">
                                        <div class="fs-4 fw-bold mt-2 mb-3">Status</div>
                                    </div>
                                    <div class="col-xl-9 fv-row">
                                        <input type="text" class="form-control form-control-solid" name="type" value="<?= $survey['survey_status']; ?>" disabled />
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                        </form>

                        <!-- FORM TAMBAH PERTANYAAN -->
                        <div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>
                        <!-- Start Row -->
                        <div class="row">
                            <?php if (session()->get('users_opd_kode') == $opd['opd_kode']) : ?>
                                <form method="POST" action="<?= site_url('/pertanyaan/create/' . $survey_id); ?>" enctype="multipart/form-data">
                                    <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap mt-n5 mt-lg-0 me-lg-2 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                                        <!--begin::Heading-->
                                        <h3 class="text-dark fw-bolder my-0 fs-2 mt-10 mb-5">Daftar Pertanyaan</h3>
                                        <!--end::Heading-->
                                        <!--begin::Col-->
                                        <div class="flex-container col-xl-11">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="ADD">
                                            <div class="d-flex flex-column mb-8 fv-row col-xl-11">
                                                <div class="col-lg-12 fv-row">
                                                    <input type="text" class="form-control form-control-lg form-control-solid <?= ($validation->hasError('pertanyaan_nama')) ? 'is-invalid' : ''; ?>" placeholder="Tambahkan Pertanyaan" id="pertanyaan_nama" name="pertanyaan_nama" autofocus value="<?= old('pertanyaan_nama'); ?>" />
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                        <div data-field="target_title" data-validator="notEmpty">
                                                            <?= $validation->getError('pertanyaan_nama'); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="pertanyaan_survey_id" value="<?= $survey_id; ?>">
                                            <input type="hidden" name="created_by" value="<?= $users['users_nip']; ?>">
                                            <div class="col">
                                                <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                                    <span class="indicator-label">Tambah</span>
                                                    <span class="indicator-progress">Silahkan Tunggu...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            <?php endif; ?>
                            <!--begin::Search-->
                            <div id="kt_header_search" class="d-flex align-items-center w-75 mb-7" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="false" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
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
                                    <!--begin::Searching-->
                                    <input type="text" class="search-input form-control form-control-solid ps-13" name="search" id="myFilter" onkeyup="myFunction()" placeholder="Cari" data-kt-search-element="input" />
                                    <!--end::Searching-->
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
                            <!-- begin::row -->
                            <!-- <div class="row"> -->
                            <!-- <div class="row list-wrapper kartu-konten" id="myProducts" style="display: none;"> -->
                            <div class="row list-wrapper kartu-konten" id="myProducts" style="display: none;">
                                <!-- Start Def Pagination -->
                                <?php
                                $i = $k = $l = 1;
                                $j = 1 + (6 * ($currentPage - 1));
                                foreach ($listPertanyaan as $pertanyaan) :
                                ?>
                                    <div class="col col-xl-6 col-lg-6 col-md-6 col-12 mb-5 list-item kartu h-" id="col">
                                        <!--begin::Statistics Widget 5-->
                                        <div class="card hoverable card-xl-stretch mb-xl-8 bg-<?php
                                                                                                if ($i > 6) {
                                                                                                    $i = 1;
                                                                                                }
                                                                                                echo randomColor($i);
                                                                                                $i++; ?>">
                                            <!--begin::Body-->
                                            <div class="card-body h-200px mb-3">
                                                <?php if (session()->get('users_opd_kode') == $opd['opd_kode']) : ?>
                                                    <a href="<?= site_url('/pertanyaan/edit/' . $pertanyaan['pertanyaan_id'] . '/' . $survey_id); ?>">
                                                        <span class=" symbol symbol-30px me-2">
                                                            <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                <span class="symbol-label bg-light-secondary">
                                                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                                                    <span href="Pertanyaan/edit" class=" svg-icon svg-icon-2x svg-icon-<?php
                                                                                                                                        if ($k > 6) {
                                                                                                                                            $k = 1;
                                                                                                                                        }
                                                                                                                                        echo randomColor($k);
                                                                                                                                        $k++; ?>">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </button>
                                                        </span>
                                                    </a>
                                                    <form action="<?= site_url('/pertanyaan/delete/' . $pertanyaan['pertanyaan_id'] . '/' . $survey_id); ?>" class="d-inline btn-delete">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-2x svg-icon-<?php
                                                                                                        if ($l > 6) {
                                                                                                            $l = 1;
                                                                                                        }
                                                                                                        echo randomColor($l);
                                                                                                        $l++; ?>">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </form>
                                                <?php endif; ?>
                                                <?php if (session()->get('users_role_id') == 1) : ?>
                                                    <a href="<?= site_url('/pertanyaan/detailsuper/' . $pertanyaan['pertanyaan_id'] . '/' . $survey_id . '/' . $opd['opd_kode']); ?>">
                                                        <div class=" text-white fw-bolder fs-5 mb-2 mt-5">
                                                            <div class="card-title">
                                                                <?= $j++ . '. ';
                                                                echo $pertanyaan['pertanyaan_nama']; ?>
                                                            </div>
                                                        </div>
                                                    </a>
                                                <?php else : ?>
                                                    <a href="<?= site_url('/pertanyaan/detail/' . $pertanyaan['pertanyaan_id'] . '/' . $survey_id); ?>">
                                                        <div class=" text-white fw-bolder fs-5 mb-2 mt-5">
                                                            <div class="card-title">
                                                                <?= $j++ . '. ';
                                                                echo $pertanyaan['pertanyaan_nama']; ?>
                                                            </div>
                                                        </div>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Statistics Widget 5-->
                                    </div>
                                    <!--end::Statistics Widget 5-->
                                <?php
                                endforeach;
                                ?>
                                <?php
                                // endwhile;
                                // endif;
                                ?>
                            </div>
                            <div id="pagination-container"></div>
                            <ul class="pagination pagination-outline">
                            </ul>
                        </div>
                        <!--end::Row-->
                    </form>
                    <!--end:Form-->
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.min.js" integrity="sha512-9Dh726RTZVE1k5R1RNEzk1ex4AoRjxNMFKtZdcWaG2KUgjEmFYN3n17YLUrbHm47CRQB1mvVBHDFXrcnx/deDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

        return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
    }

    $(function() {
        var numberOfItem = $(".kartu-konten .kartu").length;
        var limitPerPage = 4; //Banyak item pada satu halaman
        var totalPages = Math.ceil(numberOfItem / limitPerPage);
        var paginationSize = 7; //Banyak element pagination yang terlihat
        var currentPage;

        function showPage(whichPage) {
            if (whichPage < 1 || whichPage > totalPages) return false;

            currentPage = whichPage;

            $(".kartu-konten .kartu").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

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
            $("<li>").addClass("page-item").addClass("previous-page").addClass("m-1").append($("<a>").addClass("page-link").attr({
                href: "javascript:void(0)"
            }).append($("<i>").addClass("previous"))),
            $("<li>").addClass("page-item").addClass("next-page").addClass("m-1").append($("<a>").addClass("page-link").attr({
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