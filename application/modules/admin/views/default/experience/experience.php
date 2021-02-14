<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h2>
				Experience
				<a  href="<?= base_url('admin/experiences') ?>" class="btn btn-warning">Go back to experiences listing</a>
			</h2>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				  <?php if (empty($experience->id)): ?>
					Create Page Item
				  <?php else: ?>
					Update Page Item
				  <?php endif; ?>
				</div>
				<div class="panel-body">
					<div class="row">
						<?php if ($this->session->flashdata('message')): ?>
						<div class="col-lg-12 col-md-12">
							<div class="alert alert-info alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<?=$this->session->flashdata('message')?>
							</div>
						</div>
						<?php endif; ?>
						<div class="col-lg-6">
							<form role="form" method="POST" action="<?=base_url('admin/experiences/edit/'.$experience->id)?>">
								<div class="form-group">
									<label>Company</label>
									<input class="form-control" placeholder="Enter company" id="company"  value="<?=$experience->company?>" name="company">
								</div>
								<div class="form-group">
									<label>Position</label>
									<input class="form-control" placeholder="Enter position" id="position" name="position"  value="<?=$experience->position?>">
								</div>

								<div class="form-group">
									<label>Location</label>
									<input class="form-control" placeholder="Enter location" id="location" name="location"  value="<?=$experience->location?>">
								</div>

								<div class="form-group">
									<label>Priority</label>
									<select class="form-control" name="priority" id="priority">
										<?php foreach ($priorities as $key => $list): ?>
											<option value="<?=$key?>" <?= ($experience->priority == $key) ? 'selected' : '';?> ><?=$list?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label>Logo</label>
									<input class="form-control" placeholder="Upload Company's Logo" id="logo" name="logo" value="<?=$experience->logo?>">
								</div>
								<div class="form-group">
									<label>Start date</label>
									<input class="form-control" placeholder="Enter start date" id="start_date" name="start_date"  value="<?=$experience->start_date?>">
								</div>
								<div class="form-group">
									<label>End date</label>
									<input class="form-control" placeholder="Enter end date" id="end_date" name="end_date"  value="<?=$experience->end_date?>">
								</div>

								<div class="form-group">
								<label>Description</label>
								<textarea class="form-control" id="content" name="content" placeholder="Enter content" rows="20" style="max-width: 100%;"><?=$experience->message?></textarea>
							</div>


								<a  href="<?= base_url('admin/experiences/delete/'.$experience->id) ?>" class="btn btn-danger">Delete</a>
								<button type="submit" class="btn btn-primary pull-right">Save</button>

							</form>
						</div>
					</div>
					<!-- /.row (nested) -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
</div>
<!-- /#page-wrapper -->

<script>

	var callback = function(){
	  // Handler when the DOM is fully loaded
	  $('#content').summernote();
	};

	if (
	    document.readyState === "complete" ||
	    (document.readyState !== "loading" && !document.documentElement.doScroll)
	) {
	  callback();
	} else {
	  	document.addEventListener("DOMContentLoaded", callback);
	}
</script>
