	<footer>
		
		<div id="footer-links">
			<div>M<span>edical</span> C<span>enter</span> W<span>estern</span> B<span>atangas</span></div>
			<p>"We value your health"</p>
			<div class="text-center" id="social-media">
				<div>Connect</div>
				<div>
					<a href="#" title="Facebook"><img src="img/facebook.gif" alt="Facebook" /></a>
					<a href="#" title="Facebook"><img src="img/instagram.png" alt="Instagram" /></a>
				</div>
			</div>
			<span id="footer-nav">
				<?php include('links.php');?>
			</span>
		</div>
		<div id="annotation"> 
			<div class="row">
				<div class="col-md-6 text-left">Dave A Dev Web Solutions & Dream Wolves Multimedia Studios</div>
				<div class="col-md-6 text-right">Copyright © 2016 MCWB. All rights reserved.</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="lib/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="lib/holderjs/holder.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
	<script type="text/javascript" src="js/script.js<?php echo '?a='.substr(md5(rand()),0,3)?>"></script>
	</body>
</html>