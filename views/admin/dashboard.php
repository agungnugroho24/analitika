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
                    Homepage
                </header>
                <hr>
                <div class="panel-body">
                    <div class="adv-table">
                        <div class="clearfix">
                            <!-- <div class="btn-group">
                                <a href="<?=base_url('admin/createhomepage')?>"><button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah baru</button></a>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown">Export <i class="fa fa-download"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Save as PDF</a></li>
                                    <li><a href="#">Export to Excel</a></li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="space15"></div>
                        <table id="table2" class="display table table-bordered table-striped" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th class="text-center col-md-3">Alamat</th>
                                    <!-- <th>Cover 2</th>
                                    <th>Cover 3</th> -->
                                    <th class="text-center col-md-1">Telepon</th>
                                    <th class="text-center col-md-1">Fax</th>
                                    <th class="text-center col-md-1">Email</th>
                                    <!-- <th>Judul paper</th> -->
                                    <!-- <th>Sumber</th> -->
                                    <th class="text-center">Tentang</th>
                                    <!-- <th class="text-center">Edisi terbit paper</th>
                                    <th class="text-center col-md-4">Teks Ringkasan</th>
                                    <th class="text-center">Periode</th> -->
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <?php 
                                $no = 1;
                                foreach($homepage as $u){
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->alamat; ?></td>
                                    <td><?php echo $u->tlp; ?></td>
                                    <td><?php echo $u->fax; ?></td>
                                    <td><?php echo $u->email; ?></td>
                                    <td><?php echo $u->tentang; ?></td>
                                    <!-- <td class="text-center">
                                    <?php
                                    if($u->nama_file==''){?>
                                        <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" height="170" width="140">
                                    <?php }else{ ?>
                                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file; ?>" height="200" width="140">
                                    <?php }?>
                                    </td> -->
                                    
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
                                    <?php }?>
                                    </td> -->

                                    <!-- <td class="text-center">
                                    <?php
                                    if($u->nama_file4==''){?>
                                        <p class="badge badge-danger" style="background-color:red">No File</p>
                                    <?php }else{ ?>
                                    <a href="<?php echo base_url(); ?>upload/file/<?php echo $u->nama_file4; ?>"><img src="<?php echo base_url('assets/images/pdf.png'); ?>" height="40" width="40"></a>
                                    <p><?php echo $u->nama_file4; ?></p>
                                    <?php }?>
                                    </td> -->

                                    <td class="text-center">
                                        <?php echo anchor('admin/editview/'.$u->id,'<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>'); ?>
                                        <!-- <?php echo anchor('admin/deleteview/'.$u->id,'<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>'); ?> -->
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

