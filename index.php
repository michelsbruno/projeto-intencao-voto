<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br" dir="rtl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
	<meta name="author" content="Ansonika">
	<title>Pesquisa Eleitoral</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	
	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
	<link href="css/skins/square/grey.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

	<script src="js/modernizr.js"></script>
	<!-- Modernizr -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/style-rtl.css">
</head>

<body>
	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- cd-overlay-nav -->
	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- coloco o body do sistema -->
	<div class="quiz-top-area text-center">
		<h1>
			<font color= Rgb(66,138,58)>Pesquisa Eleitoral</font>
		</h1>
		<div class="main-nav">
			<!--<div class="brand"><a href="index.php"><img src="assets/img/logo.png" alt=""></a></div> /.brand -->
			<!--/.main-nav-->
		</div>
	</div>
	<div class="wrapper position-relative">
		<div class="wizard-content-1 clearfix">
			<div class="steps d-inline-block position-absolute clearfix">
				<ul class="tablist multisteps-form__progress">
					<li class="multisteps-form__progress-btn js-active current"></li>
					<li class="multisteps-form__progress-btn "></li>
					<li class="multisteps-form__progress-btn"></li>
					<li class="multisteps-form__progress-btn"></li>
					<li class="multisteps-form__progress-btn"></li>
				</ul>
			</div>
			<div class="step-inner-content clearfix position-relative">
				<form class="multisteps-form__form" action="thank-you.html" id="wizard" method="POST">
					<div class="form-area position-relative">
						<div class="multisteps-form__panel  js-active" data-animation="fadeIn">
							<div class="wizard-forms clearfix position-relative">
								<div class="quiz-title text-center">
									
									<p>Site compromissado em oferecer as parciais mais próximas do resultado real de uma eleição</p>
									<h2><img src="assets/img/logo.png" alt=""></h2>
									<p>Realize o login abaixo</p>
								</div>
								<br><br>
								<ul>
									<center>
										<li><button type="button" class="btn btn-success"><a href="loginsistema.php" role="button">Login</a></button< /li> <br>
								</ul>
									</center>
								</ul>
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class="text-center footer">
			<h6>
				<font color= Rgb(66,138,58)>
					<script>
						document.write(new Date().getFullYear())
					</script>
					Artur Campos / Bruno Michels </font>
				<h6>
		</div>
	</footer>
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/js/form-step.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/main.js"></script>
	<!-- <script src="assets/js/switch.js"></script> -->
	<!-- fechar o codigo do body do sistema -->
	<!-- SCRIPTS -->
	<!-- Jquery-->
	<script src="js/jquery-3.6.1.min.js"></script>
	<!-- Common script -->
	<script src="js/common_scripts_min.js"></script>
	<!-- Wizard script -->
	<script src="js/registration_wizard_func.js"></script>
	<!-- Menu script -->
	<script src="js/velocity.min.js"></script>
	<script src="js/main.js"></script>
	<!-- Theme script -->
	<script src="js/functions.js"></script>
</body>

</html>