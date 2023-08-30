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
                Form edit FAQ
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
                        <?php foreach($faq as $u){ ?>
                        <form class="cmxform form-horizontal tasi-form" enctype="multipart/form-data" action="<?php echo base_url(). 'Admin/updatefaq'; ?>" method="post">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">Pertanyaan 1</label>
                                <div class="col-lg-10">
                                    <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                    <input class="form-control" id="pertanyaan1" name="pertanyaan1" type="text" value="<?php echo $u->pertanyaan1 ?>" style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">Jawaban 1</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" id="jawaban1" name="jawaban1" type="text" placeholder="Jawaban 1" required style="color:#000000;" rows="3"><?php echo $u->jawaban1 ?></textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">Pertanyaan 2</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="pertanyaan2" name="pertanyaan2" type="text" value="<?php echo $u->pertanyaan2 ?>" style="color:#000000;"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">Jawaban 2</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" id="jawaban2" name="jawaban2" type="text" placeholder="Jawaban 2" required style="color:#000000;" rows="3"><?php echo $u->jawaban2 ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-success" type="submit">Simpan</button>
                                <a href="<?=base_url('admin/faq')?>"><button class="btn btn-default" type="button">Kembali</button></a>
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

