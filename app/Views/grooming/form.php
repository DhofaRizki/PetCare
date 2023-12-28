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
  
 
  <form enctype="multipart/form-data" method="post" action="<?=base_url('/grooming/Save')?>">
    <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card">
                <div class="card text-white bg-secondary mb-3">
        <h2 align="center" class="text">Form Grooming</h2>
    </div>

    <div align="center" class="card text-white bg-success mb-3">
        <div class="card-header"></div>
        <div class="card-body">
                <input type="hidden" name="id" value="<?=$data['id']?? ''?>" >

        <div class="form-group row">
            <label for="jenishewan" class="col-sm-3 col-form-label">Jenis Hewan</label>
            <div class="col-sm-6">
                <input type="text" name="jenishewan" value="<?=$data['jenishewan']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="jenispaket" class="col-sm-3 col-form-label">Jenis Paket</label>
            <div class="col-sm-6">
                <input type="text" name="jenispaket" value="<?=$data['jenispaket']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="harga" class="col-sm-3 col-form-label">Harga</label>
            <div class="col-sm-6">
                <input type="text" name="harga" value="<?=$data['harga']?? ''?>"> 
            </div>
        </div>

        <div class="form-group row">
            <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
            <div class="col-sm-6">
                <input type="text" name="lokasi" value="<?=$data['lokasi']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Foto</label>
            <div class="col-sm-6">
                <input type="file" name="foto" >
            </div>
        </div>
        <br>

        <button>Save</button>

                
        </div>
        </div>
        </div>
        </div>
    </div>
</form>

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

