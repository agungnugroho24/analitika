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
                Form edit homepage
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
                        <?php foreach($homepage as $u){ ?>
                        <form class="cmxform form-horizontal tasi-form" enctype="multipart/form-data" action="<?php echo base_url(). 'Admin/updateview'; ?>" method="post">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">Alamat</label>
                                <div class="col-lg-10">
                                    <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                    <input class="form-control" id="alamat" name="alamat" type="text" value="<?php echo $u->alamat ?>" style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="control-label col-lg-2">Telepon</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="tlp" name="tlp" type="text" maxlength="12" required onkeypress="return isNumber(event)" value="<?php echo $u->tlp ?>" style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="username" class="control-label col-lg-2">Fax</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="fax" name="fax" type="text" maxlength="12" required onkeypress="return isNumber(event)" value="<?php echo $u->fax ?>" style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-2">Email</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="email" name="email" type="text" value="<?php echo $u->email ?>" style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="confirm_password" class="control-label col-lg-2">Tentang</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" id="tentang" name="tentang" type="text" value="" style="color:#000000;" rows="5"><?php echo $u->tentang ?></textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="" class="control-label col-lg-2">Banner</label>
                                <div class="col-lg-10">
                                    <table>
                                    <tr>
                                        <td>
                                        <?php
                                        if($u->nama_file==''){?>
                                            <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" height="170" width="140"><br>
                                        <?php }else{ ?>
                                        <img src="<?php echo base_url(); ?>upload/banner/<?php echo $u->nama_file; ?>" height="200" width="140"><br>
                                        <!-- <input type="checkbox" name="remove_banner" value="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file;?>"/>Remove -->
                                        <?php }?>
                                        &nbsp;
                                        <input type="file" name="banner"/><p>Max. 1mb</p>
                                        </td>

                                        <td>
                                        <?php
                                        if($u->nama_file2==''){?>
                                            <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" height="170" width="140"><br>
                                        <?php }else{ ?>
                                        <img src="<?php echo base_url(); ?>upload/banner/<?php echo $u->nama_file2; ?>" height="200" width="140"><br>
                                        <!-- <input type="checkbox" name="remove_banner2" value="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file2;?>"/>Remove -->
                                        <?php }?>
                                        &nbsp;
                                        <input type="file" name="banner2"/><p>Max. 1mb</p>
                                        </td>

                                        <td>
                                        <?php
                                        if($u->nama_file3==''){?>
                                            <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" height="170" width="140"><br>
                                        <?php }else{ ?>
                                        <img src="<?php echo base_url(); ?>upload/banner/<?php echo $u->nama_file3; ?>" height="200" width="140"><br>
                                        <!-- <input type="checkbox" name="remove_banner3" value="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file3;?>"/>Remove -->
                                        <?php }?>
                                        &nbsp;
                                        <input type="file" name="banner3"/><p>Max. 1mb</p>
                                        </td>
                                    </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="" class="control-label col-lg-2">Gambar Tentang Kami</label>
                                <div class="col-lg-10">
                                    <table>
                                    <tr>
                                    <td>
                                    <?php
                                    if($u->nama_file4==''){?>
                                        <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" height="170" width="140"><br>
                                    <?php }else{ ?>
                                    <img src="<?php echo base_url(); ?>upload/banner/<?php echo $u->nama_file4; ?>" height="200" width="140"><br>
                                    <!-- <input type="checkbox" name="remove_banner4" value="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file3;?>"/>Remove -->
                                    <?php }?>
                                    &nbsp;
                                    <input type="file" name="banner4"/><p>Max. 1mb</p>
                                    </td>
                                    </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-success" type="submit">Simpan</button>
                                <a href="<?=base_url('admin/index')?>"><button class="btn btn-default" type="button">Kembali</button></a>
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

