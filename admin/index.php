<!DOCTYPE html>
<html lang="id">

<?php include 'inc/header.php'; ?>

<body class="hold-transition layout-top-nav layout-navbar-fixed">
  <div class="wrapper">

    <?php include 'inc/nav.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Informasi Website</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right small">
                <li class="breadcrumb-item"><a href="index.html">beranda</a></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container -->
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="container">
          <div class="row">
            <div class="card">

              <!-- <div class="card-header">
                  <h3 class="card-title">Informasi Sistem</h3>
                </div> -->

              <div class="card-body">
                <div class="form-group">
                  <label>Nama Departemen :</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="nama departemen">
                  </div>
                </div>
                <div class="form-group">
                  <label>Moto :</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-quote-left"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="quote">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Email :</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Telepon :</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="number" class="form-control" placeholder="nomor telepon">
                      </div>
                    </div>
                  </div>

                  <!-- sosial media -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Sosial Media :</label>
                      <div class="input-group input-group-sm mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="twiiter">
                      </div>
                    </div>
                    <div class="form-group">
                      <!-- <label>Instagram :</label> -->
                      <div class="input-group input-group-sm mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fab fa-instagram-square"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="instagram">
                      </div>
                    </div>
                    <div class="form-group">
                      <!-- <label>Facebook :</label> -->
                      <div class="input-group input-group-sm mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="facebook">
                      </div>
                    </div>
                    <div class="form-group">
                      <!-- <label>Youtube :</label> -->
                      <div class="input-group input-group-sm mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="youtube">
                      </div>
                    </div>
                    <div class="form-group">
                      <!-- <label>Tik Tok :</label> -->
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fab fa-tiktok"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="tiktok">
                      </div>
                    </div>
                  </div>
                </div>

                <hr>

                <!-- media -->
                <div class="row">

                  <!-- Logo Brand -->
                  <div class="col-lg-6">
                    <div class="card nonborder">
                      <div class="card-body">
                        <div class="col-md-12 col-lg-6 col-xl-4 mb-3">
                          <img class="card-img-top" src="../files/img/logobpkad.png" alt="brand">
                        </div>
                        <div class="form-group">
                          <label for="brand">Logo Brand</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="brand">
                              <label class="custom-file-label" for="brand">Pilih File</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.Logo Brand -->

                  <!-- Gambar Banner -->
                  <div class="col-lg-6">
                    <div class="card nonborder">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card mb-2 nonborder">
                              <img class="card-img-top" src="../files/img/slide/pemkot-10.png" alt="Dist Photo 1">
                              <div class="card-img-overlay d-flex flex-column justify-content-end">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card mb-2 nonborder">
                              <img class="card-img-top" src="../files/img/slide/pemkot-02.png" alt="Dist Photo 2">
                              <div class="card-img-overlay d-flex flex-column justify-content-center">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card mb-2 nonborder">
                              <img class="card-img-top" src="../files/img/slide/pemkot-04.png" alt="Dist Photo 3">
                              <div class="card-img-overlay">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="banner">Gambar Banner</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="banner">
                              <label class="custom-file-label" for="banner">Pilih File</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.Gambar Banner -->

                  <!-- Video Cover -->
                  <div class="col-lg-6">
                    <div class="card nonborder">
                      <div class="card-body">
                        <video src="../files/videos/bg-kota-blitar.mp4" autoplay loop muted width="100%"></video>
                        <div class="form-group">
                          <label for="video">Video Cover</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="video">
                              <label class="custom-file-label" for="video">Pilih File</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.Video Cover -->

                  <!-- Link Video -->
                  <div class="col-lg-6">
                    <div class="card nonborder">
                      <div class="card-body">
                        <iframe width="100%" height="238" src="https://www.youtube.com/embed/5ft5gTUgDVM" title="VIDEO PROFIL KOTA BLITAR TAHUN 2021 | BUMI BUNG KARNO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="form-group">
                          <label for="link-video">Link Video</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="link-video">
                              <label class="custom-file-label" for="video">Pilih File</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.Link Video -->
                </div>
                <!-- /.media -->

              </div><!-- /.card-body -->

            </div><!-- /.card -->
          </div>
        </div><!-- /.container -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <?php include 'inc/footer.php'; ?>

</body>

</html>