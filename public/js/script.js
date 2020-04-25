jQuery(function($) {
	var baseURL = $('[data-base]').data('base');
	login();

	$('[data-fg]').each(function () {
		var info = $(this).data('fg').split('|');
		if(info.length < 4) { info[3] = '';}
		var fg=`
		<div class="form-group">
			<label for="${info[0]}">${info[1]}</label>
			<input type="${info[2]}" name="${info[0]}" value="${info[3]}" id="${info[0]}" class="form-control">
		</div>
		`;
		$(this).html(fg);
	});



	setInterval(login,10000);
	function login() {

		$.get(baseURL+'access', function(res) {log_info(res);});


		function log_info(token) {
		  var info = JSON.parse(localStorage.getItem('log_info'));
		  if(info !== null) {
		    if(info.token !== token.token) {logout();}
		  } else {
		    localStorage.setItem('log_info', JSON.stringify(token));
		  }
		}

		function logout() {
			localStorage.removeItem('log_info');
			window.open(baseURL+'logout','_self');
		}
	}

});