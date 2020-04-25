<div class="container mt-5 pt-5">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body text-center p-5">
					<img src="<?= base_url(); ?>public/images/icon/logo.png" class="img-fluid mb-4">
					<h2>Dear <?= $student['fullname']; ?></h2>
					<div>
						<p>We welcome you to the class <strong><?= $meeting['class'] ?></strong></p>
						<hr>
						<strong>Description</strong>
						<p><?= $meeting['description'] ?></p>
						<div class="btns mt-4">
							<?php if ($student['status'] =='active'): ?>
								<form method="post" style="display: inline-block;">
									<button type="submit" name="id" value="<?= $meeting['id'] ?>" class="btn btn-primary">Start Class</button>
								</form>
							<?php else: ?>
								<span class="bg-danger text-light p-2">You can not Take the Class</span>
							<?php endif ?>
							<a href="<?= base_url('logout'); ?>" class="btn btn-outline-primary">Logout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>