<?= $this->extend('Templates/Template'); ?>
<?= $this->section('content'); ?>
<!--begin::Wrapper-->
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <!--begin::Header-->
    <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
        data-kt-sticky-offset="{default: '200px', lg: '300px'}">
        <!--begin::Container-->
        <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
            <div class="modal-header mb-3 border-0 justify-content">
                <!--begin::Wrapper-->
                <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                    <!--begin::Aside mobile toggle-->
                    <div class="btn btn-icon btn-active-icon-mary" id="kt_aside_toggle">
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
                <div class="d-flex">
                    <div class="flex-shrink-0 text-center">
                        <a href="<?= site_url('/laporan/listsurvey/' . $survey['opd_kode'] . '/' . $survey['survey_tahun']); ?>"
                            class="btn btn-outline-dark mt-auto" value="Go back!">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex-column align-items-start justify-content-center">
                    <!--begin::Heading-->
                    <div class="mt-1 text-dark fw-bolder my-0 fs-2"><?= $judul; ?></div>
                    <!--end::Heading-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="content container-xxl d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Row-->
            <div class="row g-5 g-xl-5">
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 col-6 mb-md-5 mb-xl-3">
                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-30 mb-xl-10" style="background-color: #04C8C8;">
                        <!--begin::Header-->
                        <div class="container pt-10 mb-10">
                            <div class="row">
                                <div class="column">
                                    <div class="hero-text text-white"><?= $totalpertanyaan; ?></div>
                                    <h4 class="title-statistik text-white">Total Pertanyaan</h4>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                    </div>
                    <!--end::Card widget 7-->
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 col-6 mb-md-5 mb-xl-3">
                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-30 mb-xl-10" style="background-color: #04C8C8;">
                        <!--begin::Header-->
                        <div class="container pt-10 mb-10">
                            <div class="row">
                                <div class="column">
                                    <div class="hero-text text-white"><?= $totalresponden; ?></div>
                                    <h4 class="title-statistik text-white">Total Respon</h4>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                    </div>
                    <!--end::Card widget 7-->
                </div>
                <!--begin::Col-->
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <div class="row g-5 g-xl-5 mt-2">
                <!--begin::Tables Widget 13-->
                <div class="card">
                    <div class="card-header border-0 pt-5 pb-5">
                        <!--begin::Search-->
                        <div id="kt_header_search" data-kt-search-keypress="true" data-kt-search-min-length="2"
                            data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="false"
                            data-kt-menu-trigger="auto" data-kt-menu-permanent="true"
                            data-kt-menu-placement="bottom-start" data-kt-search="true"
                            class="d-flex align-items-center" style="width:85%;">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                            transform="rotate(45 17.0365 15.1223)" fill="black" />
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
                                    id="myFilter" onkeyup="myFunction2()" />
                                <!--end::Input-->
                                <!--begin::Spinner-->
                                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                    data-kt-search-element="spinner">
                                    <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
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
                            <a type="button" href="<?= site_url('/export/grafikpdf/' . $survey['survey_id']) ?>"
                                class="btn btn-sm btn-primary my-1 mx-1">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z" />
                                        <path fill-rule="evenodd"
                                            d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Export
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 g-xl-5 mt-2 mb-2 kartu-konten" style="display: none;" id="myProducts">
                <?php $i = 1 ?>
                <?php foreach ($dataGrafiks as $grafik) : ?>
                <!--begin::Charts Widget 1-->
                <div class="card card-xl-stretch mb-xl-8 kartu">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span
                                class="card-label fw-bolder fs-3 mb-1"><?= $i++ . '. ' . $grafik['pertanyaan']['pertanyaan_nama']; ?></span>
                        </h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body d-flex justify-content-center">
                        <!--begin::Chart-->
                        <canvas id="myChart<?= $grafik['pertanyaan']['pertanyaan_id'] ?>" id="polar"
                            style="position: relative; height:60vh; width:80vw"></canvas>
                        <!-- <div id=" myChart" style="width:100%; max-width:600px; height:500px;">
                    </div> -->
                        <!--end::Chart-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Charts Widget 1-->
                <?php endforeach ?>
            </div>
            <!--end::Row-->
            <ul class="pagination pagination-outline mb-5"></ul>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Wrapper-->

<!-- begin::ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
<!-- end::ChartJS -->
<!-- begin::Logic Chart -->
<script>
<?php foreach ($dataGrafiks as $grafik) : ?>
var xValues = [];
var yValues = [];
var color = [
    '#04c8c8', //primary
    '#ffc700', //warning
    '#f1416c', //danger
    '#7239ea', //info
    '#fd7e14', //orange
    '#181c32', //dark
    '#009ef7' //success
];

var dynamicColors = function() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return "rgb(" + r + "," + g + "," + b + ")";
};

<?php foreach ($grafik['total'] as $total) : ?>

xValues.push("<?= $total['opsi_nama'] ?>");
yValues.push(<?= $total['total_respon'] ?>);
color.push(dynamicColors());

<?php endforeach ?>

var options = {
    tooltips: {
        enabled: true
    },
    plugins: {
        datalabels: {
            formatter: (value, categories) => {

                let sum = 0;
                let dataArr = categories.chart.data.datasets[0].data;
                dataArr.map(data => {
                    sum += data;
                });
                let percentage = (value * 100 / sum).toFixed(2) + "%";
                return percentage;


            },
            color: '#fff',
        },

    }
};

new Chart("myChart<?= $grafik['pertanyaan']['pertanyaan_id'] ?>", {
    type: "pie",
    data: {
        labels: xValues,
        datasets: [{
            data: yValues,
            backgroundColor: color,
        }],
    },
    options: options


})
<?php endforeach; ?>
</script>
<!-- end::Logic Chart -->

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
    var limitPerPage = 3; //Banyak item pada satu halaman
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