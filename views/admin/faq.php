<body>
<section id="container" >
<!--main content start-->
<section id="main-content">
<section class="wrapper site-min-height">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    FAQ
                </header>
                <hr>
                <div class="panel-body">
                    <div class="adv-table">
                        <div class="clearfix">
                            <!-- <div class="btn-group">
                                <a href="<?=base_url('admin/createfaq')?>"><button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah baru</button></a>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown">Export <i class="fa fa-download"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Save as PDF</a></li>
                                    <li><a href="#">Export to Excel</a></li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="space15"></div>
                        <table id="table3" class="display table table-bordered table-striped" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th class="text-center col-md-3">Pertanyaan 1</th>
                                    <th class="text-center col-md-3">Jawaban 1</th>
                                    <th class="text-center col-md-3">Pertanyaan 2</th>
                                    <th class="text-center col-md-3">Jawaban 2</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <?php 
                                $no = 1;
                                foreach($faq as $u){
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->pertanyaan1; ?></td>
                                    <td><?php echo $u->jawaban1; ?></td>
                                    <td><?php echo $u->pertanyaan2; ?></td>
                                    <td><?php echo $u->jawaban2; ?></td>

                                    <td class="text-center">
                                        <?php echo anchor('admin/editfaq/'.$u->id,'<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>'); ?>
                                        <!-- <?php echo anchor('admin/deletefaq'.$u->id,'<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>'); ?> -->
                                    </td>
                                </tr>
                            <?php } ?>                           
                            </tbody>
                        </table>
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

