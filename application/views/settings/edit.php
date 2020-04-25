<?php 
$setting['body'] = str_replace(
	'<textarea name="body" rows="7" class="form-control">', 
	'[textarea name="body" rows="7" class="form-control"]', 
	$setting['body']);
$setting['body'] = str_replace('</textarea>', '[textarea]', $setting['body']);
?>
<form method="post">
	<input type="hidden" name="id" value="<?= $setting['id'] ?>">
	<div class="form-group">
		<label>Name</label><input type="text" name="name" class="form-control" value="<?= $setting['name'] ?>">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea name="body" rows="7" class="form-control"><?= $setting['body'] ?></textarea>
	</div>
	<button type="submit" class="btn btn-primary">SUBMIT</button>
</form>