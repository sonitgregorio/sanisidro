<div class="col-md-3">
	
</div>
<div class="col-md-9 container_margin" >
	<div class="panel p-body">
		
		<div class="panel-heading"><h4>Announcement</h4></div>
			<div class="panel-body">
				
				<div class="col-md-12">
					<?php echo $this->session->flashdata('message') ?>
					<table class="table table-striped table-bordered table-hover" id="dataTable">
                    <thead>
                    <tr>

                        <td>Requested By</td>
                        <td>Email</td>
                        <td>Address</td>
                        <td>Description</td>
                    </tr>
                    </thead>
                    <tbody>
                    	<?php foreach ($this->usermd->getApprove() as $key => $value): ?>
                    		<tr>
                    			<td><?= $value['fullname'] ?></td>
                    			<td><?= $value['email'] ?></td>
                    			<td><?= $value['address'] ?></td>
                    			<td><?= $value['description'] ?></td>
                    		</tr>
                    	<?php endforeach ?>
                    </tbody>
                </table>
				</div>
				
			</div>
	</div>
</div>

