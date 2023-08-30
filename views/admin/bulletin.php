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
                    List of Bulletin
                    <hr>
                </header>
                <div class="panel-body">
                    <div class="adv-table">
                        <div class="clearfix">
                            <div class="btn-group">
                                <a href="<?=base_url('admin/createview')?>"><button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah baru</button></a>
                            </div>
                            <div class="btn-group pull-right">
                                <!-- <button class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown">Export <i class="fa fa-download"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Save as PDF</a></li>
                                    <li><a href="#">Export to Excel</a></li>
                                </ul> -->
                                <!-- <select id="exportLink" class="btn btn-sm btn-success">
                                    <option selected disabled style="background-color:#ffffff;">- Export data -</option>
                                    <option id="print" style="background-color:#ffffff;color:#000000;">Print</option>
                                    <option id="pdf" style="background-color:#ffffff;color:#000000;">Export as PDF</option>
                                    <option id="excel" style="background-color:#ffffff;color:#000000;">Export as XLS</option>
                                    <option id="copy" style="background-color:#ffffff;color:#000000;">Copy to clipboard</option>
                                    <option id="colvis" style="background-color:#ffffff;color:#000000;">Column Visibility</option>
                                </select> -->
                            </div>
                        </div>
                        <div class="space15"></div>
                        <table class="table table-bordered table-striped" id="mydata">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th class="text-center">Cover</th>
                                    <!-- <th>Cover 2</th>
                                    <th>Cover 3</th> -->
                                    <th class="text-center">File</th>
                                    <th class="text-center col-md-2">Judul buletin</th>
                                    <th class="text-center">Jumlah unduh</th>
                                    <!-- <th>Sumber</th> -->
                                    <th class="text-center col-md-2">Penulis paper</th>
                                    <!-- <th class="text-center col-md-2">Edisi terbit paper</th> -->
                                    <th class="text-center col-md-4">Teks Ringkasan</th>
                                    <!-- <th class="text-center">Periode</th> -->
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                    foreach($file->result_array() as $i):
                                        $id=$i['id'];
                                        $nama_file=$i['nama_file'];
                                        $nama_file4=$i['nama_file4'];
                                        $judul_buletin=$i['judul_buletin'];
                                        $penulis_paper=$i['penulis_paper'];
                                        // $edisi_terbit_paper=$i['edisi_terbit_paper'];
                                        $teks_ringkasan=$i['teks_ringkasan'];
                                        // $periode=$i['periode'];
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center">
                                    <?php
                                    if($nama_file==''){?>
                                        <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" height="170" width="140">
                                    <?php }else{ ?>
                                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $nama_file; ?>" height="200" width="140">
                                    <?php }?>
                                    </td>
                                    <td class="text-center">
                                    <?php
                                    if($nama_file4==''){?>
                                        <p class="badge badge-danger" style="background-color:red">No File</p>
                                    <?php }else{ ?>
                                    <a href="<?php echo base_url(); ?>upload/file/<?php echo $nama_file4; ?>"><img src="<?php echo base_url('assets/images/pdf.png'); ?>" height="40" width="40"></a>
                                    <?php }?>
                                    </td>
                                    <td><?php echo $judul_buletin;?></td>
									<td><?php echo $i['hitcounter']?>x</td>
                                    <td><?php echo $penulis_paper;?></td>
                                    <!-- <td><?php echo $edisi_terbit_paper;?></td> -->
                                    <td><?php echo $teks_ringkasan;?></td>
                                    <!-- <td><?php echo $periode;?></td> -->
                                    <td class="text-center">
                                        <?php echo anchor('admin/edit/'.$id,'<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>'); ?>
                                        <!-- <?php echo anchor('admin/delete/'.$id,'<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>'); ?> -->
                                        <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $id;?>"><i class="fa fa-trash-o "></i></button>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
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
    foreach($file->result_array() as $i):
        $id=$i['id'];
        $judul_buletin=$i['judul_buletin'];
    ?>
    <!-- ============ MODAL HAPUS BULETIN =============== -->
    <div class="modal fade" id="modal_hapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3 class="modal-title" id="myModalLabel">Hapus Buletin</h3>
        </div>
        <form class="form-horizontal" method="post" action="<?php echo base_url(). 'Admin/delete'; ?>">
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="modal-body">
                <p>Anda yakin ingin menghapus buletin <b><?php echo $judul_buletin;?></b></p>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="hidden" name="judulbuletin" value="<?php echo $judul_buletin;?>">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                <button class="btn btn-danger">Hapus</button>
            </div>
        </form>
        </div>
        </div>
    </div>
<?php endforeach;?>
<!--END MODAL HAPUS BULETIN-->