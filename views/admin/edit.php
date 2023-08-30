<body>
<section id="container" >
<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel" style="color:#000000;">
                <header class="panel-heading">
                Form edit bulletin
                </header>
                <hr>
                <div class="panel-body">
                    <div class="form">
                        <?php 
                            if(isset($error))
                            {
                                echo "ERROR UPLOAD : <br/>";
                                print_r($error);
                                echo "<hr/>";
                            }
                        ?>
                        <?php foreach($file as $u){ ?>
                        <form class="cmxform form-horizontal tasi-form" enctype="multipart/form-data" action="<?php echo base_url(). 'Admin/update'; ?>" method="post">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <input type="hidden" name="editor" value="<?php echo $this->session->userdata('username') ?>">
                        <input type="hidden" name="tgledit" value="<?php $now = date('Y-m-d H:i:s'); echo $now; ?>">
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">Judul buletin</label>
                                <div class="col-lg-10">
                                    <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                    <input class="form-control" id="judulbuletin" name="judulbuletin" type="text" value="<?php echo $u->judul_buletin ?>" style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="control-label col-lg-2">Judul paper</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="judulpaper" name="judulpaper" type="text" value="<?php echo $u->judul_paper ?>" style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="username" class="control-label col-lg-2">Sumber</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="sumber" name="sumber" type="text" value="<?php echo $u->sumber ?>" style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-2">Penulis paper</label>
                                <div class="col-lg-10">
                                    <input class="form-control" type="hidden" name="penulispaper" type="text" value="<?php echo $u->penulis_paper ?>" style="color:#000000;"/>
                                    <select class="form-control" id="editpenulispaper" name="penulispaper" type="text"></select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="confirm_password" class="control-label col-lg-2">Edisi terbit paper</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="edisiterbitpaper" name="edisiterbitpaper" type="text" value="<?php echo $u->edisi_terbit_paper ?>" style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="email" class="control-label col-lg-2">Teks ringkasan</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" id="teksringkasan" name="teksringkasan" type="text" value="" style="color:#000000;" rows="3"><?php echo $u->teks_ringkasan ?></textarea>
                                </div>
                            </div>
                            <!-- <div class="form-group ">
                                <label for="agree" class="control-label col-lg-2 col-sm-3">Periode</label>
                                <div class="col-lg-10">
                                <input type="text" id="periode" name="periode" placeholder="02/2012" size="16" class="form-control">
                                <span class="input-group-btn add-on">
                                    <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="control-label col-lg-2 col-sm-3">Periode</label>
                                <div class="col-lg-4">
                                    <input type="text" id="periode" name="periode" class="form-control" style="background-color:#ffffff;color:#000000;" value="<?php echo $u->periode ?>" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="tag" class="control-label col-lg-2">Tag</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="tag" name="tag" type="text" value="<?php echo $u->tag ?>" style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Kategori</label>
                                <div class="col-lg-10">
                                    <select class="form-control m-bot15" id="kategori" name="kategori">
                                        <?php
                                        if($u->kategori==''){?>
                                            <option value="" selected disabled>-Pilih kategori-</option>
                                        <?php }else{ ?>
                                            <option value="<?php echo $u->kategori ?>" selected readonly>
                                            <?php
                                                if ($u->kategori==1) {
                                                    echo 'Harian';
                                                } else if ($u->kategori==2) {
                                                    echo 'Mingguan';
                                                } else if ($u->kategori==3) {
                                                    echo 'Bulanan';
                                                } else if ($u->kategori==4) {
                                                    echo 'Triwulanan';
                                                } else {
                                                    exit;
                                                }
                                            ?>
                                            </option>
                                        <?php }?>
                                        <option value="1">Harian</option>
                                        <option value="2">Mingguan</option>
                                        <option value="3">Bulanan</option>
                                        <option value="4">Triwulanan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="email" class="control-label col-lg-2">Cover</label>
                                <div class="col-lg-10">
                                    <table>
                                    <tr>
                                    <td>
                                    <?php
                                    if($u->nama_file==''){?>
                                        <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" height="170" width="140"><br>
                                    <?php }else{ ?>
                                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file; ?>" height="200" width="140"><br>
                                    <!-- <input type="checkbox" name="remove_cover" value="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file;?>"/>Remove -->
                                    <?php }?>
                                    &nbsp;
                                    <input type="file" name="cover"/><p>Max. 1mb</p>
                                    </td>
                                    <td>
                                    <?php
                                    if($u->nama_file2==''){?>
                                        <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" height="170" width="140"><br>
                                    <?php }else{ ?>
                                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file2; ?>" height="200" width="140"><br>
                                    <!-- <input type="checkbox" name="remove_cover2" value="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file2;?>"/>Remove -->
                                    <?php }?>
                                    &nbsp;
                                    <input type="file" name="cover2"/><p>Max. 1mb</p>
                                    </td>
                                    <td>
                                    <?php
                                    if($u->nama_file3==''){?>
                                        <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" height="170" width="140"><br>
                                    <?php }else{ ?>
                                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file3; ?>" height="200" width="140"><br>
                                    <!-- <input type="checkbox" name="remove_cover3" value="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file3;?>"/>Remove -->
                                    <?php }?>
                                    &nbsp;
                                    <input type="file" name="cover3"/><p>Max. 1mb</p>
                                    </td>
                                    </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="email" class="control-label col-lg-2">File</label>
                                <div class="col-lg-10">
                                    <table>
                                    <tr>
                                    <td>
                                    <?php
                                    if($u->nama_file4==''){?>
                                        <p class="badge badge-danger" style="background-color:red">No File</p>
                                    <?php }else{ ?>
                                        <img src="<?php echo base_url('assets/images/pdf2.png'); ?>" height="46" width="46"><p><?php echo $u->nama_file4; ?></p>
                                    <?php }?>
                                    <!-- <input type="checkbox" name="remove_file" value="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file4;?>"/>Remove -->
                                    <input type="file" name="uploadfile"/>
                                    <!-- <p>Max. 3mb</p> -->
                                    <p>Max. 5mb</p>
                                    </td>
                                    <td>
                                    </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-success" type="submit">Simpan</button>
                                <a href="<?=base_url('admin/listbuletin')?>"><button class="btn btn-default" type="button">Kembali</button></a>
                            </div>
                            </div>
                        </form>
                        <?php } ?>
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

