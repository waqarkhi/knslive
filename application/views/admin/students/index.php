<?php 
$path = 'admin/students/index/';
?>
<div class="float-left">
	<h2><?= $page['title'] ?></h2>
</div>
<div class="float-right">
	<a href="<?= base_url('admin/students/add'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
</div>
<div class="clearfix"></div>
<div class="mt-4">
<?php if (!@$_GET['class']): ?>
	<?php $this->load->view($path.'class_list') ?>
<?php else: ?>
	<?php $this->load->view($path.'students') ?>
<?php endif ?>
	
</div>
