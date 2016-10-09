<div class="col-md-3">
	
</div>
<div class="col-md-9 container_margin" >
	<div class="panel p-body">
		
		<div class="panel-heading"><h4>Announcement</h4></div>
			<div class="panel-body">
				<form class="form-horizontal" method="post" action='save_announcement'>
				<?php echo $this->session->flashdata('message') ?>
					<div class="col-md-12">
						<div class="form-group">
							<label class="col-sm-3 control-label">Title</label>
							<div class="col-sm-9">
								<input type="text" required name="title" placeholder="Enter Title" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Announcement</label>
							<div class="col-sm-9">
								<textarea name="ann" class="form-control" rows= "10" style="resize: none;" placeholder="Enter your Announcement"></textarea>
							</div>
						</div>
						<div class="pull-right">
							<button class="btn button_primary">Save</button>
							<br/>
							<br/>
						</div>
					</div>
				</form>

				<table class="table table-striped table-bordered table-hover" >
                    <thead>
                    <tr>

                        <td>Title</td>
                        <td>Announcement</td>
                        <td style="max-width: 50px">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($this->usermd->get_ann() as $key => $value) { ?>
                        <tr>
                        <td><?php echo $value['title'] ?></td>
                            <td><?php echo $value['ann']  ?></td>
                            <td style="text-align: center">
                            	<a class="a-table label label-danger" href="delete_ann/<?php echo $value['id'] ?>" onclick="return confirm('Are you sure?')">
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

