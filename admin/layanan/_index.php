<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    html,
    body {
      overflow-x: hidden;
      /* Prevent scroll on narrow devices */
    }

    body {
      padding-top: 56px;
    }

    @media (max-width: 991.98px) {
      .offcanvas-collapse {
        position: fixed;
        top: 56px;
        /* Height of navbar */
        bottom: 0;
        left: 100%;
        width: 100%;
        padding-right: 1rem;
        padding-left: 1rem;
        overflow-y: auto;
        visibility: hidden;
        background-color: #343a40;
        transition: transform .3s ease-in-out, visibility .3s ease-in-out;
      }

      .offcanvas-collapse.open {
        visibility: visible;
        transform: translateX(-100%);
      }
    }

    .nav-scroller .nav {
      color: rgba(255, 255, 255, .75);
    }

    .nav-scroller .nav-link {
      padding-top: .75rem;
      padding-bottom: .75rem;
      font-size: .875rem;
      color: #6c757d;
    }

    .nav-scroller .nav-link:hover {
      color: #007bff;
    }

    .nav-scroller .active {
      font-weight: 500;
      color: #343a40;
    }

    .bg-purple {
      background-color: #6f42c1;
    }
  </style>
</head>

<body>
  <div class="container">
    <h6 class="border-bottom lead pb-2 mb-0">Aplikasi BPKAD</h6>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Tambah Aplikasi
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Aplikasi</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Aplikasi</label>
                <input type="text" class="form-control" name="nm_siswa" id="exampleFormControlInput1" placeholder="nama aplikasi">
              </div>
              <div class="mb-3">
                <label for="formFileSm" class="form-label">Pilih foto</label>
                <input class="form-control form-control-sm" name="foto_siswa" id="formFileSm" type="file">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-outline-secondary btn-sm">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <?php
    include 'koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * FROM layanan ORDER BY id DESC");
    while ($row = mysqli_fetch_array($data)) {
    ?>
      <div class="col-md-6 my-3 p-3 bg-body rounded shadow-sm">
        <div class="d-flex text-muted">
          <img src="file/<?= $row['foto_siswa']; ?>" class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="13%" height="13%" alt="...">
          <div class="mb-0 small lh-sm w-100">
            <strong class="text-gray-dark"><?= $row['nama']; ?></strong>
            <span class="d-block"><a href="#">Link App</a></span>
            <div class="d-flex mt-3">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-secondary btn-sm">Edit</button>
                <button type="button" class="btn btn-outline-secondary btn-sm"><a href="hapus.php?id_siswa=<?= $row['id_siswa']; ?>">Hapus</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>