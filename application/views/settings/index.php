<h2><?= $page['title'] ?></h2>
<div class="mt-3 mb-3">
<a href="<?= base_url('settings/add'); ?>" class="au-btn au-btn-icon au-btn--blue"><i class="zmdi zmdi-plus"></i> Add New</a>
</div>
<ul class="list-group">
<?php foreach ($settings as $set): ?>
	<li class="list-group-item">
		<a href="<?= base_url('settings/edit/'.$set['id']); ?>"><?= $set['name'] ?></a>
		<div class="float-right">
			<a href="<?= base_url('settings/delete/'.$set['id']); ?>" class="btn btn-danger btn-sm">
				<i class="fa fa-trash"></i> Delete
			</a>
		</div>
		<div class="clearfix"></div>
	</li>
<?php endforeach ?>
</ul>