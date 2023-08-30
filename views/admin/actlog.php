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
                    Activity Log
                    <hr>
                </header>
                <div class="panel-body">
                    <div class="adv-table">
                        <div class="clearfix">
                            <!-- <div class="btn-group">
                                <a href="<?=base_url('admin/createview')?>"><button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah baru</button></a>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown">Export <i class="fa fa-download"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Save as PDF</a></li>
                                    <li><a href="#">Export to Excel</a></li>
                                </ul>
                                <select id="exportLink" class="btn btn-sm btn-success">
                                    <option selected disabled style="background-color:#ffffff;">- Export data -</option>
                                    <option id="print" style="background-color:#ffffff;color:#000000;">Print</option>
                                    <option id="pdf" style="background-color:#ffffff;color:#000000;">Export as PDF</option>
                                    <option id="excel" style="background-color:#ffffff;color:#000000;">Export as XLS</option>
                                    <option id="copy" style="background-color:#ffffff;color:#000000;">Copy to clipboard</option>
                                    <option id="colvis" style="background-color:#ffffff;color:#000000;">Column Visibility</option>
                                </select>
                            </div> -->
                        </div>
                        <div class="space15"></div>
                        <table class="table table-bordered table-striped" id="actlog">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Time</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center col-md-3">Workunit</th>
                                    <th class="text-center col-md-6">Description</th>
                                    <!-- <th class="text-center">Aksi</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                    foreach($log_activity->result_array() as $i):
                                        $id=$i['log_id'];
                                        $log_time=$i['log_time'];
                                        $log_user=$i['log_user'];
                                        $log_workunit=$i['log_workunit'];
                                        $log_desc=$i['log_desc'];
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td><?php echo $log_time;?></td>
									<td><?php echo $log_user?></td>
                                    <td><?php echo $log_workunit?></td>
                                    <td><?php echo $log_desc;?></td>
                                    <!-- <td class="text-center">
                                        <?php echo anchor('admin/edit/'.$id,'<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>'); ?>
                                        <?php echo anchor('admin/delete/'.$id,'<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>'); ?>
                                        <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $id;?>"><i class="fa fa-trash-o "></i></button>
                                    </td> -->
                                </tr>
                                <?php endforeach;?>
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