<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Sets initial viewport load and disables zooming  -->
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="icon" type="image/png" href="img/favicon.png">
		<!-- site css -->
		<link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.css" />
		<link rel="stylesheet" href="css/mcwb.css?<?php echo md5(rand());?>" />
		<link rel="stylesheet" href="css/<?php echo $page.'.css?'.md5(rand());?>" />
		<link rel="stylesheet" href="fonts/stylesheet.css?<?php echo md5(rand());?>" />
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="lib/Bootflat/js/php5shiv.js"></script>
		<script type="text/javascript" src="lib/Bootflat/js/respond.min.js"></script>
		<![endif]-->
		<title>Medical Center Western Batangas <?php echo ' - '.($page=='home'?'Homepage':$slug);?></title>
	</head>
	<body>
		<header id="header" class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<img  class="pull-left" src="img/logo.png" alt="MCWB Logo" />
					<h1>M<span>edical</span><br/>
						C<span>enter</span><br/>
						W<span>estern</span><br/>
						B<span>atangas</span>
					</h1>
					<div class="clearfix"></div>
					
				</div>
				<div class="col-md-8"> 
				<div id="contacts" class="pull-right text-right">
				<b>PH:</b> +63.916.2888.380 / <b>EM:</b> mcwb.marketing@gmail.com<br /> <b>FB:</b> medicalcenterwesternbatangas / <b>IG</b>: mcwbwevalue
			</div>
					<nav id="top-nav">
						<?php include('links.php');?>
					</nav>
				</div>
			</div>
			
		</header>
		

		