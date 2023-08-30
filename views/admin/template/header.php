<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Mosaddek">
  <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <!-- Favicons -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo_bappenas.png')?>">
  <link rel="apple-touch-icon" href="<?php echo base_url('assets/images/logo_bappenas.png')?>">
  <title><?php echo $title ?></title>
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- <link href="<?php echo base_url('assets/admin/css/bootstrap-reset.css')?>" rel="stylesheet"> -->
  <!--external css-->
  <link href="<?php echo base_url('assets/admin/vendor/font-awesome/css/font-awesome.css')?>" rel="stylesheet" />
  <!-- <link href="<?php echo base_url('assets/admin/css/jquery.dataTables.min.css')?>" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/dataTables.bootstrap4.min.css')?>">
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/vendor/bootstrap-datepicker/css/datepicker.css')?>" /> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/daterangepicker.css')?>" />
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/vendor/bootstrap-datetimepicker/css/datetimepicker.css')?>" /> -->

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/admin/css/style.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/admin/css/style-responsive.css')?>" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/select2.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/sweetalert2.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/buttons.dataTables.min.css') ?>">
  <style>
  *{box-sizing: border-box;}
  .container { margin: 150px auto; max-width: 960px;}
  label{display: block;padding: 20px 0 5px 0;}
  .tagsinput,.tagsinput *{box-sizing:border-box}
  .tagsinput{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;background:#fff;font-family:sans-serif;font-size:14px;line-height:20px;color:#556270;padding:5px 5px 0;border:1px solid #bfbfbf;border-radius:2px}
  .tagsinput.focus{border-color:#ccc}
  .tagsinput .tag{position:relative;background:#556270;display:block;max-width:100%;word-wrap:break-word;color:#fff;padding:5px 30px 5px 5px;border-radius:2px;margin:0 5px 5px 0}
  .tagsinput .tag .tag-remove{position:absolute;background:0 0;display:block;width:30px;height:30px;top:0;right:0;cursor:pointer;text-decoration:none;text-align:center;color:#ff6b6b;line-height:30px;padding:0;border:0}
  .tagsinput .tag .tag-remove:after,.tagsinput .tag .tag-remove:before{background:#ff6b6b;position:absolute;display:block;width:10px;height:2px;top:14px;left:10px;content:''}
  .tagsinput .tag .tag-remove:before{-webkit-transform:rotateZ(45deg);transform:rotateZ(45deg)}
  .tagsinput .tag .tag-remove:after{-webkit-transform:rotateZ(-45deg);transform:rotateZ(-45deg)}
  .tagsinput div{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1}
  .tagsinput div input{background:0 0;display:block;width:100%;font-size:14px;line-height:20px;padding:5px;border:0;margin:0 5px 5px 0}
  .tagsinput div input.error{color:#ff6b6b}
  .tagsinput div input::-ms-clear{display:none}
  .tagsinput div input::-webkit-input-placeholder{color:#ccc;opacity:1}
  .tagsinput div input:-moz-placeholder{color:#ccc;opacity:1}
  .tagsinput div input::-moz-placeholder{color:#ccc;opacity:1}
  .tagsinput div input:-ms-input-placeholder{color:#ccc;opacity:1}
  </style>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
</head>