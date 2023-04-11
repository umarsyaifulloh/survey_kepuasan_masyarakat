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
    <base href="../../../">
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
    <link rel="shortcut icon" href="assets/media/logos/icon-wng.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!-- captcha -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sigma-1/14.png)">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <!-- <img alt="Logo" src="assets/media/logos/logo.png" class="h-40px" /> -->
                <img alt="Logo" src="/img/logoopd/<?= $survey['opd_logo']; ?>" class="h-75px" />
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="mt-5 w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15">
                    <!--begin::Form-->
                    <form class="form w-100" novalidate="novalidate" action="<?= site_url('/responden/checkemailresponden/' . $survey['survey_id']); ?>" method="POST">
                        <?= csrf_field(); ?>
                        <!--begin::Heading-->
                        <div class="mb-10">
                            <!--begin::Title-->
                            <p class="text-center text-dark mb-3 fw-bold fs-1"><?= $survey['survey_judul']; ?></p>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="mt-5 text-gray-400 fw-bold fs-6">
                                <?= $survey['survey_deskripsi']; ?>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Email</span>
                                <!-- begin:start alert -->
                                <!-- end:start alert -->
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid" type="text" <?= ($validation->hasError('responden_email')) ? 'is-invalid' : ''; ?> name="responden_email" autocomplete="off" />
                            <!--end::Input-->
                            <!-- begin:start alert -->
                            <div class="fv-plugins-message-container invalid-feedback">
                                <div data-field="target_title" data-validator="notEmpty">
                                    <?= $validation->getError('responden_email'); ?></div>
                            </div>
                            <!-- end:start alert -->
                        </div>
                        <!--end::Input group-->
                        <input type="hidden" name="responden_survey_id" value="<?= $survey['survey_id']; ?>">
                        <!--begin::Input Group-->
                        <div class="fv-row mb-10">
                            <div class="g-recaptcha" data-sitekey="<?= env('RECAPTCHAV2_SITEKEY') ?>"></div>
                        </div>
                        <!--begin::Actions-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Lanjut</span>
                            </button>
                            <!--end::Submit button-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "<?= base_url(); ?>/assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url(); ?>/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="<?= base_url(); ?>/assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Page Custom Javascript-->
    <!-- SweetAlert -->
    <script src="<?= base_url(); ?>/assets/js/vendor/sweetalert/dist/sweetalert2all.js"></script>
    <!-- JS Bikinan Sendiri -->
    <script src="<?= base_url(); ?>/assets/js/script.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>