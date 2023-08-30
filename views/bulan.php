<body>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item font-weight-normal" href="<?=base_url()?>">Beranda</a>
            <span class="breadcrumb-item active font-weight-bold">Daftar Buletin</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h2>buletin bulanan</h2>
            <div class="recomended-sec">
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
            </div>
        </div>
    </section>
</body>