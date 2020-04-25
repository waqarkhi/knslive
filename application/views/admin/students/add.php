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
			<div class="col-md-6"><div data-fg="fullname|Full Name|text"></div></div>
			<div class="col-md-6"><div data-fg="phone|Phone/Mobile|text"></div></div>
			<div class="col-md-6"><div data-fg="email|Email Address|email"></div></div>
			<div class="col-md-6"><div data-fg="password|Password|text"></div></div>
			<div class="col-md-6"><div data-fg="class|Class|text"></div></div>
			<div class="col-md-12">

				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="status" value="active" name="status">
					<label class="custom-control-label" for="status">Allow Zoom Meeting Access</label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		setTimeout(function() {emailValidate();}, 3000);
		function emailValidate() {
			console.log('emailValidate');
			$('[name="email"]').after('<span class="text-danger" id="email_val"></span>');
			$('[name="email"]').on('keyup', function() {
				var url = '<?= base_url(); ?>admin/students/is_unique';
				var em = $(this).val();
				url = url+'?email='+em;
				$.get(url, function(res) {
					var msg = '';
					if( res === 1 ) { msg = 'Already Exists use another';validate('fail');} else {validate('pass');msg = '';}       
					$('#email_val').html(msg);
				})
			})
		}
		function validate (val) {
			var btn = $('form button');
			(val == 'fail') ? btn.attr('disabled','disabled') : btn.removeAttr('disabled');
		}
	})
</script>