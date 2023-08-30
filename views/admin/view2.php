<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datatable Serverside Codeigniter</title>
    <link href="<?php echo base_url('assets/admin/css/jquery.dataTables.min.css')?>" rel="stylesheet">

    </head> 
<body>
    <div class="container">
        <h1 style="font-size:20pt">Datatable Serverside Codeigniter</h1>

        <h3>Data Users</h3>
        <br />
       
        <table id="table" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th class="text-center">Cover</th>
                    <!-- <th>Cover 2</th>
                    <th>Cover 3</th> -->
                    <th class="text-center">File</th>
                    <th class="text-center col-md-2">Judul buletin</th>
                    <!-- <th>Judul paper</th> -->
                    <!-- <th>Sumber</th> -->
                    <th class="text-center">Penulis paper</th>
                    <th class="text-center">Edisi terbit paper</th>
                    <th class="text-center col-md-4">Teks Ringkasan</th>
                    <th class="text-center">Periode</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
                <tr>
                    <th>No.</th>
                    <th class="text-center">Cover</th>
                    <!-- <th>Cover 2</th>
                    <th>Cover 3</th> -->
                    <th class="text-center">File</th>
                    <th class="text-center col-md-2">Judul buletin</th>
                    <!-- <th>Judul paper</th> -->
                    <!-- <th>Sumber</th> -->
                    <th class="text-center">Penulis paper</th>
                    <th class="text-center">Edisi terbit paper</th>
                    <th class="text-center col-md-4">Teks Ringkasan</th>
                    <th class="text-center">Periode</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>

<script src="<?php echo base_url('assets/admin/js/jquery-2.2.3.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/jquery.dataTables.min.js')?>"></script>


<script type="text/javascript">
    var table;
    $(document).ready(function() {

        //datatables
        table = $('#table').DataTable({ 

            "processing": true, 
            "serverSide": true, 
            "order": [], 
            
            "ajax": {
                "url": "<?php echo site_url('admin/get_data_file')?>",
                "type": "POST"
            },

            
            "columnDefs": [
            { 
                "targets": [ 0 ], 
                "orderable": false, 
            },
            ],

        });

    });

</script>

</body>
</html>