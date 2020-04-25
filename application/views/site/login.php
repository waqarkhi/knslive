<div class="container mt-5 pt-5">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h2 class="text-center mb-4"><?= $page['title'] ?></h2>
					<?php $this->load->view('layout/flash'); ?>
					<form method="post">
						<div data-fg="email|Email Address|email"></div>
						<div data-fg="password|Password|password"></div>
						<button class="btn btn-dark btn-block" type="submit">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>