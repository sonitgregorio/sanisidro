
<div class="col-md-3"></div>
<div class="col-md-9 container_margin">
	<div class="panel p-body">
		
		<div class="panel-heading"><h4>Add Employee</h4></div>
			<div class="panel-body">
				<form class="form-horizontal" method="post" action="insert_user">
				<input type="hidden" name="pid" >
				<?php echo $this->session->flashdata('message'); ?>
					<div class="col-md-6">
						<div class="form-group">
							<label class="col-sm-3 control-label">First Name</label>
							<div class="col-sm-9" style="padding:0">
								<input type="text" class="form-control" name="firstname" placeholder="e.g (Juan)" required>
							</div>
						</div>	
						<div class="form-group">
							<label class="col-sm-3 control-label">Address</label>
							<div class="col-sm-9" style="padding:0">
								<input type="text" class="form-control" name="address" placeholder="e.g (3RD Door Solon Compound, Barangay San Antonio, Jakosalem St.)" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Contact No.</label>
							<div class="col-sm-9" style="padding:0">
								<input type="text" class="form-control" name="contact" maxlength="11" placeholder="e.g (09172580624)" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Position</label>
							<div class="col-sm-9" style="padding:0">
								<select class="form-control" name="position" id="pos">
									<option>Select Position</option>
									<?php foreach ($this->api->get_position() as $value): ?>
										<option value="<?= $value->id; ?>"><?= $value->description; ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="col-sm-3 control-label">Last Name</label>
							<div class="col-sm-9" style="padding:0">
								<input type="text" class="form-control" name="lastname" placeholder="e.g (Tamad)" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Civil Status</label>
							<div class="col-sm-9" style="padding:0">
								<select class="form-control" name="status">
									<option>Single</option>
									<option>Maried</option>
									<option>Divorced</option>
									<option>Separated</option>
									<option>Widowed</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Gender</label>
							<div class="col-sm-9" style="padding:0">
								<select class="form-control" name="gender">
									<option>Male</option>
									<option>Femal</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Email Address</label>
							<div class="col-sm-9" style="padding:0">
								<input type="text" class="form-control" name="email_add">
							</div>
						</div>			
					</div>
					<div class="col-md-12 creds">
					<div class="panel" style="box-shadow: 0px 0px 10px gray">
						<div class="panel-heading"><h4>Credentials</h4></div>
						<div class="panel-body">
							<div class="form-group">
								<label class="col-sm-3 control-label">Username</label>
								<div class="col-sm-8" style="padding:0">
									<input type="text" class="form-control" name="username">
								</div>
							</div>	
							<div class="form-group">
								<label class="col-sm-3 control-label">Password</label>
								<div class="col-sm-8" style="padding:0">
									<input type="password" class="form-control" name="password">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Confirm Password</label>
								<div class="col-sm-8" style="padding:0">
									<input type="password" class="form-control" name="cpassword">
								</div>
							</div>
						</div>
					</div>	
						
					</div>
					
						<div class="pull-right">
							<a href="/add_employee" type="submit" class="btn btn-primary">Cancel</a>
							<button type="submit" class="btn button_primary">Save</button>
							<br />
							<br />
						</div>

				</form>


				<div class="table table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTable">
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Contact</td>
                        <td>Gender</td>
                        <td>Position</td>
                        <td style="max-width: 100px">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($this->usermd->getUsers() as $key => $value) { ?>
                        <tr>
                            <td><?php echo $value['firstname'] . ' ' . $value['lastname']  ?></td>
                            <td><?php echo $value['contact'] ?></td>
                            <td><?php echo $value['gender'] ?></td>
                            <td><?php echo $value['description'] ?></td>
                            <td style="text-align: center">
                            	<a class="a-table label label-primary edit_emp" href="#" data-param="<?php echo $value['id'] ?>">
                            		<span class="glyphicon glyphicon-pencil"></span>&nbsp; Edit
                            	</a>&nbsp;
                            	<a class="a-table label label-danger" href="/delete_user/<?php echo $value['id'] ?>" onclick="return confirm('Are you sure?')">
                            		<span class="glyphicon glyphicon-trash"></span>&nbsp; Delete
                            	</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
				</div>



			</div>
	</div>
</div>

