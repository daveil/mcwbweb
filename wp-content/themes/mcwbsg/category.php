<?php get_header();?>
		<div class="container" id="content">
			<?php 
				if(have_posts()):
					while(have_posts()):
						the_post();
			?>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 content">
					<div class="title">
						<?php
							$category = get_the_category()[0];
						?>
						<h3 class="pull-left"><?php echo $category->cat_name;?></h3>
						<div class="pull-right share-button btn-group">
							<button class="btn btn-default">
								SHARE &nbsp;
							</button>
						</div>
						<div class="clearfix"></div>
					</div>
					<h4><a href="<?php the_permalink()?>"><?php the_title();?></a></h4>
					<div>
						<?php the_excerpt();?>
					</div>
						
				</div>
			</div>
			<?php 
					endwhile;
				endif;
			?>
		</div>
<?php get_footer();?>

