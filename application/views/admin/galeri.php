<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Galeri</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>admin"><i class="fas fa-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Galeri</h3>
                </div>
                <div class="col-lg-12">
                    <?= $this->session->flashdata('message'); ?>
                    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#myModal"><i
                            class="fa fa-plus"></i> Tambah
                        Gambar</button>
                    <div class="table-responsive">
                        <table class="table table-flush dataTable" id="datatable-id" role="grid"
                            aria-describedby="datatable-basic_info">
                            <thead class="thead-dark">
                                <tr role="row">
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Album</th>
                                    <th style="text-align:right;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data->result_array() as $i):
                                    $no++;
                                    $galeri_id = $i['galeri_id'];
                                    $galeri_judul = $i['galeri_judul'];
                                    $galeri_tanggal = $i['tanggal'];
                                    $galeri_gambar = $i['galeri_gambar'];
                                    $galeri_album_id = $i['galeri_album_id'];
                                    $galeri_album_nama = $i['album_nama'];

                                    ?>
                                    <tr>
                                        <td><img src="<?php echo base_url() . 'assets/dataresto/images/' . $galeri_gambar; ?>"
                                                style="width:80px;">
                                        </td>
                                        <td><?php echo $galeri_judul; ?></td>
                                        <td><?php echo $galeri_tanggal; ?></td>
                                        <td><?php echo $galeri_album_nama; ?></td>
                                        <td style="text-align:right;">
                                            <a class="btn" data-toggle="modal"
                                                data-target="#ModalEdit<?php echo $galeri_id; ?>"><span
                                                class="fa fa-pen"></span></a>
                                            <a class="btn" data-toggle="modal"
                                                data-target="#ModalHapus<?php echo $galeri_id; ?>"><span
                                                class="fa fa-trash"></span></a>
                                        </td>
                                    </tr>
                                    <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!--Modal Add Pengguna-->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span
                class="fa fa-close"></span></span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Galeri</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url() . 'gallery/simpan_galeri' ?>" method="post"
                enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Judul</label>
                        <div class="col-sm-7">
                            <input type="text" name="xjudul" class="form-control" id="inputUserName" placeholder="Judul"
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                        <div class="col-sm-7">
                            <input type="file" name="filefoto" required />
                        </div>
                    </div>

                                  <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Album</label>
                <div class="col-sm-7">

                  <select class="form-control" name="xalbum" style="width: 100%;" required>
                    <option value="">-Pilih-</option>
                    <?php
                    foreach ($alb->result_array() as $a) {
                      $alb_id = $a['album_id'];
                      $alb_nama = $a['album_nama'];
                      if ($galeri_album_id == $alb_id)
                        echo "<option value='$alb_id' selected>$alb_nama</option>";
                      else
                        echo "<option value='$alb_id'>$alb_nama</option>";
                    } ?>
                  </select>
                </div>
              </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

  <!--Modal Edit Album-->
<?php foreach ($data->result_array() as $i):
    $galeri_id = $i['galeri_id'];
    $galeri_judul = $i['galeri_judul'];
    $galeri_tanggal = $i['tanggal'];
    $galeri_gambar = $i['galeri_gambar'];
    $galeri_album_id = $i['galeri_album_id'];
    $galeri_album_nama = $i['album_nama'];
    ?>

    <div class="modal fade" id="ModalEdit<?php echo $galeri_id; ?>" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Photo</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url() . 'gallery/update_galeri' ?>" method="post"
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="kode" value="<?php echo $galeri_id; ?>" />
                        <input type="hidden" value="<?php echo $galeri_gambar; ?>" name="gambar">
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Judul</label>
                            <div class="col-sm-7">
                                <input type="text" name="xjudul" class="form-control" value="<?php echo $galeri_judul; ?>"
                                    id="inputUserName" placeholder="Judul" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Album</label>
                            <div class="col-sm-7">

                                <select class="form-control" name="xalbum" style="width: 100%;" required>
                                    <option value="">-Pilih-</option>
                                    <?php
                                    foreach ($alb->result_array() as $a) {
                                        $alb_id = $a['album_id'];
                                        $alb_nama = $a['album_nama'];
                                        if ($galeri_album_id == $alb_id)
                                            echo "<option value='$alb_id' selected>$alb_nama</option>";
                                        else
                                            echo "<option value='$alb_id'>$alb_nama</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                            <div class="col-sm-7">
                                <input type="file" name="filefoto" />
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!--Modal Edit Album-->

<?php foreach ($data->result_array() as $i):
    $galeri_id = $i['galeri_id'];
    $galeri_judul = $i['galeri_judul'];
    $galeri_tanggal = $i['tanggal'];
    $galeri_gambar = $i['galeri_gambar'];
    $galeri_album_id = $i['galeri_album_id'];
    $galeri_album_nama = $i['album_nama'];
    ?>
    <!--Modal Hapus Pengguna-->
    <div class="modal fade" id="ModalHapus<?php echo $galeri_id; ?>" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Photo</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url() . 'gallery/hapus_galeri' ?>" method="post"
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="kode" value="<?php echo $galeri_id; ?>" />
                        <input type="hidden" value="<?php echo $galeri_gambar; ?>" name="gambar">
                        <input type="hidden" value="<?php echo $galeri_album_id; ?>" name="album">
                        <p>Apakah Anda yakin mau menghapus <b><?php echo $galeri_judul; ?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>