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
                            <?php if (session()->get('users_opd_kode') == 1) : ?>
                                <a href="<?= site_url('berita/index/' . session()->get('users_opd_kode')); ?>" class="btn btn-outline-dark mt-auto" value="Go back!" onclick="history.back()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg>
                                </a>
                            <?php else : ?>
                                <a href="<?= site_url('berita/'); ?>" class="btn btn-outline-dark mt-auto" value="Go back!" onclick="history.back()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_new_target_form" class="form" action="/berita/create" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Tambah Berita</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Judul</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Inputan ini wajib diisi"></i>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid <?= ($validation->hasError('berita_judul')) ? 'is-invalid' : ''; ?>" placeholder="Tuliskan Judul Berita" id="berita_judul" name="berita_judul" autofocus value="<?= old('berita_judul'); ?>" />
                            <div class="fv-plugins-message-container invalid-feedback">
                                <div data-field="target_title" data-validator="notEmpty">
                                    <?= $validation->getError('berita_judul'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-bold mb-2"><span class="required">Isi</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Inputan ini wajib diisi"></i></label>
                            <textarea style="display:none;" class="form-control form-control-solid  <?= ($validation->hasError('berita_isi')) ? 'is-invalid' : ''; ?>" id="berita_isi" autofocus name="berita_isi" cols="30" rows="10"><?= old('berita_isi'); ?></textarea>
                            <div class="fv-plugins-message-container invalid-feedback">
                                <div data-field="target_title" data-validator="notEmpty">
                                    <?= $validation->getError('berita_isi'); ?></div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <input type="hidden" value="<?= session()->get('users_nip'); ?>" class="form-control form-control-solid" id="created_by" placeholder="Tuliskan Nama Penulis" name="created_by" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="d-block fw-bold fs-6 mb-5">
                                <span class="required">Gambar Thumbnail</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="E.g. Select a logo to represent the company that's running the campaign."></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline" data-kt-image-input="true" style="background-image: url(<?= base_url() ?>/assets/media/svg/files/blank-image.svg)">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-300px h-200px"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Ubah gambar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input class="<?= ($validation->hasError('berita_gambar')) ? 'is-invalid' : ''; ?>" type="file" id="berita_gambar" name="berita_gambar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Hapus gambar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Hapus gambar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Format file: png, jpg, jpeg.</div>
                            <div class="fv-plugins-message-container invalid-feedback">
                                <div data-field="target_title" data-validator="notEmpty">
                                    <?= $validation->getError('berita_gambar'); ?>
                                </div>
                            </div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Reset</button>
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Tambah</span>
                                <span class="indicator-progress">Silahkan Tunggu...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('/ckeditor4/ckeditor/ckeditor.js') ?>">
</script>
<script>
    CKEDITOR.replace('berita_isi', {});
</script>
<?= $this->endSection('content'); ?>