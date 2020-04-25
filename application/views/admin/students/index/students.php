<div class="user-data p-3">
	<div class="table-responsive table-data">
		<table class="table">
			<thead>
				<tr>
					<th>Access</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Password</th>
					<th>Phone</th>
					<th>Class</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($list as $li): ?>
					<tr>
						<td>
							<label class="au-checkbox"><input data-id="<?= $li['id'] ?>" name="allow" <?= ($li['status'] == 'active')?'checked':''; ?> type="checkbox"><span class="au-checkmark"></span></label>
						</td>
						<td><?= $li['fullname']; ?></td>
						<td><?= $li['email']; ?></td>
						<td><?= $li['password']; ?></td>
						<td><?= $li['phone']; ?></td>
						<td><?= $li['class']; ?></td>
						<td>
							<a href="<?= base_url('admin/students/edit/'.$li['id']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('[name="allow"]').change(function() {
	      	var propcheck = $(this).prop('checked');
	      	var status = '';
			if(propcheck) { status = 'active';}
			var data = {id:$(this).data('id'),status:status};
	     	$.post('<?= base_url('admin/students/update') ?>', data, function(res) {
	     		console.log(res);
	     	})
		})
	})

</script>