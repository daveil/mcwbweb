
		<footer>
		<div id="footer-links">
			<div>M<span>edical</span> C<span>enter</span> W<span>estern</span> B<span>atangas</span></div>
			<p>"We value your health"</p>
			<div class="text-center" id="social-media">
				<div>Connect</div>
				<div>
					<a href="<?php echo __FACEBOOK;?>" title="Facebook" target="_blank">
						<img src="<?php echo TMPLT_URI;?>/img/facebook.gif" alt="Facebook" />
					</a>
					<a href="<?php echo __INSTAGRAM;?>" title="Instagram" target="_blank">
						<img src="<?php echo TMPLT_URI;?>/img/instagram.png" alt="Instagram" />
					</a>
				</div>
			</div>
			<span id="footer-nav">
				<?php
					$args = array('menu'=>'Footer');
					wp_nav_menu_footer($args);
				  ?>
			</span>
		</div>
		<div id="annotation"> 
			<div class="row">
				<div class="col-md-6 text-left">Dave A Dev Web Solutions & Dream Wolves Multimedia Studios</div>
				<div class="col-md-6 text-right">Copyright © 2016 MCWB. All rights reserved.</div>
			</div>
		</div>
	</footer>
	<?php wp_footer();?>
	</body>
</html>
<?php if(false):?>
		<div class="footer">
		  <div class="container">
			<div class="clearfix">
			  <div class="footer-logo" id="footer-logo">
				<a href="<?php echo __HOME_URL;?>">
					<?php echo __TITLE;?>
				</a>
				<p><?php echo __DESC;?></p>
			  </div>
			   <?php
					$args = array('menu'=>'Footer');
					wp_nav_menu_footer($args);
				  ?>
			</div>
			<div class="footer-copyright text-center">Copyright © 2016 MCWB.All rights reserved.</div>
		  </div>
		</div>
	</body>
</html>
<?php endif;?>