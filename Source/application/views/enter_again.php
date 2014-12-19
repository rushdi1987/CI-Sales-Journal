<div class="container">
	
	<div class="row">
	<h2 class="center">Account Created Successfully. Please Login.</h2>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			
			<form action="<?=base_url();?>users/login" method="post" class="form">
			<div class="form-group">
			<input type="text" class="form-control" id="uname" name="uname" placeholder="User Name" />
			<input type="password" class="form-control" id="pass" name="pass" placeholder="Password" />
			</div>
			<button type="submit" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center btn btn-info">Enter</button>
			</form>
			
		</div>
	</div>
</div>