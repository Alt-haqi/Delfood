<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <div class="heading_container heading_center">
                <h2>
                    Informasi <?= $nama_usaha ?>
                </h2>
                <p>
                    <br>
                </p>
            </div>
            <div class="detail-box">
                <h2>
                    <span> Selamat Datang di Studio kami</span>
                </h2>
            </div>
            <div class="row content">
                <div class="col-lg-6">
                    <?php
                    if ($maps_link !== "") {
                        ?>
                        <iframe src="<?= $maps_link ?>" width="100%" height="450" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                        <?php
                    } else {
                        ?>
                        <h3><?= $nama_usaha ?> belum menambahkan google maps</h3>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Informasi Mengenai <?= $nama_usaha ?>
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i>Alamat : <?= $alamat ?></li>
                        <li><i class="ri-check-double-line"></i>No Telepon : <?= $nomor_telepon ?></li>
                        <li><i class="ri-check-double-line"></i>Instagram : <a
                                href="https://instagram.com/<?= $instagram ?>">@<?= $instagram ?></a></li>
                        <li><i class="ri-check-double-line"></i>Facebook : <a
                                href="https://facebook.com/<?= $instagram ?>"><?= $facebook ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
</section><!-- End My & Family Section -->
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