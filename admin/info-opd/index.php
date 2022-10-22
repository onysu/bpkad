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
                <li class="breadcrumb-item"><a href="../">beranda</a></li>
                <li class="breadcrumb-item"><a href="profil.php">profil</a></li>
                <li class="breadcrumb-item"><a href="struktur.php">struktur</a></li>
                <li class="breadcrumb-item"><a href="/admin/info-opd/index.php">info</a></li>
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

                <!-- MODAL TAMBAH DATA -->
                <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahDokumen">Tambah Dokumen</button>

                <!-- Modal -->
                <div class="modal fade" id="tambahDokumen" tabindex="-1" aria-labelledby="ModalTambahDokumen" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalTambahDokumen">Tambah Dokumen</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="upload.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id_info">
                        <div class="modal-body">
                          <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" placeholder="keterangan dokumen">
                          </div>
                          <div class="mb-3">
                            <label for="file" class="form-label">Jenis File</label>
                            <select name="file" id="file" class="form-control" required>
                              <option value="">-- jenis file --</option>
                              <option value=".pdf">.pdf</option>
                              <option value=".zip">.zip</option>
                              <option value=".rar">.rar</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="dokumen" class="form-label">Dokumen</label>
                            <input type="file" class="form-control" name="dokumen" placeholder="file dokumen">
                          </div>
                          <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Upload</label>
                            <input class="form-control form-control-sm" name="tgl_upload" type="date">
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

                <!-- MODAL UBAH DATA -->
                <!-- <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#editDokumen">Edit Dokumen</button> -->

                <!-- Modal -->
                <!-- <div class="modal fade" id="editDokumen" tabindex="-1" aria-labelledby="ModalEditDokumen" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalEditDokumen">Edit Dokumen</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="edit.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id_info" value="<?= $infoopd['id_info']; ?>>
                        <div class="modal-body">
                          <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="<?= $infoopd['keterangan']; ?>" placeholder="keterangan dokumen" required>
                          </div>
                          <div class="mb-3">
                            <label for="file" class="form-label">Jenis File</label>
                            <select name="file" id="file" class="form-control" required>
                              <option value="">-- jenis file --</option>
                              <option value=".pdf">.pdf</option>
                              <option value=".zip">.zip</option>
                              <option value=".rar">.rar</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="dokumen" class="form-label">Dokumen</label>
                            <input type="file" class="form-control" name="dokumen" value="<?= $infoopd['dokumen']; ?>" placeholder="file dokumen" required>
                          </div>
                          <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Upload</label>
                            <input class="form-control form-control-sm" name="tgl_upload" type="date" value="value="<?= $infoopd['tgl_upload']; ?>">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-warning btn-sm">Simpan</button>
                          <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div> -->

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
                          <td><a href="../../files/<?= $infoopd['dokumen']; ?>" target="_blank"><?= $infoopd['dokumen']; ?></a></td>
                          <td><?= date('d/m/Y H:i:s', strtotime($infoopd['tgl_upload'])); ?></td>
                          <td>
                            <a href="edit.php?id_info=<?= $infoopd['id_info']; ?>" class="btn btn-success btn-sm">Edit</a>
                            <a href="hapus.php?id_info=<?= $infoopd['id_info']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah data ini akan di hapus?');">Hapus</a>
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