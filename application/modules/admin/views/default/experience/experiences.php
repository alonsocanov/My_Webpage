



<div id="page-wrapper">


	<div class="row">
		<div class="col-lg-12">
			<div class="page-header users-header">
				<h2>
					Experiences
					<a  href="<?= base_url('admin/experiences/create') ?>" class="btn btn-success">Add a new</a>
				</h2>
			</div>
		</div>
		<!-- /.col-lg-12 -->
	</div>


	<div class="row">
		 <?php if ($this->session->flashdata('message')): ?>
		<div class="col-lg-12 col-md-12">
			<div class="alert alert-info alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?=$this->session->flashdata('message')?>
			</div>
		</div>
		<?php endif; ?>

		<!-- Total Experiences -->
		<div class="col-lg-2 col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-list-ol fa-3x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><?= $total_experiences ?></div>
							<div>Total Experiences</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Experiences listing
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="dataTable_wrapper">
						<table class="table table-striped table-bordered table-hover" id="dataTables-main">
							<thead>
								<tr>
									<th>Company</th>
									<th>Position</th>
									<th>Priority</th>
									<th>Last Update</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php if (count($experiences)): ?>
									<?php foreach ($experiences as $key => $list): ?>
										<tr class="odd gradeX">
											<td><?=$list['company']?></td>
											<td><?=$list['position']?></td>
											<td><?=$priorities[$list['priority']]?></td>
											<td><?=$list['last_update']?></td>
											<td>
												<a href="<?= base_url('admin/experiences/edit/'.$list['id']) ?>" class="btn btn-info">edit</a>
												<a href="<?= base_url('admin/experiences/delete/'.$list['id']) ?>" class="btn btn-danger">delete</a>
											</td>
										</tr>
									<?php endforeach; ?>
								<?php else: ?>
									<tr class="even gradeC">
										<td>No data</td>
										<td>No data</td>
										<td>No data</td>
										<td>No data</td>
										<td>
											<a  href="<?= base_url('admin/experiences/create') ?>" class="btn btn-success">Add a new</a>
										</td>
									</tr>
								<?php endif; ?>
							</tbody>
							<tfooter>
								<tr>
									<th>Company</th>
									<th>Position</th>
									<th>Priority</th>
									<th>Last Update</th>
									<th>Action</th>
								</tr>
							</tfooter>
						</table>
					</div>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
</div>
</div>
<!-- /#page-wrapper -->
