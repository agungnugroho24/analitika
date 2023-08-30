<body>
    <section class="recomended-sec">
        <div class="container">
            <div class="title">
                <h2>buletin</h2>
                <hr>
            </div>
            <?php echo form_open('welcome/filter') ?>
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                <label class="mr-sm-2 sr-only" for="kategori">Kategori</label>
                    <select class="custom-select mr-sm-2" id="kategori" name="kategori" style="cursor:pointer;">
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
            <!-- <div class="row">
                <?php foreach($file as $u): ?>
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
                <?php endforeach; ?> 
            </div> -->
            <!-- <div class="row">
                <div class="col-lg-3 col-md-6">
                    <table>
                    <?php 
                        foreach($file as $u){
                    ?>
                    <tr>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file; ?>" width="141" height="218" alt="img">
                        <h3><?php echo $u->judul_buletin; ?></h3>
                        <h6><span class="price">$49</span> / <a href="#">Buy Now</a></h6>
                        <div class="hover">
                            <a href="<?=base_url('welcome/product/'.$u->id)?>">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                    </tr>
                    <?php } ?> 
                    </table>
                </div>
            </div> -->
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
                                <?php echo anchor('welcome/detail/'.$u->id,'<span><p class="h5"><i class="fa fa-search-plus" aria-hidden="true"></i><b>Detail</b></p></span>'); ?>
                                <!-- <a href="<?=base_url('welcome/product/'.$u->id)?>">
                                <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </a> -->
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- <div class="row">
                <?php foreach ($file as $u):?>
                    <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file; ?>" class="card-img-top" alt="<?php echo $u->judul_buletin; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $u->judul_buletin; ?></h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="hover">
                            <?php echo anchor('welcome/detail/'.$u->id,'<span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>'); ?>
                            <h5 class=""><?php echo $u->judul_buletin; ?></h5>
                            <a href="<?=base_url('welcome/product/'.$u->id)?>">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                    </div>
                <?php endforeach; ?>
            </div> -->
        </div>
    </section>

    <!-- <section class="about-sec">

        <div class="about-img">

            <figure style="background:url(assets/images/about-img.jpg)no-repeat;"></figure>

        </div>

        <div class="about-content">

            <h2>About Analitika</h2>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. Lorem Ipsum has been the book. </p>

            <p>It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>

            <div class="btn-sec">

                <a href="<?=base_url('welcome/shop')?>" class="btn yellow">book now</a>

                <a href="<?=base_url('welcome/login')?>" class="btn black">subscriptions</a>

            </div>

        </div>

    </section> -->

    <!-- <section class="recent-book-sec">

        <div class="container">

            <div class="title">

                <h2>highly recommended bulletins</h2>

                <hr>

            </div>

            <div class="row">

                <div class="col-lg-2 col-md-3 col-sm-4">

                    <div class="item">

                        <img src="<?php echo base_url('assets/images/r1.png') ?>" width="165" height="260" alt="img">

                        <h3><a href="#">Analisis</a></h3>

                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>

                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-sm-4">

                    <div class="item">

                        <img src="<?php echo base_url('assets/images/r2.png') ?>" width="165" height="260" alt="img">

                        <h3><a href="#">Analisis</a></h3>

                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>

                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-sm-4">

                    <div class="item">

                        <img src="<?php echo base_url('assets/images/r3.png') ?>" width="165" height="260" alt="img">

                        <h3><a href="#">Analisis</a></h3>

                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>

                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-sm-4">

                    <div class="item">

                        <img src="<?php echo base_url('assets/images/r4.png') ?>" width="165" height="260" alt="img">

                        <h3><a href="#">Analisis</a></h3>

                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>

                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-sm-4">

                    <div class="item">

                        <img src="<?php echo base_url('assets/images/r5.png') ?>" width="165" height="260" alt="img">

                        <h3><a href="#">Analisis</a></h3>

                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>

                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-sm-4">

                    <div class="item">

                        <img src="<?php echo base_url('assets/images/r6.png') ?>" width="165" height="260" alt="img">

                        <h3><a href="#">Analisis</a></h3>

                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>

                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-sm-4">

                    <div class="item">

                        <img src="<?php echo base_url('assets/images/r7.png') ?>" width="165" height="260" alt="img">

                        <h3><a href="#">Analisis</a></h3>

                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>

                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-sm-4">

                    <div class="item">

                        <img src="<?php echo base_url('assets/images/r8.png') ?>" width="165" height="260" alt="img">

                        <h3><a href="#">Analisis</a></h3>

                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>

                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-sm-4">

                    <div class="item">

                        <img src="<?php echo base_url('assets/images/r9.png') ?>" width="165" height="260" alt="img">

                        <h3><a href="#">Analisis</a></h3>

                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>

                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-sm-4">

                    <div class="item">

                        <img src="<?php echo base_url('assets/images/r10.png') ?>" width="165" height="260" alt="img">

                        <h3><a href="#">Analisis</a></h3>

                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>

                    </div>

                </div>

            </div>

            <div class="btn-sec">

                <a href="#" class="btn gray-btn">view all bulletins</a>

            </div>

        </div>

    </section> -->

    <!-- <section class="features-sec">
        <div class="container">
            <ul>
                <li>
                    <span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    <h3>SAFE SHOPPING</h3>
                    <h5>Safe Shopping Guarantee</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
                <li>
                    <span class="icon return"><i class="fa fa-reply-all" aria-hidden="true"></i></span>
                    <h3>30- DAY RETURN</h3>
                    <h5>Moneyback guarantee</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
                <li>

                    <span class="icon chat"><i class="fa fa-comments" aria-hidden="true"></i></span>
                    <h3>24/7 SUPPORT</h3>
                    <h5>online Consultations</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
            </ul>
        </div>
    </section> -->

    <!-- <section class="offers-sec" style="background:url(assets/images/offers.jpg)no-repeat;">
        <div class="cover"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail">
                        <h3>Top 50% OFF on Selected</h3>
                        <h6>We are now offering some good discount 
                    on selected books go and shop them</h6>
                        <a href="<?=base_url('welcome/product')?>" class="btn blue-btn">view all books</a>
                        <span class="icon-point percentage">
                            <img src="<?php echo base_url('assets/images/precentagae.png') ?>" alt="">
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail">
                        <h3>Shop $ 500 Above and Get Extra!</h3>
                        <h6>We are now offering some good discount on selected books go and shop them</h6>
                        <a href="<?=base_url('welcome/product')?>" class="btn blue-btn">view all books</a>
                        <span class="icon-point amount"><img src="<?php echo base_url('assets/images/amount.png') ?>" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="testimonial-sec">
        <div class="container">
            <div id="testimonal" class="owl-carousel owl-theme">
                <div class="item">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                    <div class="box-user">
                        <h4 class="author">Susane Mathew</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                    <div class="box-user">
                        <h4 class="author">Susane Mathew</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                    <div class="box-user">
                        <h4 class="author">Susane Mathew</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
                <div class="item">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. been the book</h3>
                    <div class="box-user">
                        <h4 class="author">Susane Mathew</h4>
                        <span class="country">Australia</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-quote">
            <img src="<?php echo base_url('assets/images/left-quote.png') ?>" alt="quote">
        </div>
        <div class="right-quote">
            <img src="<?php echo base_url('assets/images/right-quote.png') ?>" alt="quote">
        </div>
    </section> -->
</body>
</html>