<h2><?= $page['title'] ?></h2>
<form method="post">
	<div class="form-group">
		<label>Name</label><input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea name="body" rows="7" class="form-control"></textarea>
	</div>
	<button type="submit" class="btn btn-primary">SUBMIT</button>
</form>