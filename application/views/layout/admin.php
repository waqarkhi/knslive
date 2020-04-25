<?= $head; ?>
<div class="page-wrapper">
<?= $header; ?>	
<?= $sidebar; ?>
<div class="page-container">
<?= $topbar; ?>
<div class="main-content">
	<div class="section__content section__content--p30">
	<div class="container-fluid">
		<?php $this->load->view($page['slug']); ?>
	</div>
</div>
	</div>
</div>
<?= $footer; ?>
</div>
