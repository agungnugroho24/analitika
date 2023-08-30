<body>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item font-weight-normal" href="<?php echo base_url() ?>">Beranda</a>
            <span class="breadcrumb-item active font-weight-bold">FAQ</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
        <?php foreach($faq as $u){ ?>
            <h1>FAQ</h1>
            <h3><?php echo $u->pertanyaan1; ?></h3>
            <p><?php echo $u->jawaban1; ?></p>
            <h3><?php echo $u->pertanyaan2; ?></h3>
            <p><?php echo $u->jawaban2; ?> </p>
        <?php } ?>
        </div>
    </section>
</body>
</html>