<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" href="<?php echo URL_LAYOUT?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT?>css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet">
    <style type="text/css">
    	body,html
    	{
    		font-family: "Poppins", sans-serif;
    	}
    </style>
</head>
<body>
	<section class="register">
		<div class="wrapper_register">
			<h1>Carano</h1>
			<form id="form-1" method="post" action="#" class="form">
					<div class="form-group" >
						<label for="email">Email<span>*</span></label>
						<input type="email" name="email" id="email">
						<span class="form-message"></span>
					</div>
					<div class="form-group">
						<label>Username<span>*</span></label>
						<input type="text"  name="username" id="username">
							<span class="form-message"></span>
					</div>
					<div class="form-group">
						<label>Password<span>*</span></label>
						<input type="password" name="password" id="password">
						<span class="form-message"></span>
					</div>
					<div class="form-group">
						<label>Password again<span>*</span></label>
						<input type="password" name="password_confirmation" id="password_confirmation">
						<span class="form-message"></span>
					</div>
					<div class="form-group">
						<input type="submit" name="" value="Register">
						<a href="#">Đăng nhập</a>
						<span class="form-message"></span>
					</div>
			</form>
			<div class="social">
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-youtube"></i></a>
			</div>
		</div>

	</section>
	<script type="text/javascript" src="js/validator.js"></script>
	
	<script type="text/javascript">

		//mong muốn của chúng ta 
		Validator({
			form:'#form-1',
			errorSelector: '.form-message',
			rules:[
			Validator.isRequired('#username','Vui lòng nhập username'),
			Validator.isRequired('#email','Vui lòng nhập email'),
			Validator.isEmail('#email'),
			Validator.isRequired('#password','Vui lòng nhập password'),
			Validator.minLength('#password',6),
			Validator.isRequired('#password_confirmation','Vui lòng xác nhận password '),
			Validator.isConfirmed('#password_confirmation',function () {
				return document.querySelector('#form-1 #password').value;
			},'Mật khẩu nhập lại không chính xác')
						],
			onSubmit: function(data)
			{	
				//call api 
				console.log(data);
			}
		});

	</script>
</body>
</html>