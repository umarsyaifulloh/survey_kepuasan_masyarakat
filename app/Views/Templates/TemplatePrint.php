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

    <!-- Begin :: Chart -->
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/trix.css">
    <script type="text/javascript" src="<?= base_url(); ?>/assets/js/trix.js"></script>
    <!-- End :: Chart -->
    <style type="text/css">
        table {
            border-collapse: collapse;
        }

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
    </style>
    <style>
        .border-table {
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            font-size: 12pt bold;
        }

        .border-table th {
            border: 1px solid #000;
        }

        .border-table td {
            border: 1px solid #000;
        }

        .text-center {
            text-align: center
        }

        .page-break {
            display: block !important;
            page-break-after: always;
        }

        @media print {
            @page {
                margin-top: 30px;
                margin-bottom: 20px;
            }

            .no-print,
            .no-print *,
            .button-print,
            .header,
            .card-header {
                display: none !important;
            }

            .page-break {
                display: block !important;
                page-break-before: always;
            }

            .kartu {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<?= $this->renderSection('content'); ?>



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


</html>