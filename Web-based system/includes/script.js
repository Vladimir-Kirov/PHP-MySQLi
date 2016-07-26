$(document).ready(function () {

	$('#register').on('submit', function (event) {
		
		var email = $('#email').val();
		var password = $('input[type="password"]').val();

		if(email.length < 3) 
		{
			$('#message').html('<p class="error">Invalid email</p>');

			event.preventDefault();
		}


		if(password.length < 3 || password.length > 30) 
		{

			$('#message').html('<p class="error">Ivalid password length</p>');

			event.preventDefault();
		}
		
	});

	$('#system_form').on('submit', function (event) {

		var username = $('#username').val();
		var address = $('#address').val();
		var phone = $('#phone').val();
		var department = $('#department').val();
		var position = $('#position').val();
		var salary = $('#salary').val();

		if(username.length < 4) 
		{
			$('#message').html('<p class="error">The name is too short!</p>');

			event.preventDefault();
		}


		if(phone.length < 6 || phone.length > 12) 
		{
			$('#message').html('<p class="error">Invalid phone.</p>');

			event.preventDefault();

		}


	});

});