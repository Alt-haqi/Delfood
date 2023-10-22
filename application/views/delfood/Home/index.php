<!-- slider section -->
<section class="slider_section ">
  <div class="container ">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="detail-box">
          <h1>
            Culinary Moments Capture with Flawless Perfection
          </h1>
        </div>
      </div>
    </div>
  </div>

    <div class="slider_container">
        <?php
        foreach ($gambar as $g) {
          // $id_menu = $m['id_menu'];
          ?>

      <div class="item">
        <div class="img-box">
          <img src="<?php echo base_url('assets/dataresto/galleri/' . $g['gambar']) ?>" style="object-fit: cover;"
            class="img-fluid">
        </div>
      </div>
        <?php
        }
        ?>
    </div>
  </section>
<!-- end slider section -->
  </div>

<!-- recipe section -->

<section class="recipe_section layout_padding-top">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Our Best Popular Recipes
      </h2>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4 mx-auto">
        <div class="box">
          <div class="img-box">
            <img src="<?= base_url() ?>assets/images/r1.jpg" class="box-img" alt="">
          </div>
          <div class="detail-box">
            <h4>
              Breakfast
            </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 mx-auto">
        <div class="box">
          <div class="img-box">
            <img src="<?= base_url() ?>assets/images/r2.jpg" class="box-img" alt="">
          </div>
          <div class="detail-box">
            <h4>
              Lunch
            </h4>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 mx-auto">
        <div class="box">
          <div class="img-box">
            <img src="<?= base_url() ?>assets/images/r3.jpg" class="box-img" alt="">
          </div>
          <div class="detail-box">
            <h4>
              Beverage
            </h4>
          </div>
        </div>
      </div>
    </div>
    <div class="btn-box">
      <a href="<?= base_url() ?>resep">
        Lihat
      </a>
    </div>
  </div>
</section>

<!-- end recipe section -->

<!-- app section -->

<section class="app_section">
  <div class="container">
    <div class="col-md-9 mx-auto">
      <div class="row">
        <div class="col-md-7 col-lg-8">
          <div class="detail-box">
            <h2>
              <span> Get the</span> <br>
              <?= $nama_usaha ?> App
            </h2>
            <p>
              long established fact that a reader will be distracted by the readable content of a page when looking at
              its layout. The poin
            </p>
            <div class="app_btn_box">
              <a href="" class="mr-1">
                <img src="<?= base_url() ?>assets/images/google_play.png" class="box-img" alt="">
              </a>
              <a href="">
                <img src="<?= base_url() ?>assets/images/app_store.png" class="box-img" alt="">
              </a>
            </div>
            <a href="" class="download_btn">
              Download Now
            </a>
          </div>
        </div>
        <div class="col-md-5 col-lg-4">
          <div class="img-box">
            <img src="<?= base_url() ?>assets/images/mobile.png" class="box-img" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- end app section -->

<!-- about section -->

<!-- <section class="about_section layout_padding">
  <div class="container">
    <div class="col-md-11 col-lg-10 mx-auto">
      <div class="heading_container heading_center">
        <h2>
          About Us
        </h2>
      </div>
      <div class="box">
        <div class="col-md-7 mx-auto">
          <div class="img-box">
            <img src="<?= base_url() ?>assets/images/about-img.jpg" class="box-img" alt="">
          </div>
        </div>
        <div class="detail-box">
          <p>
            <?= $deskripsi ?>
          </p><br>
        </div>
      </div>
    </div>
  </div>
</section>
 -->
<!-- end about section -->