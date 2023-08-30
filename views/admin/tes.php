<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title></title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="robots" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.min.js"></script>
</head>
<body>
<div class="ui-widget">
    <label for="tags">Penulis: </label>
    <select id="penulis" name="penulis" style="width: 300px"></select>
</div>

<script type="text/javascript">
// $("#penulis").select2(
// {
//     ajax: {
//         url: "http://analitika.bappenas.go.id/home/home/getUser",
//         // url: 'http://analitika.bappenas.go.id/home/home/getUser',
//         // url: 'https://akun.bappenas.go.id/bp-um/mapping/treeMapping',
//         dataType: "json",
//         type: "GET",
//         delay: 250,
//         data: function (params) {
//             return {
//                 username: params.term
//             };
//         },
//         processResults: function (data) {
//                 var res = data.items.map(function (item) {
//                     return {username: item.username, nama: item.nama};
//                     // return {text: item.nama};
//                 });
//             return {
//                 results: res
//             };
//         }
//     },
// });

// $("#penulis").select2(
// {
//     ajax: {
//         //url: 'https://api.github.com/search/repositories',
//         url: "http://analitika.bappenas.go.id/home/home/getUser",
//         // url: 'https://akun.bappenas.go.id/bp-um/mapping/treeMapping',
//         dataType: "json",
//         type: "GET",
//         delay: 50,
//         processResults: function (data) {
//                 var res = data.items.map(function (item) {
//                     return {username: item.username, nama: item.nama};
//                 });
//             return {
//                 results: res
//             };
//         }
//     },
// });

$(function(){
	$.get('http://analitika.bappenas.go.id/home/home/getUser',
		function(data){
			$.each(data, function(i, item){
				$('#penulis').append('<option value="'+item.username+'">'+item.nama+'</option>');
			});
			
			// draw select2
			$('#penulis').select2();
		}
	);

});
</script>
</body>
</html>

<!-- <html>
<head>
    <script src='https://code.jquery.com/jquery-2.2.4.js'></script>
    <script src='https://code.jquery.com/ui/1.12.0/jquery-ui.js'></script>
    <link href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css" rel="stylesheet" media="screen" />
    <script type='text/javascript'>

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#tags").autocomplete({
                source: function (request, response) {
                    $.ajax({
                        method: "GET",
                        dataType: "json",
                        url: "http://analitika.bappenas.go.id/home/home/getUser?s="+request.term,
                        success: function (data) {
                            console.log(data);
                            // data.Search uses because we have `title`s in {"Search":[{..
                            var transformed = $.map(data.Search, function (item) {
                                return {
                                label: item.nama
                                };
                             });
                             response(transformed);
                        },
                        error: function () {
                            response([]);
                        }
                    });
                }
            });
        });
    </script>
</head>
<body>

<div class="ui-widget">
    <label for="tags">Penulis: </label>
    <input id="tags">
</div>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/dataTables.bootstrap4.min.css')?>">
</head>
<body>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px">Data Buku Dengan CodeIgniter & DataTables</h2>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                    <th>No.</th>
                    <th class="text-center">Cover</th>
                    <th class="text-center">File</th>
                    <th class="text-center col-md-2">Judul buletin</th>
                    <th class="text-center">Penulis paper</th>
                    <th class="text-center">Edisi terbit paper</th>
                    <th class="text-center col-md-4">Teks Ringkasan</th>
                    <th class="text-center">Periode</th>
                    <th class="text-center">Aksi</th>
                </tr>
              </thead>
                <?php 
                $no = 1;
                foreach($file as $u){
                ?>
                <tbody>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td class="text-center">
                    <?php
                    if($u->nama_file==''){?>
                        <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" height="170" width="140">
                    <?php }else{ ?>
                    <img src="<?php echo base_url(); ?>upload/image/<?php echo $u->nama_file; ?>" height="200" width="140">
                    <?php }?>
                    </td>

                    </td>
                    <td class="text-center">
                    <?php
                    if($u->nama_file4==''){?>
                        <p class="badge badge-danger" style="background-color:red">No File</p>
                    <?php }else{ ?>
                    <a href="<?php echo base_url(); ?>upload/file/<?php echo $u->nama_file4; ?>"><img src="<?php echo base_url('assets/images/pdf.png'); ?>" height="40" width="40"></a>
                    <?php }?>
                    </td>

                    <td><?php echo $u->judul_buletin; ?></td>
                    <td><?php echo $u->penulis_paper; ?></td>
                    <td><?php echo $u->edisi_terbit_paper; ?></td>
                    <td><?php echo $u->teks_ringkasan; ?></td>
                    <td><?php echo $u->periode; ?></td>
                    <td class="text-center">
                        <?php echo anchor('admin/edit/'.$u->id,'<button class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-pencil"></i></button>'); ?>
                        <?php echo anchor('admin/delete/'.$u->id,'<button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>'); ?>
                    </td>
                </tr>
                <?php } ?>                           
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery-3.2.1.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/admin/js/dataTables.bootstrap4.min.js')?>"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable(
          {
            pageLength: 5,
            lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 50]],
          }
      );
  } );
