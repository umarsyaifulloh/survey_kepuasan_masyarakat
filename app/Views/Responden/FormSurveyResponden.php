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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <img alt="Logo" src="/img/logoopd/<?= $survey['opd_logo']; ?>" class="h-75px" />
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="col-12 mt-5 w-lg-700px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Heading-->
                    <div class="mb-10">
                        <!--begin::Title-->
                        <p class="text-center text-dark mb-3 fw-bold fs-1"><?= $survey['survey_judul']; ?></p>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <div class="mt-5 text-gray-400 fw-bold fs-6"><?= $survey['survey_deskripsi']; ?>
                        </div>
                        <!--end::Link-->
                    </div>
                    <!--begin::Team Section-->
                    <div class="py-10 py-lg-20">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Slider-->
                            <div class="tns tns-default">
                                <form class="form w-100" action="<?= site_url('/responden/createrespondensurvey/' . $survey['survey_id']); ?>" method="POST">
                                    <?= csrf_field(); ?>
                                    <!--begin::Wrapper-->
                                    <div data-tns="true" data-tns-loop="false" data-tns-swipe-angle="false" data-tns-speed="1000" data-tns-autoplay="false" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 1}}">
                                        <!--begin::Item-->
                                        <?php $i = 1;
                                        foreach ($pertanyaanOpsi as $po) : ?>
                                            <div class="text-center">
                                                <div class="col-xl-12 card-title fs-4 fw-bolder soal" id="result"> <?= $i; ?>.
                                                    <?= $po['pertanyaan']['pertanyaan_nama']; ?></div>
                                                <!-- begin:start alert -->
                                                <div class="fv-plugins-message-container invalid-feedback">
                                                    <div data-field="target_title" data-validator="notEmpty">
                                                        <?= $validation->getError("opsi"); ?></div>
                                                </div>
                                                <div class="fv-plugins-message-container invalid-feedback">
                                                    <div data-field="target_title" data-validator="notEmpty">
                                                        <?= $validation->getError("opsi[$i]"); ?></div>
                                                </div>
                                                <!-- end:start alert -->
                                                <!--begin::Person-->
                                                <div class="mt-8">
                                                    <!--begin::Name-->
                                                    <div class="col-xl-12">
                                                        <!--begin::Row-->
                                                        <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                                            <?php foreach ($po['opsi'] as $opsi) : ?>
                                                                <!--begin::Col-->
                                                                <div class="col-md-12 col-lg-12 col-xxl-12">
                                                                    <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
                                                                        <!--begin::Radio button-->
                                                                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                            <input class="form-check-input js-radioInput" type="radio" name="opsi[<?= $i; ?>]" value="<?= $opsi['pertanyaanopsi_id']; ?>" <?= (old("opsi[$i]")) ? 'checked' : ''; ?> />
                                                                        </span>
                                                                        <!--end::Radio button-->
                                                                        <span class="ms-5">
                                                                            <span class="fs-6 fw-bolder mb-1 d-block"><?= $opsi['opsi_nama']; ?></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <!--end::Col-->
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Name-->
                                                </div>
                                                <!--end::Person-->
                                            </div>
                                            <!--end::Item-->
                                        <?php $i++;
                                        endforeach; ?>
                                    </div>
                                    <!--end::Wrapper-->
                                    <div class="text-center">
                                        <!--begin::Submit button-->
                                        <button type="submit" class="btn btn-lg btn-primary mb-5 mt-5" id="my_button" disabled>Kirim</button>
                                        <!--end::Submit button-->
                                    </div>
                                </form>
                                <!--end::Form-->

                                <!--begin::Button-->
                                <button class="btn btn-icon btn-active-color-primary mx-n5" id="kt_team_slider_prev" aria-controls="tns1" tabindex="-1" data-controls="prev">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                                    <span class="svg-icon svg-icon-3x">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button class="btn btn-icon btn-active-color-primary mx-n5" id="kt_team_slider_next" aria-controls="tns1" tabindex="-1" data-controls="next">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                    <span class="svg-icon svg-icon-3x">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Slider-->
                        </div>
                        <!--end::Container-->

                    </div>
                    <!--end::Team Section-->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        //get semua radio button
        var inputElems = document.getElementsByClassName("js-radioInput");

        //get semua soal (pertanyaan) 
        var soal = document.getElementsByClassName("soal");
        jumlahsoal = soal.length; //hitung jumlah soal

        //menampung jumlah opsi(radio button) pada pertanyaan terakhir
        var jumlahOpsiAkhir = [];
        <?php foreach ($jumlah as $jm) : ?>
            jumlahOpsiAkhir.push("<?= $jm['jumlah_opsi'] ?>");
        <?php endforeach; ?>

        //menghitung batas akhir pilih opsi untuk button submit tetap disable
        batas = inputElems.length - jumlahOpsiAkhir;

        for (var i = inputElems.length - 1; i >= batas; --i) {
            var elem = inputElems[i];
            elem.addEventListener('click', function() {
                //get semua radio button yang terchecked
                checked = document.querySelectorAll('input[type=radio]:checked');
                //jika jumlah opsi yang dipilih sama dengan jumlah soal 
                if (checked.length == jumlahsoal) {
                    //enable button submit
                    document.getElementById("my_button").removeAttribute("disabled");
                }
            });
        }
    </script>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>