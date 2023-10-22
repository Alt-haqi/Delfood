<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Kategori</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>admin"><i class="fas fa-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Kategori</li>
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
                    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#myModal"><i
                            class="fa fa-plus"></i> Tambah
                        Kategori</button>
                    <div class="table-responsive">
                        <table class="table table-flush dataTable" id="datatable-id" role="grid"
                            aria-describedby="datatable-basic_info">
                            <thead class="thead-dark">
                                <tr role="row">
                                    <th style="width:100px;">#</th>
                                    <th>Kategori</th>
                                    <th style="text-align:right;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                foreach ($data->result_array() as $i):
                                    $no++;
                                    $kategori_id = $i['kategori_id'];
                                    $kategori_nama = $i['kategori_nama'];

                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $kategori_nama; ?></td>

                                        <td style="text-align:right;">
                                            <a class="btn" data-toggle="modal"
                                                data-target="#ModalEdit<?php echo $kategori_id; ?>"><span
                                                    class="fa fa-pen"></span></a>
                                            <a class="btn" data-toggle="modal"
                                                data-target="#ModalHapus<?php echo $kategori_id; ?>"><span
                                                    class="fa fa-trash"></span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </section>
        <!-- /.content -->

        <!--Modal Add Pengguna-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Kategori</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'Kategori/simpan_kategori' ?>"
                        method="post" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Kategori</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xkategori" class="form-control" id="inputUserName"
                                        placeholder="Kategori" required>
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

        <?php foreach ($data->result_array() as $i):
            $kategori_id = $i['kategori_id'];
            $kategori_nama = $i['kategori_nama'];
            ?>
            <!--Modal Edit Pengguna-->
            <div class="modal fade" id="ModalEdit<?php echo $kategori_id; ?>" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true"><span class="fa fa-close"></span></span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Kategori</h4>
                        </div>
                        <form class="form-horizontal" action="<?php echo base_url() . 'Kategori/update_kategori' ?>"
                            method="post" enctype="multipart/form-data">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="inputUserName" class="col-sm-4 control-label">Kategori</label>
                                    <div class="col-sm-7">
                                        <input type="hidden" name="kode" value="<?php echo $kategori_id; ?>" />
                                        <input type="text" name="xkategori" class="form-control" id="inputUserName"
                                            value="<?php echo $kategori_nama; ?>" placeholder="Kategori" required>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <?php foreach ($data->result_array() as $i):
            $kategori_id = $i['kategori_id'];
            $kategori_nama = $i['kategori_nama'];
            ?>
            <!--Modal Hapus Pengguna-->
            <div class="modal fade" id="ModalHapus<?php echo $kategori_id; ?>" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true"><span class="fa fa-close"></span></span></button>
                            <h4 class="modal-title" id="myModalLabel">Hapus Kategori</h4>
                        </div>
                        <form class="form-horizontal" action="<?php echo base_url() . 'Kategori/hapus_kategori' ?>"
                            method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $kategori_id; ?>" />
                                <p>Apakah Anda yakin mau menghapus <b><?php echo $kategori_nama; ?></b> ?</p>

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