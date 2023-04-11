<?= $this->extend('Auth/Template'); ?>
<?= $this->section('content'); ?>
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Aside-->
        <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative"
            style="background-color: #63A5BF">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                <!--begin::Content-->
                <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                    <!--begin::Title-->
                    <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #000000;">Selamat Datang</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <p class="fw-bold fs-2" style="color: #FFFFFF;">Website Survey Kepuasan Masyarakat
                        <br />Kabupaten Wonogiri
                    </p>
                    <!--end::Description-->
                </div>
                <!--end::Content-->
                <!--begin::Illustration-->
                <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-center min-h-100px min-h-lg-350px mb-10"
                    style="background-image: url(assets/media/illustrations/sigma-1/21.png"></div>
                <!--end::Illustration-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <!--begin::Wrapper-->
                <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->

                    <form class="form w-100" method="POST" action="/Auth/cekLogin">
                        <!--begin::Heading-->
                        <?= csrf_field(); ?>
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Masuk</h1>
                            <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                            <?php endif; ?>
                            <!--end::Title-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">NIP</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" id="users_nip"
                                name="users_nip" autofocus value="<?= old('users_nip'); ?>" autocomplete="off" />
                            <div class="invalid-feedback">
                                <?= $validation->getError('users_nip'); ?>
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid" type="password"
                                        placeholder="" id="users_password" name="users_password" autofocus
                                        value="<?= old('users_password'); ?>" autocomplete="off" />
                                    <span
                                        class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                </div>
                                <!--end::Input wrapper-->
                                <div class="invalid-feedback">
                                    <?= $validation->getError('users_password'); ?>
                                </div>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Input Group-->
                        <div class="fv-row mb-10">
                            <div class="g-recaptcha" data-sitekey="<?= env('RECAPTCHAV2_SITEKEY') ?>"></div>
                        </div>
                        <!--begin::Actions-->
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <button type="submit" id="send_form" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Masuk</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->
<?= $this->endSection('content'); ?>