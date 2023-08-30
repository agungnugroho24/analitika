<body>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item font-weight-normal" href="<?php echo base_url() ?>">Beranda</a>
            <span class="breadcrumb-item active font-weight-bold">Tentang</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h1>Tentang Kami</h1>
            <?php foreach($homepage as $u){ ?>
            <div class="img-sec">
                <?php
                if($u->nama_file4==''){?>
                    <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" width="480" height="397">
                <?php }else{ ?>
                    <img src="<?php echo base_url(); ?>upload/banner/<?php echo $u->nama_file4; ?>" width="480" height="397" alt="about">
                <?php }?>
                <p><?php echo $u->tentang ?></p>
            </div>
            <?php } ?>
        </div>
    </section>
</body>
</html>