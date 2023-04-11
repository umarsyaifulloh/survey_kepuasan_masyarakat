<?= $this->extend('Templates/Template'); ?>
<?= $this->section('content'); ?>
<!--begin::Wrapper-->
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <!--begin::Header-->
    <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
        <!--begin::Container-->
        <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
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
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap mt-n5 mt-lg-0 me-lg-2 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                <?php if (session()->get('users_role_id') == 1) : ?>
                    <!--begin::Heading-->
                    <h1 class="text-dark fw-bolder my-0 fs-2">Dashboard Super Admin</h1>
                <?php else : ?>
                    <h1 class="text-dark fw-bolder my-0 fs-2">Dashboard Admin</h1>
                <?php endif; ?>
                <!--end::Heading-->
            </div>
            <!--end::Page title=-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header-->
    <!-- Start Alert     -->
    <div class="filter" data-filter="<?= session()->getFlashdata('pesan'); ?>"></div>
    <!-- Finish Alert -->

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Row-->
            <div class="row g-5 g-xl-5">
                <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-6 mb-md-5 mb-xl-3">
                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-30 mb-xl-10" style="background-color: #04C8C8;">
                        <!--begin::Header-->
                        <div class="container pt-10 mb-10">
                            <div class="row">
                                <div class="column">
                                    <div class="hero-text text-white"><?= $totalResponden[0]['responden_id']; ?></div>
                                    <h4 class="title-statistik text-white">Total Responden</h4>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                    </div>
                    <!--end::Card widget 7-->
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-6 mb-md-5 mb-xl-3">
                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-30 mb-xl-10" style="background-color: #04C8C8;">
                        <!--begin::Header-->
                        <div class="container pt-10 mb-10">
                            <div class="row">
                                <div class="column">
                                    <div class="hero-text text-white"><?= $totalSurvey[0]['survey_id']; ?></div>
                                    <h4 class="title-statistik text-white">Total Survey</h4>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                    </div>
                    <!--end::Card widget 7-->
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-6 mb-md-5 mb-xl-3">
                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-30 mb-xl-10" style="background-color: #04C8C8;">
                        <!--begin::Header-->
                        <div class="container pt-10 mb-10">
                            <div class="row">
                                <div class="column">
                                    <div class="hero-text text-white"><?= $totalOPD[0]['opd_kode']; ?>
                                    </div>
                                    <h4 class="title-statistik text-white">Total OPD</h4>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                    </div>
                    <!--end::Card widget 7-->
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-6 mb-md-5 mb-xl-3">
                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-30 mb-xl-10" style="background-color: #04C8C8;">
                        <!--begin::Header-->
                        <div class="container pt-10 mb-10">
                            <div class="row">
                                <div class="column">
                                    <div class="hero-text text-white"><?= $totalBerita[0]['berita_id']; ?></div>
                                    <h4 class="title-statistik text-white">Total Berita</h4>
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
                <!--begin::Charts Widget 1-->
                <div class=" card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Grafik Total Responden</span>
                        </h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Chart-->
                        <canvas id="myChart" style="width:100%;height:375px;"></canvas>
                        <!--end::Chart-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Charts Widget 1-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Wrapper-->

<!-- begin::ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<!-- end::ChartJS -->
<!-- begin::Logic Chart -->
<script>
    var xValues = [];
    var yValues = [];
    var color = "#04C8C8";


    <?php foreach ($grafikRespon as $respon) : ?>
        xValues.push(<?= $respon['tahun_survey'] ?>);
        yValues.push(<?= $respon['total_respon'] ?>);
    <?php endforeach; ?>

    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                barThickness: 50,
                maxBarThickness: 50,
                label: "respon",
                backgroundColor: color,
                data: yValues
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                }
            },
            responsive: true,
            interaction: {
                intersect: false,
            },
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    stacked: true,
                },
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },

        }
    });
</script>
<!-- end::Logic Chart -->

<?= $this->endSection('content'); ?>