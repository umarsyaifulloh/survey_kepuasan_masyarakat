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

<head>
    <base href="../">
    <title>Survey Kepuasan Masyarakat</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/media/logos/icon-wng.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="<?= base_url(); ?>/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url(); ?>/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--end::Global Stylesheets Bundle-->
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
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200"
    class="bg-white position-relative">
    <!--begin::Main-->

    <?= $this->renderSection('content'); ?>

    <!--begin::Javascript-->
    <script>
    var hostUrl = "<?= base_url(); ?>/assets/";
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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