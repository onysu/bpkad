$(document).ready(function () {
  // datatable-infoOPD-opd
  $('#opd').DataTable({
    ordering: false,
    "pageLength": 25,
    language: {
      url: 'assets/id.json'
    },
    "columnDefs": [
      { "className": "dt-center", "targets": [0, 2] }
    ],
    dom: 'rt<"bottom"flp><"clear">',
  });
  // datatable-dokumen-download
  $('#download').DataTable({
    ordering: false,
    "pageLength": 25,
    language: {
      url: 'assets/id.json'
    },
    "columnDefs": [
      { "className": "dt-center", "targets": [0, 2, 4] }
    ],
    dom: 'rt<"bottom"flp><"clear">',
  });
  // datatable-dokumen-upload
  $('#upload').DataTable({
    ordering: false,
    "pageLength": 25,
    language: {
      url: 'assets/id.json'
    },
    "columnDefs": [
      { "className": "dt-center", "targets": [0, 2, 4] }
    ],
    dom: 'rt<"bottom"flp><"clear">',
  });
});

// JAM
$(window).on('load', function () {
  setInterval(clock, 1000);
});
function clock() {
  var d = new Date();
  var date = d.getDate();
  var month = d.getMonth();
  var montharr = ["Jan", "Feb", "Mar", "April", "Mei", "Juni", "Juli", "Ags", "Sep", "Okt", "Nov", "Des"];
  month = montharr[month];
  var year = d.getFullYear();
  var day = d.getDay();
  var dayarr = ["Mig", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"];
  day = dayarr[day];
  var hour = d.getHours();
  var min = d.getMinutes();
  var sec = d.getSeconds();

  document.getElementById("clock").innerHTML = date + " " + month + " " + year + " | " + hour + ":" + min + ":" + sec;
  //document.getElementById("time").innerHTML=hour+":"+min+":"+sec;
}
function selectLang(x) {
  var lang = x.options[x.selectedIndex].value;
  var post_id = ""
  window.location.href = "https://indonesia.go.id/index/switch_lang/" + lang + "/" + post_id;
}
// bagian menu sticky
window.onscroll = function () { myFunction() };
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

// Fancybox Config
$('[data-fancybox="gallery"]').fancybox({
  buttons: [
    "slideShow",
    "thumbs",
    "zoom",
    "fullScreen",
    "share",
    "close"
  ],
  loop: false,
  protect: true
});

// Penomoran Halaman
(function ($) {
  var paginate = {
    startPos: function (pageNumber, perPage) {
      // menentukan posisi array apa yang akan dimulai
      // berdasarkan halaman saat ini dan # per halaman
      return pageNumber * perPage;
    },
    getPage: function (items, startPos, perPage) {
      // mendeklarasikan array kosong untuk menahan item halaman kita
      var page = [];
      // hanya mendapatkan item setelah posisi awal
      items = items.slice(startPos, items.length);
      // mengulang item yang tersisa hingga maks per halaman
      for (var i = 0; i < perPage; i++) {
        page.push(items[i]);
      }
      return page;
    },
    totalPages: function (items, perPage) {
      // menentukan jumlah total halaman
      return Math.ceil(items.length / perPage);
    },
    createBtns: function (totalPages, currentPage) {
      // buat tombol untuk memanipulasi halaman saat ini
      var pagination = $('<div class="pagination" />');
      // tambahkan tombol "pertama"
      pagination.append('<span class="pagination-button">&laquo;</span>');
      // menambahkan halaman di antaranya
      for (var i = 1; i <= totalPages; i++) {
        // daftar terpotong saat terlalu besar
        if (totalPages > 5 && currentPage !== i) {
          // jika pada dua halaman pertama
          if (currentPage === 1 || currentPage === 2) {
            // tampilkan 5 halaman pertama
            if (i > 5) continue;
            // jika pada dua halaman terakhir
          } else if (currentPage === totalPages || currentPage === totalPages - 1) {
            // tampilkan 5 halaman terakhir
            if (i < totalPages - 4) continue;
            // jika tidak, tampilkan 5 halaman berada di tengah
          } else {
            if (i < currentPage - 2 || i > currentPage + 2) {
              continue;
            }
          }
        }
        // tombol markup untuk halaman
        var pageBtn = $('<span class="pagination-button page-num" />');
        // menambahkan kelas aktif untuk halaman saat ini
        if (i == currentPage) {
          pageBtn.addClass('active');
        }
        // mengatur teks ke nomor halaman
        pageBtn.text(i);
        // tombol tambahkan ke kontainer
        pagination.append(pageBtn);
      }
      // tambahkan tombol "terakhir"
      pagination.append($('<span class="pagination-button">&raquo;</span>'));
      return pagination;
    },
    createPage: function (items, currentPage, perPage) {
      // menghapus pagination dari halaman
      $('.pagination').remove();
      // mengatur konteks untuk item
      var container = items.parent(),
        // lepaskan item dari halaman dan transmisikan sebagai array
        items = items.detach().toArray(),
        // posisi mulai dan pilih item untuk halaman
        startPos = this.startPos(currentPage - 1, perPage),
        page = this.getPage(items, startPos, perPage);
      // item loop dan tambahkan kembali ke halaman
      $.each(page, function () {
        // mencegah item kosong yang kembali sebagai Jendela
        if (this.window === undefined) {
          container.append($(this));
        }
      });
      // tombol pagination persiapan dan tambahkan ke halaman
      var totalPages = this.totalPages(items, perPage),
        pageButtons = this.createBtns(totalPages, currentPage);
      container.after(pageButtons);
    }
  };
  // masukkan semuanya ke dalam metode jQuery!
  $.fn.paginate = function (perPage) {
    var items = $(this);
    // default per halaman ke 5
    if (isNaN(perPage) || perPage === undefined) {
      perPage = 5;
    }
    // jangan bingung jika lebih sedikit item daripada per halaman
    if (items.length <= perPage) {
      return true;
    }
    // memastikan item tetap berada di posisi DOM yang sama
    if (items.length !== items.parent()[0].children.length) {
      items.wrapAll('<div class="pagination-items" />');
    }
    // paginate item mulai dari halaman 1
    paginate.createPage(items, 1, perPage);
    // tangani event klik pada tombol
    $(document).on('click', '.pagination-button', function (e) {
      // dapatkan halaman saat ini dari tombol aktif
      var currentPage = parseInt($('.pagination-button.active').text(), 10),
        newPage = currentPage,
        totalPages = paginate.totalPages(items, perPage),
        target = $(e.target);
      // dapatkan halaman bernomor
      newPage = parseInt(target.text(), 10);
      if (target.text() == '«') newPage = 1;
      if (target.text() == '»') newPage = totalPages;
      // memastikan newPage berada dalam rentang yang tersedia
      if (newPage > 0 && newPage <= totalPages) {
        paginate.createPage(items, newPage, perPage);
      }
    });
  };
})(jQuery);
/* Bagian ini hanya untuk demo, sebenarnya bukan bagian dari plugin */
$('.article-loop').paginate(2);