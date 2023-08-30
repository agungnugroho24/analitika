<body>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item font-weight-normal" href="<?=base_url()?>">Beranda</a>
            <span class="breadcrumb-item font-weight-bold active">Detail</span>
        </div>
    </div>
    <section class="product-sec">
        <div class="container">
            <?php 
                if(isset($error))
                {
                    echo "ERROR UPLOAD : <br/>";
                    print_r($error);
                    echo "<hr/>";
                }
            ?>
            <?php if (is_array($file) && count($file) > 0) {
                foreach($file as $u): ?>
                <h3><?php echo $u->judul_buletin ?></h3>
                <br>&nbsp;
                <div class="row">
                    <div class="col-md-6 slider-sec">
                        <!-- main slider carousel -->
                        <div id="myCarousel" class="carousel slide">
                            <!-- main slider carousel items -->
                            <div class="carousel-inner">
                                <div class="active item carousel-item" data-slide-number="0">
                                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file; ?>" class="img-fluid">
                                </div>
                                <div class="item carousel-item" data-slide-number="1">
                                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file2; ?>" class="img-fluid">
                                </div>
                                <div class="item carousel-item" data-slide-number="2">
                                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file3; ?>" class="img-fluid">
                                </div>
                            </div>
                            <!-- main slider carousel nav controls -->
                            <ul class="carousel-indicators list-inline">
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file; ?>" class="img-fluid">
                                </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file2; ?>" class="img-fluid">
                                </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file3; ?>" class="img-fluid">
                                </a>
                                </li>
                            </ul>
                        </div>
                        <!--/main slider carousel-->
                    </div>
                    <div class="col-md-6 slider-content">
                        <p class="font-weight-normal"><?php echo $u->teks_ringkasan ?></p>
                        <ul>
                            <!-- <li>
                                <span class="name">Digital List Price</span><span class="clm">:</span>
                                <span class="price">$4.71</span>
                            </li>
                            <li>
                                <span class="name">Print List Price</span><span class="clm">:</span>
                                <span class="price">$10.99</span>
                            </li>
                            <li>
                                <span class="name">Kindle Price</span><span class="clm">:</span>
                                <span class="price final">$3.37</span>
                            </li>
                            <li><span class="save-cost">Save $7.62 (69%)</span></li> -->
                        </ul>

                        <div class="btn-sec">
                            <!-- Button trigger modal -->
                            <button class="btn button1 font-weight-bold" data-toggle="modal" data-target="#show"><i class="fa fa-search-plus"></i> Preview</button>
                            <a href="<?php echo base_url(); ?>welcome/download/<?php echo $u->id; ?>" style="color: #000000;"><button class="btn button2 font-weight-bold"><i class="fa fa-download"></i> Download</button></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; } else { ?>
                <p class="text-center">Maaf, kami tidak menemukan buletin yang anda cari.<br>
                Silakan cek kembali kata kunci yang anda masukkan.
                </p>
            <?php } ?>
        </div>
    </section>
    <!-- <section class="related-books">
        <div class="container">
            <h4>Buletin yang lain</h4>
            <br>
            <div class="recomended-sec">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file; ?>" width="201" height="278" alt="img">
                            <marquee behavior="scroll" scrollamount="4" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><h5 class="" style="font-family: calibri; font-size: 12pt;color:#000000;"><?php echo $u->judul_buletin; ?></h5></marquee>
                            <h6><span class="price">$49</span> / <a href="#">Buy Now</a></h6>
                            <div class="hover">
                                <?php echo anchor('welcome/detail/'.$u->id,'<span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>'); ?>
                                <a href="<?=base_url('welcome/product/'.$u->id)?>">
                                <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $u->judul_buletin ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <embed src="<?php echo base_url(); ?>upload/file/<?php echo $u->nama_file4; ?>" type="application/pdf" width="100%" height="600px" />
                <!-- <object data="<?php echo base_url('upload/produksi_padi.pdf')?>" type="application/pdf" width="100%" height="700px"></object> -->
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            </div>
        </div>
    </div>
</body>
</html>