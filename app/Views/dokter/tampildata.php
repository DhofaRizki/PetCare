<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pet Care</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/paw-solid.svg" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>

<body style="background-image: url('/img/bg.jpg');">
  <br>
<div class="row">
  <div class="col-12">
    <div class="container">
    <div class="card">
      <div class="card-header">
        <a href="<?=base_url('/dokter/form')?>">Tambah data</a>
        <h3 align="center" class="card-title">Table Dokter</h3>

        <div align="right" class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
                <th>Nama Dokter</th>
                <th>No Telp.</th>
                <th>Jadwal</th>
                <th>Lokasi</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($data_dokter as $baris):?>
              <tr>
                  <td><?=$baris['nama']?></td>
                  <td><?=$baris['notlp']?></td>
                  <td><?=$baris['jadwal']?></td>
                  <td><?=$baris['lokasi']?></td>
                  <td>
                      <img src="<?=base_url('dokter/foto/'.$baris['id'].'.png')?>" style="width:100px" />
                  </td>
                  <td><a href="<?=base_url('dokter/edit/') . $baris['id'] ?>">edit</a></td>
                  <td>
                      <form onsubmit="return confirm('Are u sure want to delete this data?')" method="post" action="<?=base_url('dokter/delete')?>">
                          <input type="hidden" name="id" value="<?=$baris['id']?>">
                          <button>Delete</button>
                      </form>
                  </td>
              </tr>
          <?php endforeach;?>
        </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

<!-- Vendor JS Files -->
<script src="/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="/vendor/aos/aos.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/vendor/typed.js/typed.umd.js"></script>
<script src="/vendor/waypoints/noframework.waypoints.js"></script>
<script src="/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/js/main.js"></script>
</body>