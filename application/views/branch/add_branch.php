<div class="col-md-3"></div>
	<div class="col-md-9 container_margin">
		<div class="panel p-body">
		<div class="panel-heading search">
			<div class="col-md-6">						
			
				<h4 style="font-size:25px">Branch Management</h4>						
			</div>
			<div class="col-md-6">
				<div class="pull-right">
					<button type="button" id="add_branch" class="btn btn-primary btn-lg" data-toggle="modal">
					Add Branch
					</button>
				</div>
				</div>
		
		</div>
		<div class="panel-body">
		<?php echo $this->session->flashdata('message') ?>
		<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<tr>
						<th>Branch Address</th>
						<th>Action</th>
					</tr>
					<?php foreach ($this->branchmd->get_branches() as $key): ?>
					 	<tr>
						<td><?= $key->description; ?></td>
						<td><a class="a-table label label-info" href="index.php?page=editCHEDScholar">Edit<span class="glyphicon glyphicon-pencil"></span></a>
							<a class="a-table label label-danger" href="index.php?page=deleteSchool">Delete <span class="glyphicon glyphicon-trash"></span></a>
						</td>
						</tr>
					 <?php endforeach ?> 
					
				</table>
			</div>
		</div>
		</div>
	</div>
</div>



<!-- Modal -->
<div class="modal fade show_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header panel-heading">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Branch</h4>
      </div>
	      <form class="form-horizontal" method="post" action="/save_branch">
		      <div class="modal-body" style="background-color:#FFFFC5">
		      	
		      		<div class="form-group">
		      			<label class="col-sm-3 control-label">Branch Address</label>
		      			<div class="col-sm-9">
		      				<input type="text" class="form-control" name="branch_name" placeholder="eg (Talamban)">
		      			</div>
		      		</div>

		      		<!-- <div class="form-group">
		      			<label class="col-sm-3 control-label">Supervisor</label>
		      			<div class="col-sm-9">
		      				<select class="form-control">
		      					<?php foreach ($this->branchmd->get_employee(2) as $key => $value): ?>
		      						<option><?= $value['firstname'] . ' ' . $value['lastname'] ?></option>
		      					<?php endforeach ?>
		      				</select>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<label class="col-sm-3 control-label">Manager</label>
		      			<div class="col-sm-9">
		      				<select class="form-control">
		      					<?php foreach ($this->branchmd->get_employee(1) as $key => $value): ?>
		      						<option><?= $value['firstname'] . ' ' . $value['lastname'] ?></option>
		      					<?php endforeach ?>
		      				</select>
		      			</div>
		      		</div> -->
		      </div>
		      <div class="modal-footer" style="background-color:#FFFFC5">
		        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save</button>
		      </div>

	      	</form>
    </div>
  </div>
</div>