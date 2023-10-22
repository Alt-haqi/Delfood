<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title><?= $nama_usaha ?></title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- slidck slider -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css.map" integrity="undefined" crossorigin="anonymous" />


  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?= base_url() ?>assets/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="<?= base_url() ?>">
            <span>
              <?= $nama_usaha ?>
            </span>
          </a>
          <div class="" id="">
            <div class="User_option">
              <a href="<?= base_url() ?>auth">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Login</span>
              </a>
            </div>
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <img src="<?= base_url() ?>assets/images/menu.png" alt="">
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="<?= base_url() ?>">Home</a>
                <a href="<?= base_url() ?>about">About</a>
                <a href="<?= base_url() ?>resep">Artikel Resep</a>
                <a href="<?= base_url() ?>galeri">Galeri</a>
                <a href="<?= base_url() ?>contact">Contact Us</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
