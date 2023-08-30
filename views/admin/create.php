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
                Form bulletin
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
                        <form class="cmxform form-horizontal tasi-form" enctype="multipart/form-data" action="<?php echo base_url(). 'Admin/create'; ?>" method="post">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <input type="hidden" name="uploader" value="<?php echo $this->session->userdata('username') ?>">
                        <input type="hidden" name="tglcreate" value="<?php $now = date('Y-m-d H:i:s'); echo $now; ?>">
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">Judul buletin</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="judulbuletin" name="judulbuletin" type="text" placeholder="Judul buletin" required style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="lastname" class="control-label col-lg-2">Judul paper</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="judulpaper" name="judulpaper" type="text" placeholder="Judul paper" required style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="username" class="control-label col-lg-2">Sumber</label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="sumber" name="sumber" type="text" placeholder="Sumber" required style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-2">Penulis paper</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="" name="penulispaper" type="text" placeholder="Penulis paper" required style="color:#000000;"/>
                                    <!-- <select class="form-control" id="penulispaper" name="penulispaper" type="text" placeholder="Penulis paper" required></select> -->
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="confirm_password" class="control-label col-lg-2">Edisi terbit paper</label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="edisiterbitpaper" name="edisiterbitpaper" type="text" placeholder="Edisi terbit paper" required style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="teksringkasan" class="control-label col-lg-2">Teks ringkasan</label>
                                <div class="col-lg-10">
                                    <!-- <input class="form-control " id="teksringkasan" name="teksringkasan" type="text" placeholder="Teks ringkasan" required style="color:#000000;"/> -->
                                    <textarea class="form-control " id="teksringkasan" name="teksringkasan" type="text" placeholder="Teks ringkasan" required style="color:#000000;" rows="3"></textarea>
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
                                    <input type="text" id="periode" name="periode" placeholder="1999-12-31" class="form-control" style="background-color:#ffffff;color:#000000;" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="tag" class="control-label col-lg-2">Tag</label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="tag" name="tag" type="text" required style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Kategori</label>
                                <div class="col-lg-10">
                                    <select class="form-control m-bot15" id="kategori" name="kategori" required>
                                        <option value="" selected disabled>-Pilih kategori-</option>
                                        <option value="1">Harian</option>
                                        <option value="2">Mingguan</option>
                                        <option value="3">Bulanan</option>
                                        <option value="4">Triwulanan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="Cover" class="control-label col-lg-2">Cover</label>
                                <div class="col-lg-10">
                                    <input type="file" name="cover" /><p>Max. 1mb</p>
                                    <input type="file" name="cover2" /><p>Max. 1mb</p>
                                    <input type="file" name="cover3" /><p>Max. 1mb</p>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="File" class="control-label col-lg-2">File</label>
                                <div class="col-lg-10">
                                    <input type="file" name="uploadfile" />
                                    <!-- <p>Max. 3mb</p> -->
                                    <p>Max. 5mb</p>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-success" type="submit" value="submit">Simpan</button>
                                <a href="<?=base_url('admin/listbuletin')?>"><button class="btn btn-default" type="button">Kembali</button></a>
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