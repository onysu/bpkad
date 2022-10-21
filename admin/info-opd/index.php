<?php

include '../../koneksi.php';
function select($query)
{
  // global koneksi db
  global $koneksi;

  $result = mysqli_query($koneksi, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
$title = 'Daftar Barang';
$data_info = select("SELECT * FROM infoopd");
?>

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
              <h1>Informasi OPD</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right small">
                <li class="breadcrumb-item"><a href="index.html">beranda</a></li>
                <li class="breadcrumb-item"><a href="profil.html">profil</a></li>
                <li class="breadcrumb-item"><a href="struktur.html">struktur</a></li>
                <li class="breadcrumb-item"><a href="info-opd.html">info</a></li>
                <li class="breadcrumb-item active">infoOPD</li>
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
                  <h3 class="card-title">Info OPD BPKAD</h3>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Tambah Dokumen
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="ModalLayanan" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalLayanan">Tambah Dokumen</h1>
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
                          <button type="submit" class="btn btn-warning btn-sm">Simpan</button>
                          <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="card-body p-0">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">File</th>
                        <th scope="col">Dokumen</th>
                        <th scope="col">Tanggal Upload</th>
                        <th>Menu</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1; ?>
                      <?php foreach ($data_info as $infoopd) : ?>
                        <tr>
                          <th scope="row"><?= $no++ ?></th>
                          <td><?= $infoopd['keterangan']; ?></td>
                          <td><?= $infoopd['file']; ?></td>
                          <td><a href="<?= $infoopd['dokumen']; ?>" target="_blank">Perjanjian Kinerja 2021</a></td>
                          <td><?= $infoopd['tgl_upload']; ?></td>
                          <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
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