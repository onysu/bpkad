<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container">

    <form action="upload.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Siswa</label>
        <input type="text" class="form-control" name="nm_siswa" id="exampleFormControlInput1" placeholder="jenenge murid">
      </div>
      <div class="mb-3">
        <label for="formFileSm" class="form-label">Pilih foto</label>
        <input class="form-control form-control-sm" name="foto_siswa" id="formFileSm" type="file">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-warning">Upload</button>
      </div>
    </form>
  </div>
</body>

</html>