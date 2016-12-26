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