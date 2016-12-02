<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Sets initial viewport load and disables zooming  -->
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- site css -->
		<link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.css" />
		<link rel="stylesheet" href="css/mcwb.css?<?php echo md5(rand());?>" />
		<link rel="stylesheet" href="css/<?php echo $page.'.css?'.md5(rand());?>" />
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="lib/Bootflat/js/php5shiv.js"></script>
		<script type="text/javascript" src="lib/Bootflat/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header id="header">
			<img src="img/logo.png" alt="MCWB Logo" />
			<h1>M<span>edical</span> C<span>enter</span> W<span>estern</span> B<span>atangas</span></h1>
			<div id="contacts"> +63917.1234.567 / wecare@mcwb.com.ph / @mcwbwevalue</div>
			<div id="top-nav">
				<?php include('links.php');?>
			</div>
		</header>
		

		