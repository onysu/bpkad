<!DOCTYPE html>
<html lang="id">

<?php include '../inc/header.php'; ?>

<body class="hold-transition layout-top-nav layout-navbar-fixed">
  <div class="wrapper">

    <?php include '../inc/nav.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Layanan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right small">
                <li class="breadcrumb-item"><a href="index.html">beranda</a></li>
                <li class="breadcrumb-item"><a href="profil.html">profil</a></li>
                <li class="breadcrumb-item"><a href="struktur.html">struktur</a></li>
                <li class="breadcrumb-item"><a href="info-opd.html">info</a></li>
                <li class="breadcrumb-item active">layanan</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container -->
      </section>

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Aplikasi BPKAD</h3>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Tambah Aplikasi
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="ModalLayanan" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalLayanan">Tambah Aplikasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                          <div class="mb-3">
                            <label for="nama" class="form-label">Nama Aplikasi</label>
                            <input type="text" class="form-control" name="nama" placeholder="nama aplikasi">
                          </div>
                          <div class="mb-3">
                            <label for="subnama" class="form-label">Sub Nama Aplikasi</label>
                            <input type="text" class="form-control" name="subnama" placeholder="subnama aplikasi">
                          </div>
                          <div class="mb-3">
                            <label for="link" class="form-label">Link Aplikasi</label>
                            <input type="text" class="form-control" name="link" placeholder="link aplikasi">
                          </div>
                          <div class="mb-3">
                            <label for="gambar" class="form-label">Pilih Gambar</label>
                            <input class="form-control form-control-sm" name="gambar" type="file">
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

                <div class="card-body p-0">
                  <?php
                  include '../../koneksi.php';
                  $data = mysqli_query($koneksi, "SELECT * FROM layanan ORDER BY id DESC");
                  while ($row = mysqli_fetch_array($data)) {
                  ?>
                    <div class="col-md-6 my-3 p-3 bg-body rounded shadow-sm">
                      <div class="d-flex text-muted">
                        <img src="file/<?= $row['gambar']; ?>" class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="13%" height="13%" alt="...">
                        <div class="mb-0 small lh-sm w-100">
                          <strong class="text-gray-dark"><?= $row['nama']; ?></strong>
                          <span class="d-block"><a href="#">Link App</a></span>
                          <div class="d-flex mt-3">
                            <div class="btn-group" role="group" aria-label="Basic example">
                              <button type="button" class="btn btn-outline-secondary btn-sm">Edit</button>
                              <button type="button" class="btn btn-outline-secondary btn-sm"><a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.container -->
      </div>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

    <?php include '../inc/footer.php'; ?>

</body>

</html>