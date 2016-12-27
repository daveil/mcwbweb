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
							$cat_url = home_url('/category/'.$category->slug);
						?>
						<h3 class="pull-left">
							<a href="<?php echo $cat_url;?>">
								<?php echo $category->cat_name;?>
							</a>
						</h3>
						<div class="pull-right share-button btn-group">
							<button class="btn btn-default">
								SHARE &nbsp;
							</button>
							<button class="btn btn-default">
								COMMENT
							</button>
							<?php edit_post_link( 'Edit','', '',get_the_ID(),'btn btn-default' );?>
						</div>
						<div class="clearfix"></div>
					</div>
					<h4><?php the_title();?></h4>
					<div>
						<?php the_content();?>
					</div>
						
				</div>
			</div>
			<?php 
					endwhile;
				endif;
			?>
		</div>
<?php get_footer();?>

