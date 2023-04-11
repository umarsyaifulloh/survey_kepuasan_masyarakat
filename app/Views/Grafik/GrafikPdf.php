<?= $this->extend('Templates/TemplatePrint'); ?>
<?= $this->section('content'); ?>
<!--begin::Wrapper-->
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <!--begin::Header-->
    <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
        <!--begin::Container-->
        <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
            <div class="modal-header border-0 justify-content">
                <!--begin::Wrapper-->
                <div class="d-flex d-lg-none align-items-center">
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
                <div class="d-flex">
                    <div class="flex-shrink-0 text-center">
                        <a href="<?= site_url('/grafik/grafik/' . $survey['survey_id']); ?>" class="btn btn-outline-dark mt-auto" value="Go back!">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
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
            <div class="row g-5 g-xl-6 button-print">
                <div class="card-toolbar d-flex justify-content-end mb-3">
                    <a type="button" id="btnPrint" class="no-print btn btn-sm btn-success my-1 float-right"><span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                            </svg>
                        </span>Print
                    </a>
                    <a target="blank" id="downloadPdf" class="btn btn-sm btn-danger my-1 mx-1">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->PDF
                    </a>
                </div>
            </div>
            <div id="reportPage">
                <?php $i = 1;
                $j = 1 ?>
                <?php foreach ($dataGrafiks as $grafik) : ?>
                    <!--begin::Charts Widget 1-->
                    <div class="card card-xl-stretch mb-xl-8 kartu">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-center">
                            <!--begin::Chart-->
                            <canvas id="myChart<?= $grafik['pertanyaan']['pertanyaan_id'] ?>" style="position: relative; height:40vh; width:60vw"></canvas>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 1-->
                    <?php if ($j % 3 == 0) : ?>
                        <?php echo '<div class="page-break"></div>' ?>
                    <?php endif; ?>
                    <?php $j++ ?>
                <?php endforeach ?>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Wrapper-->

<!-- begin::ChartJS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script>
<!-- end::ChartJS -->

<!-- begin::Logic Chart -->
<script>
    /**
     * code di bawah ini untuk membuat grafik dengan menggunakan library chart js
     */
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
                }
            },
            title: {
                display: true,
                text: "<?= $i++ ?>. <?= $grafik['pertanyaan']['pertanyaan_nama'] ?>"
            },
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

        });
    <?php endforeach; ?>


    /**
     *  code di bawah ini untuk mengeksport grafik laporan ke dalam bentuk PDF
     * library yang digunakan adalah PdfJS
     */
    $('#downloadPdf').click(function(event) {
        // get size of report page
        var reportPageHeight = $('#reportPage').innerHeight();
        var reportPageWidth = $('#reportPage').innerWidth();

        // create a new canvas object that we will populate with all other canvas objects
        var pdfCanvas = $('<canvas />').attr({
            id: "canvaspdf",
            width: reportPageWidth,
            height: reportPageHeight
        });

        // keep track canvas position
        var pdfctx = $(pdfCanvas)[0].getContext('2d');
        var pdfctxX = 10;
        var pdfctxY = 10;
        var buffer = 100;

        // for each chart.js chart
        $("canvas").each(function(index) {
            // get the chart height/width
            var canvasHeight = $(this).innerHeight();
            var canvasWidth = $(this).innerWidth();

            // draw the chart into the new canvas
            pdfctx.drawImage($(this)[0], pdfctxX, pdfctxY, canvasWidth, canvasHeight);
            pdfctxX += canvasWidth + buffer;

            // our report page is in a grid pattern so replicate that in the new canvas
            if (index % 2 === 1 || index % 2 === 0) {
                pdfctxX = 0;
                pdfctxY += canvasHeight + buffer;
            }
        });

        // create new pdf and add our new canvas as an image
        var pdf = new jsPDF('p', 'pt', [reportPageWidth, reportPageHeight]);
        pdf.addImage($(pdfCanvas)[0], 'PNG', 0, 0);

        // download the pdf
        pdf.save('GrafikLaporan.pdf');
    });
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

<!-- Start Print -->
<script>
    $('#btnPrint').on('click', function() {
        window.print();
    })
</script>
<!-- End Print -->

<?= $this->endSection('content'); ?>