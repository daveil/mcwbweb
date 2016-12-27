<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Sets initial viewport load and disables zooming  -->
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="lib/Bootflat/js/php5shiv.js"></script>
		<script type="text/javascript" src="lib/Bootflat/js/respond.min.js"></script>
		<![endif]-->
		<?php wp_head();?>
	</head>
	<body>
		<header id="header" class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<?php blog_logo(array('class'=>'pull-left')); ?>
					<h1>M<span>edical</span><br/>
						C<span>enter</span><br/>
						W<span>estern</span><br/>
						B<span>atangas</span>
					</h1>
					<div class="clearfix"></div>
					
				</div>
				<div class="col-md-8"> 
				<div id="contacts" class="pull-right text-right">
				<b>PH:</b> <?php echo __CONTACT_NO;?> / <b>EM:</b> <?php echo __EMAIL;?><br /> <b>FB:</b> <?php echo __FACEBOOK_ID;?> / <b>IG</b>: <?php echo __INSTAGRAM_ID;?>
			</div>
					<nav id="top-nav">
						<?php
							$args = array('menu'=>'Header','menu_class'=>'nav navbar-nav');
							wp_nav_menu($args);
						  ?>
					</nav>
				</div>
			</div>
			
		</header>
		<?php if(false):?>
		<div class="container" id="header">
			<div class="row">
				<div class="col-md-9" id="brand">
					<div id="logo">
						<a href="<?php echo __HOME_URL;?>">
							<?php blog_logo(array('width'=>100,'height'=>100)); ?>
						</a>
						<!--<img src="img/logo.jpg" height="100">-->
					</div>
					<div id="company">
						<h1><?php echo __TITLE;?></h1>
						<p>" <?php echo __DESC;?> "</p>
					</div>
				</div>
				<div class="col-md-3" id="contact-info">
					<span>CONTACT US:</span>
					<div><?php echo __CONTACT_NO;?></div>
					<div><?php echo __EMAIL;?></div>
				</div>
			</div>
		</div>
		<div class="container-fluid" id="main-nav">
			<nav class="navbar navbar-default">
			  <div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand hide" href="#">Brand</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <?php
					$args = array('menu'=>'Header','menu_class'=>'nav navbar-nav');
					wp_nav_menu($args);
				  ?>
				  <form class="navbar-form navbar-right" role="search">
                        <div class="form-search search-only">
                          <i class="search-icon glyphicon glyphicon-search"></i>
                          <input type="text" class="form-control search-query" placeholder="Search">
                        </div>
                      </form>
				  
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
		<?php endif;?>