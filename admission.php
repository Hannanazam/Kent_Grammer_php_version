<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Kent Grammer School a modern educational School">
	<meta name="author" content="Ansonika">
	<title>Kent Grammer School | Modern School</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/external_images/main_school_logo.png" type="image/x-icon">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="css/skins/square/grey.css" rel="stylesheet">
	<link href="css/wizard.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

</head>
<style>
@media (max-width:765px) {
	#form_container > figure{
		padding:0px;
	}
}
</style>
<body id="admission_bg">

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

	<div id="form_container" class="clearfix">
		<figure>
			<a href="index.html"><img src="img/external_images/main_school_logo-removebg-preview2.png" width="150"
					height="100" data-retina="true" alt=""></a>
		</figure>
		<div id="wizard_container">
			<div id="top-wizard">
				<div id="progressbar"></div>
			</div>
			<!-- /top-wizard -->
			<form name="example-1" id="wrapped" method="POST">
				<input id="website" name="website" type="text" value="">
				<!-- Leave for security protection, read docs for details -->
				<div id="middle-wizard">
					<div class="step">
						<div id="intro">
							<figure><img src="img/wizard_intro_icon.svg" alt=""></figure>
							<h1>Admission Apply</h1>
							<p>An education system refers to the economic and social factors that typically make up public schools at the federal, state or community levels. Such factors include public funding, school facilities, staffing, employee benefits, teaching resources and more. Education systems refer to the coordination of individuals infrastructure and functioning institutions and processes.</p>
							<p><strong>Take Admission for Build your Career and going on the bright side of Future</strong></p>
						</div>
					</div>

					<div class="step">
						<h3 class="main_question"><strong>1/3</strong>Please fill with your details</h3>
						<div class="form-group">
							<input type="text" name="firstname" class="form-control required" placeholder="First name">
						</div>
						<div class="form-group">
							<input type="text" name="lastname" class="form-control required" placeholder="Last name">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control required" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" name="telephone" class="form-control" placeholder="Your Telephone">
						</div>
						<div class="form-group">
							<input type="text" name="age" class="form-control" placeholder="Age">
						</div>
						<div class="form-group select">
							<div class="styled-select">
								<select class="required" name="education_apply" id="education_apply">
									<option value="" selected="">Select your education level</option>
									<option value="Less than high school">Montessori</option>
									<option value="High school diploma or equivalent">Primary</option>
									<option value="Some college no degree">Secondary</option>
								</select>
							</div>
						</div>
						<div class="form-group radio_input">
							<label><input type="radio" value="Male" checked name="gender" class="icheck">Male</label>
							<label><input type="radio" value="Female" name="gender" class="icheck">Female</label>
						</div>
					</div>
					<!-- /step-->

					<div class="step">
						<h3 class="main_question"><strong>2/3</strong>Please fill your address</h3>
						<div class="form-group">
							<input type="text" name="address" class="form-control required" placeholder="Address">
						</div>
						<div class="form-group">
							<input type="text" name="city" class="form-control required" placeholder="City">
						</div>
						<!-- <div class="form-group">
							<input type="text" name="zip_code" class="form-control required" placeholder="Zip code">
						</div>
						<div class="form-group">
							<div class="styled-select">
								<select class="required" name="country">
									<option value="" selected>Select your country</option>
									<option value="Europe">Europe</option>
									<option value="Asia">Asia</option>
									<option value="North America">North America</option>
									<option value="South America">South America</option>
								</select>
							</div>
						</div> -->
					</div>
					<!-- /step-->

					<div class="submit step">
						<h3 class="main_question"><strong>3/3</strong>Your preferences</h3>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Management" name="preferences[]"
									class="icheck">Montessori(nurserry)</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Art" name="preferences[]" class="icheck">Montessori(K.G)</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Math" name="preferences[]" class="icheck">Primary(1-3)</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Architecture" name="preferences[]"
									class="icheck">Primary(4-8)</label>
						</div>
						<div class="form-group radio_input">
							<label><input type="checkbox" value="Litteratture" name="preferences[]"
									class="icheck">Secondary</label>
						</div>
						<div class="form-group add_top_30">
							<textarea name="additional_message" class="form-control required" style="height:120px;"
								placeholder="Hello world....write your messagere here!"></textarea>
						</div>
						<!-- <div class="form-group terms">
							<input name="terms" type="checkbox" class="icheck required" value="yes">
							<label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and
									conditions</a> ?</label>
						</div> -->
					</div>
					<!-- /step-->
				</div>
				<!-- /middle-wizard -->
				<div id="bottom-wizard">
					<button type="button" name="backward" class="backward">Back </button>
					<button type="button" name="forward" class="forward">Next</button>
					<button type="submit" name="process" class="submit">Submit</button>
				</div>
				<!-- /bottom-wizard -->
			</form>
		</div>
		<!-- /Wizard container -->
	</div>
	<!-- /Form_container -->


	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.js"></script>
	<script src="js/main_admission.js"></script>
	<script src="assets/validate.js"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="js/jquery-ui-1.8.22.min.js"></script>
	<script src="js/jquery.wizard.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/admission_func.js"></script>

</body>

</html>