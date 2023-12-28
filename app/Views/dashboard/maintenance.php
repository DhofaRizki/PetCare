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
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
      <div class="card text-white bg-secondary mb-3">
        <div align="center">
            <h4>Selamat datang Admin <?=$admin['namalengkap'] ?? ''?>  
            </h4>
    
    
        <h3>Menu Aplikasi</h3>
        <br>
        <a class="btn btn-primary" href="<?=base_url('admin')?>">Data Admin</a>
        <a class="btn btn-primary" href="<?=base_url('pengguna')?>">Data Pengguna</a>
        <a class="btn btn-primary" href="<?=base_url('barang')?>">Data Barang</a>
        <a class="btn btn-primary" href="<?=base_url('dokter')?>">Data Dokter</a>
        <br>
        <br>
        <a class="btn btn-primary" href="<?=base_url('grooming')?>">Data Grooming</a>
        <a class="btn btn-primary" href="<?=base_url('pbarang')?>">Data Pemesanan Barang</a>
        <a class="btn btn-primary" href="<?=base_url('pgrooming')?>">Data Pemesanan Grooming</a>
        <br>
        <br>
        <a class="btn btn-primary" href="<?=base_url('pdokter')?>">Data Pemesanan Dokter</a>
        <br>
        <br>
        <button><a href="<?=base_url('logout')?>">Log Out</a></button>

        
    
        </div>
      </div>
      </div>
    </div>
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