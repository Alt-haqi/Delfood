<!-- new section -->
<section class="about_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Resep
      </h2>
    </div>

    <!-- ======= Event List Section ======= -->
    <section id="event-list" class="event-list">
      <div class="container">
        <div class="row">
            <?php
            foreach ($menu as $m) {
              $id_menu = $m['id_menu'];
              ?>
              <div class="col-md-3 d-flex align-items-stretch">
                  <a href="<?php base_url() ?>resep/detail/<?= $m['id_menu'] ?>">
                    <div class="card">
                      <div class="card-img">
                        <?php
                        $getGambar = $this->db->query("SELECT * FROM gambar_menu WHERE id_menu = $id_menu LIMIT 1");
                        foreach ($getGambar->result_array() as $gambarm) {
                          $gambar = $gambarm['gambar'];
                        }
                        ?>
                        <img style="object-fit: cover;height:400px;width:100%"
                          src="<?php echo base_url('assets/dataresto/menu/' . $gambar) ?>" />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"><?= $m['nama_menu'] ?></h5>
                        <p class="card-text text-center"><?= $m['kategori'] ?></p>
                      </div>
                    </div>
                  </a>
                </div>
                <?php
            }
            ?>
        </div>
      </div>
      <?= $this->pagination->create_links(); ?>
    </section>
  </div>
</section><!-- End Event List Section -->

</html>