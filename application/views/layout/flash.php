<?php if (@$_SESSION['danger']): ?>
	<div class="alert alert-danger alert-dismissible fade show">
	    <button type="button" class="close" data-dismiss="alert">&times;</button> <?= $_SESSION['danger'] ?>
	</div>
<?php endif ?>

<?php if (@$_SESSION['success']): ?>
	<div class="alert alert-success alert-dismissible fade show">
	    <button type="button" class="close" data-dismiss="alert">&times;</button> <?= $_SESSION['success'] ?>
	</div>
<?php endif ?>