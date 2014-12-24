<div class="container">
	
	<div class="row">
	<?php if($error == 1){ ?>
		<h2 class="text-center">You've entered wrong data.</h2>
	<?php }else{?>
	<h2 class="text-center">Welcome to Codeigniter Journal application.</h2>
	<?php } ?>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 col-md-offset-3 col-lg-offset-3">
			
			<form action="<?=base_url();?>users/login" method="post" class="form">
			<div class="form-group">
			<input type="text" class="form-control" id="uname" name="uname" placeholder="User Name" />
			<input type="password" class="form-control" id="pass" name="pass" placeholder="Password" />
			</div>
			<button type="submit" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center btn btn-info">Enter</button>
			</form>
			<h4><a href="<?php base_url();?>users/new_user" class="btn btn-success">Create New Account</a></h4>
		</div>
	</div>
</div>



