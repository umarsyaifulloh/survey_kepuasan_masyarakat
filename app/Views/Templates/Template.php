<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<style>
    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    }
</style>

<head>
    <base href="../">
    <title>Survey Kepuasan Masyarakat</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/media/logos/icon-wng.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="<?= base_url(); ?>/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!-- Search Box -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css" />
    <!-- End Search Box -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/pagination.css"> -->
    <!-- begin::Crop -->
    <link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" />
    <script src="https://unpkg.com/dropzone"></script>
    <script src="https://unpkg.com/cropperjs"></script>
    <!-- end::Crop -->
    <!-- Begin :: Chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/simplePagination.min.css" integrity="sha512-m3x+GduGUoEMGB6dywpah/mAG3GafMmxmByGLqKfZFF8xr6THjjOcH0OWV1rLBFiZMotecZxWhRz0lVlVNl72w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.14.305/pdf.min.js" integrity="sha512-dw+7hmxlGiOvY3mCnzrPT5yoUwN/MRjVgYV7HGXqsiXnZeqsw1H9n9lsnnPu4kL2nx2bnrjFcuWK+P3lshekwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.js"></script>

    <!-- End :: Chart -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/trix.css">
    <script type="text/javascript" src="<?= base_url(); ?>/assets/js/trix.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
    <style type="text/css">
        .left {
            text-align: left;
        }

        .right {
            text-align: right;
        }

        .center {
            text-align: center;
        }

        .justify {
            text-align: justify;
        }

        @media print {
            @page {
                margin-top: 30px;
                margin-bottom: 20px;
            }

            .no-print,
            .no-print * {
                display: none !important;
            }

            .page-break {
                display: block !important;
                page-break-after: always;
            }


            .card-header,
            .tombol-back,
            .tombol-side-bar,
            footer,
            a#debug-icon-link,
            #kt_aside_toggle {
                display: none;
            }
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" style="background-image: url()" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">
    <!--begin::Main-->

    <?= $this->include('Templates/Sidebar'); ?>

    <!--begin::Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <!-- Start Autosize Text Area -->
    <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
    <script>
        autosize(document.getElementById("note"));
    </script>
    <!-- End Autosize Text Area -->

    <!-- Search Box -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script>
        $(".selectpicker").selectpicker();
    </script>
    <!-- End Search Box -->

    <!-- Start Search -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- NO 1 -->
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <!-- NO 2 -->
    <script>
        $(document).ready(function() {
            $("#myInput2").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable2 tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <!-- End Search -->
    <!-- Start Search Laporan -->
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".isi").filter(function() {
                    console.log($(this).text().toLowerCase().indexOf(value))
                    if ($(this).text().toLowerCase().indexOf(value) <= -1) {
                        $(this).toggle(false)
                    } else {
                        $(this).toggle(true)
                    }
                });
            });
        });
    </script>
    <!-- End Search Laporan -->

    <!-- Start Search Card-->
    <script>
        function myFunction() {
            var input, filter, cards, cardContainer, title, i;
            input = document.getElementById("myFilter");
            filter = input.value.toUpperCase();
            cardContainer = document.getElementById("myProducts");
            cards = cardContainer.getElementsByClassName("col");
            for (i = 0; i < cards.length; i++) {
                title = cards[i].querySelector(".card-title");
                if (title.innerText.toUpperCase().indexOf(filter) > -1) {
                    cards[i].style.display = "";
                } else {
                    cards[i].style.display = "none";
                }
            }
        }
    </script>
    <!-- End Search Card-->

    <!-- Start Search Card-->
    <script>
        function myFunction2() {
            var input, filter, cards, cardContainer, title, i;
            input = document.getElementById("myFilter");
            filter = input.value.toUpperCase();
            cardContainer = document.getElementById("myProducts");
            cards = cardContainer.getElementsByClassName("card");
            for (i = 0; i < cards.length; i++) {
                title = cards[i].querySelector(".card-title");
                if (title.innerText.toUpperCase().indexOf(filter) > -1) {
                    cards[i].style.display = "";
                } else {
                    cards[i].style.display = "none";
                }
            }
        }
    </script>
    <!-- End Search Card-->

    <link href="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.js"></script>


    <!-- Start hapus fitur upload file pada trix -->
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
    <!-- End hapus fitur upload file pada trix -->

    <!-- begin::Pagination 1 -->
    <script>
        // var items = $('.list-wrapper .list-item');
        // var numItems = items.length;
        // var perPage = 2;

        // items.slice(perPage).hide();

        // $('#pagination-container').pagination({
        //     items: numItems,
        //     itemsOnPage: perPage,
        //     prevText: "<",
        //     nextText: ">",
        //     onPageClick: function(pageNumber) {
        //         var showFrom = perPage * (pageNumber - 1);
        //         var showTo = showFrom + perPage;
        //         items.hide().slice(showFrom, showTo).show();
        //     }
        // });
    </script>
    <!-- end::Pagination 1 -->

    <script>
        var hostUrl = "<?= base_url(); ?>/assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url(); ?>/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="<?= base_url(); ?>/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="<?= base_url(); ?>/assets/js/custom/apps/file-manager/list.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom/apps/projects/project/project.js"></script>
    <script src="<?= base_url(); ?>/assets/js/widgets.bundle.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom/widgets.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom/apps/chat/chat.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom/utilities/modals/new-target.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
    <!-- SweetAlert -->
    <script src="<?= base_url(); ?>/assets/js/vendor/sweetalert/dist/sweetalert2all.js"></script>
    <!-- JS Bikinan Sendiri -->
    <script src="<?= base_url(); ?>/assets/js/script.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>