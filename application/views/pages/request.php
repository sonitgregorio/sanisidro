
<div class="col-md-12" style="margin-top: -15px;">
	<div class="panel p-body">
		
		<div class="panel-heading"><h4>Request</h4></div>
			<div class="panel-body">
				<form class="form-horizontal" method="post" action='/insert_request' enctype="multipart/form-data">
					<?php echo $this->session->flashdata('message') ?>
					<div class="form-group">
						<label class="col-sm-2 control-label">Full Name</label>
						<div class="col-sm-10">
							<input type="text" name="fname" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Address</label>
						<div class="col-sm-10">
							<input type="text" name="address" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Contact</label>
						<div class="col-sm-10">
							<input type="text" name="contact" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Email Address</label>
						<div class="col-sm-10">
							<input type="text" name="email" class="form-control">
						</div>
					</div>	
					<div class="form-group">
						<label class="col-sm-2 control-label">Attach File</label>
						<div class="col-sm-10">
							 <div class="input-group">
				                <label class="input-group-btn">
				                    <span class="btn btn-primary">
				                        Browse&hellip; <input type="file" style="display: none;" name="files">
				                    </span>
				                </label>
		                <input type="text" class="form-control" readonly placeholder="Attach the file of your request">
		            </div>
						</div>
					</div>	
					<div class="form-group">
						<label class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">
							<textarea rows="10" class="form-control" name="description"></textarea>
						</div>
					</div>
					<div class="pull-right">
						<button class="btn btn-primary" type="submit">Submit Request</button>
					</div>
				</form>

			</div>
	</div>
</div>

