<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h2>
				Page Items
				<a  href="<?= base_url('admin/front_items') ?>" class="btn btn-warning">Go back to Front Items listing</a>
			</h2>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				  <?php if (empty($front_item->id)): ?>
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
							<form role="form" method="POST" action="<?=base_url('admin/front_items/edit/'.$front_item->id)?>">
								<div class="form-group">
									<label>Title</label>
									<input class="form-control" placeholder="Enter front_item title" id="title"  value="<?=$front_item->title?>" name="title">
								</div>
								<div class="form-group">
									<label>Description</label>
									<input class="form-control" placeholder="Enter description" id="description" name="description"  value="<?=$front_item->description?>">
								</div>
								<div class="form-group">
									<label>URL</label>
									<input class="form-control" placeholder="Enter url" id="url" name="url"  value="<?=$front_item->url?>">
								</div>
								<div class="form-group">
									<label>Font Awesome Icon</label>
									<input class="form-control" placeholder="Enter faicon" id="faicon" name="faicon"  value="<?=$front_item->faicon?>">
								</div>


								<div class="form-group">
									<label>Kind</label>


<!-- 									<input class="form-control" placeholder="Enter kind" id="kind" name="kind"  value="<?=$front_item->kind?>"> -->

									<select class="form-control" name="kind" id="kind">
										<?php foreach ($kinds as $key => $list): ?>
											<option value="<?=$key?>" <?= ($front_item->kind == $key) ? 'selected' : '';?> ><?=$list?></option>

										<?php endforeach; ?>
									</select>
								</div>


								<div class="form-group">
									<label>Image Name</label>
									<input class="form-control" placeholder="Enter image_name" id="image_name" name="image_name"  value="<?=$front_item->image_name?>">
								</div>

								<a  href="<?= base_url('admin/front_items/delete/'.$front_item->id) ?>" class="btn btn-danger">Delete</a>
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
