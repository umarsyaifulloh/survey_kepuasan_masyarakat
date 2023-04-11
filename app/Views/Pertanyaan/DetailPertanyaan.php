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
                            <?php if (session()->get('users_role_id') == 1) : ?>
                                <a href="<?= site_url('/survey/detailsuper/' . $survey_id . '/' . $opd['opd_kode']) ?>" class="btn btn-outline-dark mt-auto" value="Go back!" onclick="history.back()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg></a>
                            <?php else : ?>
                                <a href="<?= site_url('/survey/detail/' . $survey_id) ?>" class="btn btn-outline-dark mt-auto" value="Go back!" onclick="history.back()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_new_target_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3 mt-5"><?= $pertanyaan['pertanyaan_nama']; ?></h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Form-->
                        <form id="kt_project_settings_form" class="form">
                            <!--begin::Card body-->
                            <div class="card-body p-9">
                                <!--begin::Row-->
                                <div class="row mb-8">
                                    <!--begin::Col-->
                                    <div class="col-xl-3">
                                        <div class="fs-3 fw-bold mt-2 mb-3">Opsi</div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <?php foreach ($listPertanyaanOpsi as $pertanyaanOpsi) : ?>
                                    <div class="row mb-8">
                                        <div class="col-xl-10 col-8 fv-row">
                                            <input type="text" class="form-control form-control-solid" value="<?= $pertanyaanOpsi['opsi_nama']; ?>" disabled />
                                        </div>
                                        <?php if (session()->get('users_opd_kode') == $opd['opd_kode']) : ?>
                                            <a href="<?= site_url('/pertanyaanopsi/edit/' . $pertanyaanOpsi['pertanyaanopsi_id'] . '/' . $pertanyaanOpsi['pertanyaan_id'] . '/' . $survey_id); ?>" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="<?= site_url('/pertanyaanopsi/delete/' . $pertanyaanOpsi['pertanyaanopsi_id'] . '/' . $pertanyaanOpsi['pertanyaan_id'] . '/' . $survey_id); ?>" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm btn-hapus">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </form>
                    </form>
                    <div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>
                    <?php if (session()->get('users_opd_kode') == $opd['opd_kode']) : ?>
                        <form method="POST" action="<?= site_url('/pertanyaanopsi/create/' . $pertanyaan_id . '/' . $survey_id); ?>" enctype="multipart/form-data" class="form">
                            <!--begin::Card body-->
                            <div class="card-body p-9">
                                <!--begin::Row-->
                                <div class="row mb-8">
                                    <!--begin::Col-->
                                    <div class="col-xl-8">
                                        <div class="d-flex align-items-center fs-3 fw-bold mb-2 ">
                                            <span>Tambah Opsi</span>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row g-9 mb-8">
                                    <!--begin::Col-->
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="pertanyaanopsi_pertanyaan_id" value="<?= $pertanyaan_id; ?>">

                                    <div class="d-flex flex-column col-xl-10 col-8 fv-row">
                                        <select class="selectpicker col-12" data-live-search="true" <?= ($validation->hasError('pertanyaanopsi_opsi_id')) ? 'is-invalid' : ''; ?>" name="pertanyaanopsi_opsi_id">
                                            <option value="">Pilih Opsi Pertanyaan</option>
                                            <?php foreach ($listOpsi as $opsi) : ?>
                                                <option value="<?= $opsi['opsi_id']; ?>"><?= $opsi['opsi_nama']; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="target_title" data-validator="notEmpty">
                                                <?= $validation->getError('pertanyaanopsi_opsi_id'); ?></div>
                                        </div>
                                    </div>
                                    <div class="col ms-n5">
                                        <button type="submit" class="btn btn-flex btn-primary btn-sm">Tambah
                                        </button>
                                    </div>
                                    <!--begin::Separator-->
                                    <div class="text-center text-muted text-uppercase fw-bolder mb-5">atau</div>
                                    <!--end::Separator-->
                                    <div class="text-center">
                                        <a type="button" href="<?= site_url('/opsi/add/' . $pertanyaan_id . '/' . $survey_id); ?>" class="btn btn-sm btn-primary my-1">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Tambah Opsi Lain
                                        </a>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                        </form>
                    <?php endif; ?>
                    <!--end:Form-->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>