<div class="col-md-3">
	
</div>
<div class="col-md-9 container_margin" >
	<div class="panel p-body">
		
		<div class="panel-heading"><h4>Announcement</h4></div>
			<div class="panel-body">
				 <form class="form-horizontal" action="/insert_file" method="post" enctype="multipart/form-data">
				<?php echo $this->session->flashdata('message') ?>
		        <div class="col-lg-6 col-sm-6 col-12">
		            <div class="input-group">
		                <label class="input-group-btn">
		                    <span class="btn btn-primary">
		                        Browse&hellip; <input type="file" style="display: none;" name="files" required>
		                    </span>
		                </label>
		                <input type="text" class="form-control" readonly placeholder="Click browse button to select file to upload">
		            </div>
		        </div>
		          <div class="col-lg-6">
				    <div class="input-group">
				      <input type="text" class="form-control" name="filename" placeholder="File name (reqruired)" required>
				      <span class="input-group-btn">
				        <button class="btn btn-primary" type="submit">Save&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-cloud-upload"></span></button>
				      </span>
				    </div>
				  </div>

		        <br />
		        <br />
		        </div>
			</form>
				<div class="col-md-12">
					<table class="table table-striped table-bordered table-hover" id="dataTable">
                    <thead>
                    <tr>

                        <td>Upload By</td>
                        <td>Filename</td>
                        <td style="min-width: 20%">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    	<?php foreach ($this->usermd->get_files() as $key => $value): ?>
                    		<tr>
                    		<td><?= $value['fname'] ?></td>
                    		<td><?= $value['filename'] ?></td>
                    		<td style="text-align: center">
                    			<a class="a-table label label-primary" href="/download_documents/<?php echo $value['id'] ?>" onclick="return confirm('Are you sure?')">
                            		<span class="glyphicon glyphicon-cloud-download"></span>&nbsp; Download
                            	</a>
                            	&nbsp;
                            	<?php if ($this->session->userdata('position') == 1) { ?>
	                        		<a class="a-table label label-danger" href="/delete_documents/<?php echo $value['id'] ?>" onclick="return confirm('Are you sure?')"> 
	                            		<span class="glyphicon glyphicon-trash"></span>&nbsp; Remove
	                            	</a>
                            	<?php } ?>
                            	
                    		</td>
                    		</tr>
                    	<?php endforeach ?>
                    </tbody>
                </table>
				</div>
				
			</div>
	</div>
</div>

