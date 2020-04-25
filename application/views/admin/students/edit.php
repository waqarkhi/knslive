<div class="float-left">
	<h2><?= $page['title'] ?></h2>
</div>
<div class="float-right">
	<a href="<?= base_url('admin/students'); ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
</div>
<div class="clearfix"></div>

<div class="card mt-4">
	<form method="post" class="card-body">
		<div class="row">
			<div class="col-md-6"><div data-fg="fullname|Full Name|text|<?= $student['fullname'] ?>"></div></div>
			<div class="col-md-6"><div data-fg="phone|Phone/Mobile|text|<?= $student['phone'] ?>"></div></div>
			<div class="col-md-6">
				<label>Email Address</label>
				<div class="form-control"><?= $student['email'] ?></div>
			</div>
			<div class="col-md-6"><div data-fg="password|Password|text|<?= $student['password'] ?>"></div></div>
			<div class="col-md-6"><div data-fg="class|Class|text|<?= $student['class'] ?>"></div></div>
			<div class="col-md-12">
				<div class="custom-control custom-checkbox">
					<input <?= ($student['status'] == 'active')?'checked':''; ?> type="checkbox" class="custom-control-input" id="status" value="active" name="status">
					<label class="custom-control-label" for="status">Allow Zoom Meeting Access</label>
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</div>
	</form>
</div>