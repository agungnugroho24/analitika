<body>
<section id="container" >
<!--main content start-->
<section id="main-content">
<section class="wrapper site-min-height">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Daftar buletin
                    <hr>
                </header>
                <div class="panel-body">
                    <div class="adv-table">
                        <div class="clearfix">
                            <div class="btn-group">
                                <a href="<?=base_url('admin/createview')?>"><button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah baru</button></a>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown">Export <i class="fa fa-download"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Save as PDF</a></li>
                                    <li><a href="#">Export to Excel</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="space15"></div>
                        <table id="table" class="display table table-bordered table-striped" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th class="text-center">Cover</th>
                                    <!-- <th>Cover 2</th>
                                    <th>Cover 3</th> -->
                                    <th class="text-center">File</th>
                                    <th class="text-center col-md-2">Judul buletin</th>
                                    <!-- <th>Judul paper</th> -->
                                    <!-- <th>Sumber</th> -->
                                    <th class="text-center">Penulis paper</th>
                                    <th class="text-center">Edisi terbit paper</th>
                                    <th class="text-center col-md-4">Teks Ringkasan</th>
                                    <th class="text-center">Periode</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <?php 
                                $no = 1;
                                foreach($file as $u){
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td class="text-center">
                                    <?php
                                    if($u->nama_file==''){?>
                                        <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" height="170" width="140">
                                    <?php }else{ ?>
                                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file; ?>" height="200" width="140">
                                    <?php }?>
                                    </td>
                                    
                                    <!-- <td class="text-center">
                                    <?php
                                    if($u->nama_file2==''){?>
                                        <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" height="170" width="140">
                                    <?php }else{ ?>
                                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file2; ?>" height="200" width="140">
                                    <?php }?>
                                    </td>

                                    <td class="text-center">
                                    <?php
                                    if($u->nama_file2==''){?>
                                        <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" height="170" width="140">
                                    <?php }else{ ?>
                                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file3; ?>" height="200" width="140">
                                    <?php }?> -->

                                    </td>
                                    <td class="text-center">
                                    <?php
                                    if($u->nama_file4==''){?>
                                        <p class="badge badge-danger" style="background-color:red">No File</p>
                                    <?php }else{ ?>
                                    <a href="<?php echo base_url(); ?>upload/file/<?php echo $u->nama_file4; ?>"><img src="<?php echo base_url('assets/images/pdf.png'); ?>" height="40" width="40"></a>
                                    <!-- <p><?php echo $u->nama_file4; ?></p> -->
                                    <?php }?>
                                    </td>

                                    <td><?php echo $u->judul_buletin; ?></td>
                                    <!-- <td><?php echo $u->judul_paper; ?></td> -->
                                    <!-- <td><?php echo $u->sumber; ?></td> -->
                                    <td><?php echo $u->penulis_paper; ?></td>
                                    <td><?php echo $u->edisi_terbit_paper; ?></td>
                                    <td><?php echo $u->teks_ringkasan; ?></td>
                                    <td><?php echo $u->periode; ?></td>
                                    <td class="text-center">
                                        <?php echo anchor('admin/edit/'.$u->id,'<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>'); ?>
                                        <!-- <?php echo anchor('admin/delete/'.$u->id,'<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>'); ?> -->
                                        <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $u->id;?>"><i class="fa fa-trash-o "></i></button>
                                    </td>
                                </tr>
                            <?php } ?>                           
                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th class="text-center">Cover</th>
                                    <th>Cover 2</th>
                                    <th>Cover 3</th>
                                    <th class="text-center">File</th>
                                    <th class="text-center col-md-2">Judul buletin</th>
                                    <th>Judul paper</th>
                                    <th>Sumber</th>
                                    <th class="text-center">Penulis paper</th>
                                    <th class="text-center">Edisi terbit paper</th>
                                    <th class="col-md-4 text-center">Teks Ringkasan</th>
                                    <th class="text-center">Periode</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- page end-->
</section>
</section>
<!--main content end-->
</section>
</body>
<?php
    foreach($file as $u):
    ?>
    <!-- ============ MODAL HAPUS BULETIN =============== -->
    <div class="modal fade" id="modal_hapus<?php echo $u->id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3 class="modal-title" id="myModalLabel">Hapus Buletin</h3>
        </div>
        <form class="form-horizontal" method="post" action="<?php echo base_url(). 'Admin/delete'; ?>">
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="modal-body">
                <p>Anda yakin ingin menghapus buletin <b><?php echo $u->judul_buletin;?></b></p>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" value="<?php echo $u->id;?>">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                <button class="btn btn-danger">Hapus</button>
            </div>
        </form>
        </div>
        </div>
    </div>
<?php endforeach;?>
<!--END MODAL HAPUS BULETIN-->