</script>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Buletin</title>
    <link href="<?php echo base_url().'assets/admin/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/vendor/font-awesome/css/font-awesome.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url().'assets/admin/css/jquery.dataTables.min.css'?>" rel="stylesheet">
</head>
<body>

<div class="container">
	<h1>Data Buletin</h1>
	<table class="table table-bordered table-striped" id="mydata">
		<thead>
			<tr>
				<th>No.</th>
				<th class="text-center">Cover</th>
				<th>Cover 2</th>
				<th>Cover 3</th>
				<th class="text-center">File</th>
				<th class="text-center col-md-2">Judul buletin</th>
				<th>Judul paper</th>
				<th>Sumber</th>
				<th class="text-center">Penulis paper</th>
				<th class="text-center">Edisi terbit paper</th>
				<th class="text-center col-md-4">Teks Ringkasan</th>
				<th class="text-center">Periode</th>
				<th class="text-center">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1;
                foreach($file->result_array() as $i):
                    $id=$i['id'];
                    $nama_file=$i['nama_file'];
                    $nama_file4=$i['nama_file4'];
					$judul_buletin=$i['judul_buletin'];
					$penulis_paper=$i['penulis_paper'];
					$edisi_terbit_paper=$i['edisi_terbit_paper'];
					$teks_ringkasan=$i['teks_ringkasan'];
					$periode=$i['periode'];
			?>
			<tr>
                <td><?php echo $no++ ?></td>
                <td class="text-center">
                <?php
                if($nama_file==''){?>
                    <img src="<?php echo base_url('assets/images/noimage.jpg'); ?>" height="170" width="140">
                <?php }else{ ?>
                <img src="<?php echo base_url(); ?>upload/image/<?php echo $nama_file; ?>" height="200" width="140">
                <?php }?>
                </td>
                <td class="text-center">
                <?php
                if($nama_file4==''){?>
                    <p class="badge badge-danger" style="background-color:red">No File</p>
                <?php }else{ ?>
                <a href="<?php echo base_url(); ?>upload/file/<?php echo $nama_file4; ?>"><img src="<?php echo base_url('assets/images/pdf.png'); ?>" height="40" width="40"></a>
                <?php }?>
                </td>
				<td><?php echo $judul_buletin;?></td>
				<td><?php echo $penulis_paper;?></td>
				<td><?php echo $edisi_terbit_paper;?></td>
				<td><?php echo $teks_ringkasan;?></td>
                <td><?php echo $periode;?></td>
                <td class="text-center">
                    <?php echo anchor('admin/edit/'.$id,'<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>'); ?>
                    <?php echo anchor('admin/delete/'.$id,'<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>'); ?>
                    <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $u->id;?>"><i class="fa fa-trash-o "></i></button>
                </td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	
</div>

<script src="<?php echo base_url().'assets/admin/js/jquery-3.2.1.min.js'?>"></script>
<script src="<?php echo base_url().'assets/admin/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/admin/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/admin/js/moment.min.js'?>"></script>
<script>
	$(document).ready(function(){
		$('#mydata').DataTable({
			pageLength: 5,
        	lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 50]]
		});
	});
</script>
</body>
</html> -->