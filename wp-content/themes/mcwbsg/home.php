<?php get_header();?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php 
						$update = new WP_Query('category_name=updates&showposts=1'); 
						while ($update->have_posts()) : 
							$update->the_post(); 
					?>
					<div class="jumbotron">
					  <div class="jumbotron-photo">
						<?php the_post_thumbnail('full',array('class'=>'img-responsive'));?>
					  </div>
					  <div class="jumbotron-contents">
						<h1><?php the_title();?></h1>
						<div id="main-update">
							<?php the_excerpt();?>
						</div>
						<a href="<?php the_permalink() ?>" class="btn btn-warning">Read More</a>
						<div class="clearfix"></div>
					  </div>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6" id="doctors-corner">
					<h3>Doctor's Corner</h3>
					<?php 
						$doc_corner = new WP_Query('category_name=doctors-corner&showposts=1'); 
						while ($doc_corner->have_posts()) : 
							$doc_corner->the_post(); 
					?>
					<div class="jumbotron">
					  <div class="jumbotron-photo">
						<?php the_post_thumbnail('full',array('class'=>'img-responsive'));?>
					
					  </div>
					  <div class="jumbotron-contents">
						
						<h2><?php the_title();?></h2>
						<p><?php the_excerpt();?></p>
						<a href="<?php the_permalink() ?>" class="btn btn-warning pull-right">Learn More</a>
						<div class="clearfix"></div>
					   </div>
					</div>
					<?php endwhile; ?>
				</div>
				<div class="col-md-6" id="widgetized-area">

				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widgetized-area')) : else : ?>

				<div class="pre-widget">
					<p><strong>Widgetized Area</strong></p>
					<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
				</div>

				<?php endif; ?>

				</div>
				
			</div>
		</div>
		<div class="container" id="connect">
			<div class="row">
				<div class="col-md-6">
					<h3>Community</h3>
					<?php 
						$community = new WP_Query('category_name=community&showposts=3'); 
						$ctr = 1;
						while ($community->have_posts()) : 
							$community->the_post(); 
							if($ctr==1):
								the_post_thumbnail('full',array('class'=>'thumb img-responsive'));
								echo '<div class="list-group">';
							endif;
					?>
						
					  <a href="<?php the_permalink();?>" class="list-group-item">
						<h4 class="list-group-item-heading"><?php the_title();?></h4>
						<p class="list-group-item-text"><?php the_excerpt();?></p>
					  </a>
					<?php
							echo '</div>';
						endwhile;
					?>
				</div>
				<div class="col-md-6" id="social-media">
					<h3>Social Media</h3>
					<div class=" text-center">
					<iframe src="https://www.facebook.com/plugins/page.php?href=<?php echo urlencode(__FACEBOOK);?>&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=193892597288597" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
				</div>
			</div>
		</div>
<?php get_footer();?>

