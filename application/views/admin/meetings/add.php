<div class="float-left">
	<h2><?= $page['title'] ?></h2>
</div>
<div class="float-right">
	<a href="<?= base_url('admin/meetings'); ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
</div>
<div class="clearfix"></div>

<div class="card mt-4">
	<form method="post" class="card-body">
		<div class="row">
			<div class="col-md-4"><div data-fg="meeting_id|Zoom Meeting ID|number"></div></div>
			<div class="col-md-4"><div data-fg="password|Meeting Password|text"></div></div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="class">Class</label>
					<select class="form-control" name="class">
						<?php foreach ($classes as $c): ?>
							<option value="<?= $c['class']; ?>"><?= $c['class']; ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
			<div class="col-md-6"><div data-fg="api|API Key|text"></div></div>
			<div class="col-md-6"><div data-fg="secret|API Secret|text"></div></div>
			<div class="col-md-12">
				<div class="form-group">
					<label for="description"></label>
					<textarea name="description" id="description" class="form-control" rows="7"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</div>