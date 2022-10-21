<?php
include '../../koneksi.php';

// $dokumen = htmlspecialchars($_FILES['dokumen']['name']);
// $tmp_dokumen = $_FILES['dokumen']['tmp_name'];
// $keterangan = htmlspecialchars($_POST['keterangan']);
// $jenis_file = htmlspecialchars($_POST['file']);
// move_uploaded_file($tmp_dokumen, '../../files/' . $dokumen);
// $query = "UPDATE infoopd SET keterangan='$keterangan', file='$jenis_file', dokumen='$dokumen'";
// mysqli_query($koneksi, $query);
// header('location:index.php');
$query = mysqli_query($koneksi, "SELECT * FROM infoopd");
while(mysqli_fetch_array($koneksi, $query));
?>

<form action="" method="post" enctype="multipart/form-data">
  <input type="hidden" class="form-control" name="id_info" value="<?= $infoopd['id_info']; ?>"> 
  <div class=" modal-body">
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
    <input class="form-control form-control-sm" name="tgl_upload" type="date" value="value=" <?= $infoopd['tgl_upload']; ?>">
  </div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-warning btn-sm">Simpan</button>
    <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
  </div>
</form>