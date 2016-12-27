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
						
						<h3 class="pull-left">
							<?php the_title();?>
						</h3>
						<div class="pull-right share-button btn-group">
							<button class="btn btn-default">
								SHARE &nbsp;
							<button class="btn btn-default">
								COMMENT
							</button>
							<?php edit_post_link( 'Edit','', '',get_the_ID(),'btn btn-default' );?>
						</div>
						<div class="clearfix"></div>
					</div>
					<div style="padding-top:15px;">
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

