
<div class="col-md-12" style="margin-top: -15px;">
	<div class="panel p-body">
		
		<div class="panel-heading"><h4>Announcement</h4></div>
			<div class="panel-body">
			
				<?php foreach ($this->usermd->get_ann() as $key => $value) { ?>
					<div class="panel" style="box-shadow: 0px 0px 20px gray">
						<div class="panel-heading">
							<h4><?php echo $value['title'] ?> <span class="pull-right"><?php echo $value['date_ann'] ?></span></h4>
						</div>
						<div class="panel-body">
							<p><?php echo $value['ann'] ?></p>
						</div>
					</div>

				<?php } ?>
			</div>
	</div>
</div>

