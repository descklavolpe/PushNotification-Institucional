<?php include('inc/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Syntrans - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="/Vertical/assets/images/favicon-32x32.png" type="image/png" />
	<?php include('inc/head.php') ?>
	
	
</head>

<body class="bg-theme bg-theme1">
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		<?php include('inc/menu.php'); ?>
		<!--end sidebar-wrapper-->
		<!--header-->
		<?php include('inc/topheader.php'); ?>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Forms</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Validations</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-light">Settings</button>
								<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a>
									<a class="dropdown-item" href="javascript:;">Another action</a>
									<a class="dropdown-item" href="javascript:;">Something else here</a>
									<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
								</div>
							</div>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Validation</h4>
							</div>
							<hr/>
							<p>Custom styles</p>
							<form class="needs-validation" novalidate>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="validationCustom01">First name</label>
										<input type="text" class="form-control" id="validationCustom01" value="Mark" required>
										<div class="valid-feedback">Looks good!</div>
									</div>
									<div class="col-md-6 mb-3">
										<label for="validationCustom02">Last name</label>
										<input type="text" class="form-control" id="validationCustom02" value="Otto" required>
										<div class="valid-feedback">Looks good!</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="validationCustom03">City</label>
										<input type="text" class="form-control" id="validationCustom03" required>
										<div class="invalid-feedback">Please provide a valid city.</div>
									</div>
									<div class="col-md-3 mb-3">
										<label for="validationCustom04">State</label>
										<select class="custom-select" id="validationCustom04" required>
											<option selected disabled value="">Choose...</option>
											<option>...</option>
										</select>
										<div class="invalid-feedback">Please select a valid state.</div>
									</div>
									<div class="col-md-3 mb-3">
										<label for="validationCustom05">Zip</label>
										<input type="text" class="form-control" id="validationCustom05" required>
										<div class="invalid-feedback">Please provide a valid zip.</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
										<label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
										<div class="invalid-feedback">You must agree before submitting.</div>
									</div>
								</div>
								<button class="btn btn-primary" type="submit">Submit form</button>
							</form>
							<script>
								// Example starter JavaScript for disabling form submissions if there are invalid fields
								(function () {
									'use strict';
									window.addEventListener('load', function () {
										// Fetch all the forms we want to apply custom Bootstrap validation styles to
										var forms = document.getElementsByClassName('needs-validation');
										// Loop over them and prevent submission
										var validation = Array.prototype.filter.call(forms, function (form) {
											form.addEventListener('submit', function (event) {
												if (form.checkValidity() === false) {
													event.preventDefault();
													event.stopPropagation();
												}
												form.classList.add('was-validated');
											}, false);
										});
									}, false);
								})();
							</script>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Browser defaults</h4>
							</div>
							<hr/>
							<form>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="validationDefault01">First name</label>
										<input type="text" class="form-control" id="validationDefault01" value="Mark" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="validationDefault02">Last name</label>
										<input type="text" class="form-control" id="validationDefault02" value="Otto" required>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="validationDefault03">City</label>
										<input type="text" class="form-control" id="validationDefault03" required>
									</div>
									<div class="col-md-3 mb-3">
										<label for="validationDefault04">State</label>
										<select class="custom-select" id="validationDefault04" required>
											<option selected disabled value="">Choose...</option>
											<option>...</option>
										</select>
									</div>
									<div class="col-md-3 mb-3">
										<label for="validationDefault05">Zip</label>
										<input type="text" class="form-control" id="validationDefault05" required>
									</div>
								</div>
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
										<label class="form-check-label" for="invalidCheck2">Agree to terms and conditions</label>
									</div>
								</div>
								<button class="btn btn-primary" type="submit">Submit form</button>
							</form>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Server side</h4>
							</div>
							<hr/>
							<form>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="validationServer01">First name</label>
										<input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
										<div class="valid-feedback">Looks good!</div>
									</div>
									<div class="col-md-6 mb-3">
										<label for="validationServer02">Last name</label>
										<input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
										<div class="valid-feedback">Looks good!</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="validationServer03">City</label>
										<input type="text" class="form-control is-invalid" id="validationServer03" required>
										<div class="invalid-feedback">Please provide a valid city.</div>
									</div>
									<div class="col-md-3 mb-3">
										<label for="validationServer04">State</label>
										<select class="custom-select is-invalid" id="validationServer04" required>
											<option selected disabled value="">Choose...</option>
											<option>...</option>
										</select>
										<div class="invalid-feedback">Please select a valid state.</div>
									</div>
									<div class="col-md-3 mb-3">
										<label for="validationServer05">Zip</label>
										<input type="text" class="form-control is-invalid" id="validationServer05" required>
										<div class="invalid-feedback">Please provide a valid zip.</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
										<label class="form-check-label" for="invalidCheck3">Agree to terms and conditions</label>
										<div class="invalid-feedback">You must agree before submitting.</div>
									</div>
								</div>
								<button class="btn btn-primary" type="submit">Submit form</button>
							</form>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Supported elements</h4>
							</div>
							<hr/>
							<form class="was-validated">
								<div class="mb-3">
									<label for="validationTextarea">Textarea</label>
									<textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
									<div class="invalid-feedback">Please enter a message in the textarea.</div>
								</div>
								<div class="custom-control custom-checkbox mb-3">
									<input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
									<label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
									<div class="invalid-feedback">Example invalid feedback text</div>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
									<label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
								</div>
								<div class="custom-control custom-radio mb-3">
									<input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
									<label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
									<div class="invalid-feedback">More example invalid feedback text</div>
								</div>
								<div class="mb-3">
									<select class="custom-select" required>
										<option value="">Choose...</option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									</select>
									<div class="invalid-feedback">Example invalid custom select feedback</div>
								</div>
								<div class="custom-file mb-3">
									<input type="file" class="custom-file-input" id="validatedCustomFile" required>
									<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
									<div class="invalid-feedback">Example invalid custom file feedback</div>
								</div>
								<div class="mb-3">
									<div class="input-group is-invalid">
										<div class="input-group-prepend">	<span class="input-group-text" id="validatedInputGroupPrepend">@</span>
										</div>
										<input type="text" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
									</div>
									<div class="invalid-feedback">Example invalid input group feedback</div>
								</div>
								<div class="mb-3">
									<div class="input-group is-invalid">
										<div class="input-group-prepend">
											<label class="input-group-text" for="validatedInputGroupSelect">Options</label>
										</div>
										<select class="custom-select" id="validatedInputGroupSelect" required>
											<option value="">Choose...</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
									<div class="invalid-feedback">Example invalid input group feedback</div>
								</div>
								<div class="input-group is-invalid">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
										<label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
									</div>
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="button">Button</button>
									</div>
								</div>
								<div class="invalid-feedback">Example invalid input group feedback</div>
							</form>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Tooltips</h4>
							</div>
							<hr/>
							<form class="needs-validation" novalidate>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="validationTooltip01">First name</label>
										<input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
										<div class="valid-tooltip">Looks good!</div>
									</div>
									<div class="col-md-6 mb-3">
										<label for="validationTooltip02">Last name</label>
										<input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
										<div class="valid-tooltip">Looks good!</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="validationTooltip03">City</label>
										<input type="text" class="form-control" id="validationTooltip03" required>
										<div class="invalid-tooltip">Please provide a valid city.</div>
									</div>
									<div class="col-md-3 mb-3">
										<label for="validationTooltip04">State</label>
										<select class="custom-select" id="validationTooltip04" required>
											<option selected disabled value="">Choose...</option>
											<option>...</option>
										</select>
										<div class="invalid-tooltip">Please select a valid state.</div>
									</div>
									<div class="col-md-3 mb-3">
										<label for="validationTooltip05">Zip</label>
										<input type="text" class="form-control" id="validationTooltip05" required>
										<div class="invalid-tooltip">Please provide a valid zip.</div>
									</div>
								</div>
								<button class="btn btn-primary" type="submit">Submit form</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">Syntrans @2020 | Developed By : <a href="https://themeforest.net/user/codervent" target="_blank">codervent</a>
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			  <hr>
			  
			  <ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			  </ul>
               <hr>
			  <p class="mb-0">Gradient Background</p>
			  <hr>
			  
			  <ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
			  </ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/Vertical/assets/js/jquery.min.js"></script>
	<script src="/Vertical/assets/js/popper.min.js"></script>
	<script src="/Vertical/assets/js/bootstrap.min.js"></script>
	<script src="/Vertical/assets/js/bs-custom-file-input.min.js"></script>
	<!--plugins-->
	<script src="/Vertical/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="/Vertical/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="/Vertical/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- App JS -->
	<script src="/Vertical/assets/js/app.js?<?php echo date()?>"></script>
</body>

</html>