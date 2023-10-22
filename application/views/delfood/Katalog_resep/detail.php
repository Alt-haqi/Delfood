<!-- ======= Detail Menu Section ======= -->
<section id="gallery" class="gallery">
    <div class="container">


        <div class="section-title">
            <?php
            foreach ($menu as $m) {
                ?>
                <div class="heading_container heading_center">
                    <h2>
                    <?= $m['nama_menu'] ?>
                    </h2>
                </div>
                <p><?= $m['detail_menu'] ?></p>
                <p>Kategori :<?= $m['kategori'] ?></p>
                <?php
            }
            ?>
        </div>

        <div class="row gallery-container">
            <?php
            foreach ($gambar_menu as $gm) {
                ?>
                <div class="col-lg-4 col-md-6 gallery-item filter-home">
                    <div class="gallery-wrap">
                        <img style="object-fit: cover;height:350px;width:100%"
                            src="<?php echo base_url('assets/dataresto/menu/' . $gm['gambar']) ?>" class="img-fluid" alt="">
                        <div class="gallery-info">
                            <h4><?= $m['nama_menu'] ?></h4>
                            <div class="gallery-links">
                                <a href="<?php echo base_url('assets/dataresto/menu/' . $gm['gambar']) ?>"
                                    class="glightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

    </div>
</section><!-- End Detail Menu Section -->
<section>
    <div class="container">
        <p>
            <br>
        </p>
        <p>
            <br>
        </p>
        <p>
            <br>
        </p>
    </div>
</section>