<body>
<section id="container" >
<!--main content start-->
            <!--main content start-->
<section id="main-content">
<section class="wrapper">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel" style="color:#000000;">
                <header class="panel-heading">
                Form homepage
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
                        <form class="cmxform form-horizontal tasi-form" enctype="multipart/form-data" action="<?php echo base_url(). 'Admin/create2'; ?>" method="post">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">Alamat</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="alamat" name="alamat" type="text" placeholder="Alamat" required style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="lastname" class="control-label col-lg-2">Telepon</label>
                                <div class="col-lg-10">
                                    <input class="form-control" type="text" id="tlp" name="tlp" placeholder="Telepon" maxlength="10" required onkeypress="return isNumber(event)" style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="username" class="control-label col-lg-2">Fax</label>
                                <div class="col-lg-10">
                                    <input class="form-control" type="text" id="fax" name="fax" placeholder="Fax" maxlength="10" required onkeypress="return isNumber(event)" style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-2">Email</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="email" name="email" type="text" placeholder="Email" required style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-2">Tentang</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control " id="tentang" name="tentang" type="text" placeholder="Tentang" required style="color:#000000;" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="Banner" class="control-label col-lg-2">Banner</label>
                                <div class="col-lg-10">
                                    <input type="file" name="banner" /><p>Max. 1mb</p>
                                    <input type="file" name="banner2" /><p>Max. 1mb</p>
                                    <input type="file" name="banner3" /><p>Max. 1mb</p>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="Banner" class="control-label col-lg-2">Gambar Tentang Kami</label>
                                <div class="col-lg-10">
                                    <input type="file" name="banner4" /><p>Max. 1mb</p>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-success" type="submit" value="submit">Simpan</button>
                                <a href="<?=base_url('admin/index')?>"><button class="btn btn-default" type="button">Kembali</button></a>
                            </div>
                            </div>
                        </form>
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

