<section id="doctor-banner" class="full-banner section">
	<img src="img/medium/feedback-banner.jpg" alt="" class="img-responsive" width="100%" />
</section>
<section class="container text-center"> 
	<h2>We <b><i>value</i></b> your feedback.</h2>
	<p>Help us improve our services by giving suggestions and comments.</p>
	<p>Email us at <i>mwcb.marketing@gmail.com</i>.</p>
	<?php if(true):?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form class="form-vertical text-left">
				<div class="form-group col-md-12">
					<label>NAME</label>
					<input type="text" class="form-control" placeholder="Your name"/>
				</div>
				<div class="form-group col-md-6">
					<label>CONTACT NO</label>
					<input type="text" class="form-control"  placeholder="Mobile/Landline"/>
				</div>
				<div class="form-group col-md-6">
					<label>EMAIL</label>
					<input type="text" class="form-control"  placeholder="Email (optional)"/>
				</div>
				<div class="form-group col-md-12">
					<label>FEEDBACK</label>
					<textarea class="form-control" rows="10"></textarea>
				</div>
				<div class="text-center">
					<button class="btn btn-default btn-secondary" type="cancel">CANCEL</button>
					<button class="btn btn-primary" type="submit">SUBMIT</button>
				</div>
			</form>
		</div>
	</div>
	<?php endif;?>
</section>