<body>
    <section class="recomended-sec">
        <div class="container">
            <div class="title">
                <h2>buletin</h2>
                <hr>
            </div>
            <?php echo form_open('welcome/filter') ?>
            <!-- <div class="col-md-2 col-sm-2 col-xs-2">Kategori
                <select class="form-control" name="kategori">
                    <option value="" selected disabled>-Pilih kategori-</option>
                    <option value="1">Harian</option>
                    <option value="2">Mingguan</option>
                    <option value="3">Bulanan</option>
                    <option value="4">Triwulanan</option>
                </select>
                <input type="submit" class="btn btn-primary" value="Cari">
            </div> -->
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                <label class="mr-sm-2 sr-only" for="kategori">Kategori</label>
                    <select class="custom-select mr-sm-2" id="kategori" name="kategori">
                        <option value="" selected disabled>- Pilih kategori -</option>
                        <option value="">Semua</option>
                        <option value="1">Harian</option>
                        <option value="2">Mingguan</option>
                        <option value="3">Bulanan</option>
                        <option value="4">Triwulanan</option>
                    </select>
                </div>
                <div class="col-auto my-1">
                    <button type="submit" class="btn button3 font-weight-bold">Filter</button>
                </div>
            </div><br>
            <?php echo form_close() ?>
            <div class="row">
                <?php foreach ($file as $u):?>
                    <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <?php
                        if($u->nama_file==''){?>
                            <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>">
                        <?php } else { ?>
                        <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file; ?>" class="card-img-top" alt="<?php echo $u->judul_buletin; ?>">
                        <?php }?>
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $u->judul_buletin; ?></h6>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                        <div class="hover">
                            <?php echo anchor('welcome/detail/'.$u->id,'<span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>'); ?>
                            <!-- <a href="<?=base_url('welcome/product/'.$u->id)?>">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </a> -->
                        </div>
                    </div>
                    </div>
                <?php endforeach; ?>
            </div>
    </section>
</body>