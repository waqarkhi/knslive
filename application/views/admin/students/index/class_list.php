<div class="row">
	<?php foreach ($list as $li): ?>
		<div class="col-md-3">
			<div class="overview-item overview-item--c3">
				<a href="<?= base_url('admin/students/?class='.$li['class']) ?>">
				<div class="overview__inner">
					<div class="overview-box clearfix">
						<div class="icon">
							<i class="zmdi zmdi-account-o"></i>
						</div>
						<div class="text">
							<h2><?= $li['class'] ?></h2>
							<span class="text-light"><?= $li['count'] ?></span>
						</div>
					</div>
					<div class="overview-chart">
						<canvas></canvas>
					</div>
				</div>
				</a>

			</div>
		</div>
	<?php endforeach ?>
</div>
