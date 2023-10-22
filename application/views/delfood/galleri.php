<head>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/lightbox.css' ?>">
</head>

<!-- new section -->
<section class="about_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Galeri
            </h2>
        </div>

        <!-- ======= Event List Section ======= -->
        <div class="container">
            <div class="row">
                <p>
                    <br/>
                </p>
                <?php foreach ($data->result() as $row): ?>
                    <div class="col-md-4">
                        <a class="example-image-link"
                            href="<?php echo base_url() . 'assets/dataresto/images/' . $row->galeri_gambar; ?>"
                            data-lightbox="example-2" data-title="<?php echo $row->galeri_judul; ?>"><img
                                class="example-image img-responsive"
                                src="<?php echo base_url() . 'assets/dataresto/images/' . $row->galeri_gambar; ?>"
                                alt="" /></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <br />
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <br />
                </div>
            </div>
        </div>

    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url() . 'assets/js/dist/lightbox-plus-jquery.js' ?>"></script>

    </body>
</section>

</html>