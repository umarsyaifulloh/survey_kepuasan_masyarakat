//alert
const swal = $(".swal").data("swal");
if (swal) {
  Swal.fire({
    title: "Data Berhasil " + swal,
    icon: "success",
    showConfirmButton: false,
    timer: 1500,
  });
}

//konfirmasi hapus
$(document).on("click", ".btn-hapus", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");

  Swal.fire({
    title: "Apakah Anda yakin?",
    text: "Data yang dihapus tidak dapat kembali",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#808080",
    confirmButtonText: "Ya, hapus!",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});

//Konfirmasi hapus 2
$(document).on("click", ".btn-delete", function (e) {
  e.preventDefault();
  const href = $(this).attr("action");

  Swal.fire({
    title: "Apakah Anda yakin?",
    text: "Data yang dihapus tidak dapat kembali",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#808080",
    confirmButtonText: "Ya, hapus!",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});

//Konfirmasi Respon Jawaban -> Belom bisa dipakai
$(document).on("click", ".cekjawaban", function (e) {
  e.preventDefault();
  const href = $(this).attr("action");

  Swal.fire({
    title: "Apakah Anda Sudah Mengisi Semua Pertanyaan?",
    text: "Apabila ternyata masih ada pertanyaan belum terjawab, maka semua jawaban akan tereset",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "info",
    cancelButtonColor: "#808080",
    confirmButtonText: "Ya, Kirim!",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});

//Alert Sukses Respon Terkirim
const respon = $(".respon").data("respon");
if (respon) {
  Swal.fire("Respon Terkirim", respon, "success");
}

//Alert Filter Super Admin
const filter = $(".filter").data("filter");
if (filter) {
  Swal.fire("Anda Bukan Super Admin", filter, "error");
}

/* Belum terpakai */
//alert jawaban responden telah terkirim
$(document).on("click", ".btn-tambah-jawaban", function (e) {
  e.preventDefault();
  const href = $(this).attr("action");

  Swal.fire({
    title: "TERIMA KASIH",
    text: "Jawaban Anda Telah Terkirim",
    icon: "success",
    confirmButtonColor: "#d33",
    confirmButtonText: "OKE",
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});

//tambah
$(document).on("click", ".btn-tambah", function (e) {
  e.preventDefault();
  // const href = $(this).attr('href');
  const swal = $(".swal").data("swal");
  Swal.fire({
    position: "top-center",
    icon: "success",
    title: swal,
    showConfirmButton: false,
    timer: 1500,
  });
});

//edit
$(document).on("click", ".btn-edit", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");
  Swal.fire({
    position: "top-center",
    icon: "success",
    title: "Data berhasil diedit!",
    showConfirmButton: false,
    timer: 1500,
  });
});

//Data Tables
$(document).ready(function () {
  $("#table1").DataTable();
});
//Data Tables
$(document).ready(function () {
  $("#table2").DataTable();
});

//Coba pakai validasi js->belum bisa
("use strict");
var KTSigninGeneral = (function () {
  var t, e, i;
  return {
    init: function () {
      (t = document.querySelector("#kt_sign_in_form_survey")),
        (e = document.querySelector("#kt_sign_in_submit_survey")),
        (i = FormValidation.formValidation(t, {
          fields: {
            pertanyaan: {
              validators: { notEmpty: { message: "The answer is required" } },
            },
          },
          plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
              rowSelector: ".fv-row",
            }),
          },
        })),
        e.addEventListener("click", function (n) {
          n.preventDefault(),
            i.validate().then(function (i) {
              "Valid" == i
                ? (e.setAttribute("data-kt-indicator", "on"),
                  (e.disabled = !0),
                  setTimeout(function () {
                    e.removeAttribute("data-kt-indicator"),
                      (e.disabled = !1),
                      Swal.fire({
                        text: "Your Answer has been Sent!",
                        icon: "success",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: { confirmButton: "btn btn-primary" },
                      }).then(function (e) {
                        e.isConfirmed &&
                          (t.querySelector('[name="pertanyaan"]').value = "");
                      });
                  }, 2e3))
                : Swal.fire({
                    text: "Sorry, looks like there are some errors detected, please try again.",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: { confirmButton: "btn btn-primary" },
                  });
            });
        });
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTSigninGeneral.init();
});
