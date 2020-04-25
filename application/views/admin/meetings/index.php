<?php 
$path = 'admin/meetings/index/';
?>
<div class="float-left">
	<h2><?= $page['title'] ?></h2>
</div>
<div class="float-right">
	<a href="<?= base_url('admin/meetings/add'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
</div>
<div class="clearfix"></div>

<div class="card mt-4">
	<div class="card-body">
		<div class="table-responsive">
			
		<table class="table">
			<thead>
				<tr>
					<th>Class</th>
					<th>Meeting ID</th>
					<th>Password</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($meetings as $m): ?>
					<tr>
						<td><?= $m['class'] ?></td>
						<td><?= $m['meeting_id'] ?></td>
						<td><?= $m['password'] ?></td>
						<td>
							<a href="<?= base_url('admin/meetings/edit/'.$m['id']); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
							<a href="<?= base_url('admin/meetings/delete/'.$m['id']); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		</div>
	</div>
</div>