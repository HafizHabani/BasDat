<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->

<?php

  include 'koneksi.php';

  $id = $_GET['id'];

  $sql = mysqli_query($koneksi,"SELECT * FROM penerima WHERE id = '" . $id . "'");
  $datapengirim = mysqli_fetch_array($sql);
?>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  dapengiriman-path="pengiriman/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Pengiriman Barang</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="pengiriman/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="pengiriman/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="pengiriman/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="pengiriman/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="pengiriman/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="pengiriman/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="pengiriman/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="pengiriman/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
        <form action="insertPembayaran.php" method="post">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Form /</span> Konfirmasi Pengiriman Barang</h4>
  
            <div class="row">

            <div class="col-md-12">
                <div class="card mb-4">
                  <h5 class="card-header">Ceklist</h5>
                  <div class="card-body">
                    <div>
                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Status</label>
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          aria-describedby="defaultFormControlHelp"
                          name="status"
                          required
                        />
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-12">
                <div class="card mb-4">
                  <h5 class="card-header">Pembayaran</h5>
                  <div class="card-body">
                    <div>
                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Kwitansi</label>
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          aria-describedby="defaultFormControlHelp"
                          name="kwitansipembayaran"
                          value="<?php echo $id ?>"
                          readonly
                        />
                      </div>
                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Total Harga</label>
                        <input
                          type="number"
                          class="form-control"
                          id="defaultFormControlInput"
                          placeholder="Rp."
                          aria-describedby="defaultFormControlHelp"
                          name="totalpembayaran"
                          required
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card mb-4">
                  <h5 class="card-header">Pengemasan</h5>
                  <div class="card-body">
                    <div>
                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Jumlah</label>
                        <input
                          type="number"
                          class="form-control"
                          id="defaultFormControlInput"
                          aria-describedby="defaultFormControlHelp"
                          name="jumlahpengemasan"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Berat</label>
                        <input
                          type="number"
                          class="form-control"
                          id="defaultFormControlInput"
                          aria-describedby="defaultFormControlHelp"
                          name="beratpengemasan"
                          required
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card mb-4">
                  <h5 class="card-header">Pengiriman</h5>
                  <div class="card-body">
                    <div>
                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Alamat Tujuan</label>
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          aria-describedby="defaultFormControlHelp"
                          name="alamatdelivery"
                          value="<?php echo $datapengirim['alamat']; ?>"
                          readonly
                        />
                      </div>
                      <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Tanggal</label>
                        <input
                          type="date"
                          class="form-control"
                          id="defaultFormControlInput"
                          placeholder="Rp."
                          aria-describedby="defaultFormControlHelp"
                          name="tanggaldelivery"
                          required
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              
  
              <div class="col-md-12">
                <div class="card mb-4">
                  <button class="btn btn-primary btn-lg" type="submit">Simpan</button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- / Content -->
      </div>
      <!-- Content wrapper -->
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:pengiriman/vendor/js/core.js -->
    <script src="pengiriman/vendor/libs/jquery/jquery.js"></script>
    <script src="pengiriman/vendor/libs/popper/popper.js"></script>
    <script src="pengiriman/vendor/js/bootstrap.js"></script>
    <script src="pengiriman/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="pengiriman/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="pengiriman/js/main.js"></script>

    <!-- Page JS -->

    <script src="pengiriman/js/form-basic-inputs.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>