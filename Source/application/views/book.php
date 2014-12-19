<?php if ($this->session->userdata('user_name')) { ?>
	<p><a href="<?php echo base_url().'users/logout' ?>" class="btn btn-warning">Logout</a></p>
<?php 	
} else { 
	redirect(base_url().'users');
} ?>
<div class="container">
<div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h3 class="text-center">Welcome to Codeigniter Journal Web Application (CJWA)</h3></div>
<div class="row">
	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
		
		<form action="<?=base_url();?>entrys/new_entry" method="post">
		<div class="row margin-box">
				<div class="form-group">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><input type="text" class="form-control" id="vno" name="vno" placeholder="Voucher No" /></div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><input type="text" class="form-control" id="cno" name="cno" placeholder="Chk No" /></div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><input type="text" class="form-control" id="rno" name="rno" placeholder="Recipt No" /></div>
				</div>
			</div>
			<div class="row margin-box">
				<div class="form-group">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><input type="text" id="dracc" name="dracc" class="form-control" placeholder="Dr Account Name" /></div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><input type="text" id="dramnt" name="dramnt" class="form-control" placeholder="Dr Amount" /></div>
				</div>
			</div>
			<div class="row margin-box">
				<div class="form-group">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><input type="text" id="cracc" name="cracc" class="form-control" placeholder="Cr Account Name" /></div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><input type="text" id="cramnt" name="cramnt" class="form-control" placeholder="Cr Amount" /></div>
				</div>
			</div>
			
				<button type="submit" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center btn btn-info">Submit</button>
		</form>
	</div>
	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 bs-callout bs-callout-info">
		<h4 class="text-center">Recent Journal Entries</h4>
		<?php
			if (empty($transection)) {
		?>
			<p>There is no entry at this moment.</p>
			
		<?php
			}else{
				foreach ($transection as $row) {		
		?>
			<h4><?= $row['Account_Name'] ;?></h4><hr>	
		<?php 
				}
			}
		?>	
	</div>
</div>

</div>
