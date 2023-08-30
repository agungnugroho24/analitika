<html>
<head>
<title>Error 404</title>
<link rel="shortcut icon" href="<?php echo base_url();?>image/top-bg.png" />
<link href="<?php echo base_url();?>css/404/reset.css" type="text/css" rel="stylesheet" media="screen">
<link href="<?php echo base_url();?>css/404/style.css" type="text/css" rel="stylesheet" media="screen">
</head>
<style>
	#robot{
		position: relative;
		animation: example 10s infinite;
	}
	@keyframes example {
		0%   {left:0px; top:0px;}
		25%  {left:-200px; top:0px;}
		50%  {left:200px; top:0px;}
		75%  {left:-200px; top:0px;}
		100%  {left:0px; top:0px;}
	}

</style>
<body>
	<div id="robot">
		<img src="<?php echo base_url();?>image/robot_404.png" alt="Robot">
	</div>
	<h1 class="lg f130">404</h1>
	<h1 class="lg f72">Page Not Found</h1>
	<p class="sans-serif">The page you are looking for either doesn't exist or is not here anymore.</p>
</body>
</html>
