<?php include('inc/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>PushSending</title>
	<!--favicon-->
	<link rel="icon" href="/Vertical/assets/images/favicon-32x32.png" type="image/png" />
	<!-- Vector CSS -->
	<link href="/Vertical/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
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
		

        <section class="container-fluid instll-page wrapper-interna">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="instll-hns">
                                Add-on installation
                            </h5>
                            <p>
                                Install the PushPushGo add-on by following instructions below. 
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">

                            <button type="button" class="btn btn-md bttn-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16" style:"fill: #6d6d6d">
                                  <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="col-md-12 my-4 p-4 blc-instll bg-white rounded input-instll">
                                <h5 class="instll-hns">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="fill:#b81414">
                                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                    </svg>
                                    Simple manual integration
                                </h5>
                                <ul class="instll-list">
                                    <li class="list-item">
                                        After accepting subscribe form user will have to confirm subscription in new confirmation window
                                    </li>
                                    <li class="list-item">
                                        Subscribers will be subscribed on pushpushgo domain
                                    </li>
                                    <li class="list-item">
                                        'pushpushgo.com' will  be visible in notifications
                                    </li>
                                </ul> 
                                <div class="d-flex justify-content-center mt-5">
                                    <button type="button" class="btn bttn-red">
                                        Choose simple integration
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="col-md-12 my-4 p-4 blc-instll bg-white rounded shadow">
                                <h5 class="instll-hns">
                                    Manual integration with own domain
                                </h5>
                                <ul class="instll-list">
                                    <li class="list-item">
                                        Your domain must have https
                                    </li>
                                    <li class="list-item">
                                        Your users can subscribe with one click
                                    </li>
                                    <li class="list-item">
                                        Your domain will be visible in notifications
                                    </li>
                                    <li class="list-item">
                                        You can export your subscribers
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center mt-5">
                                    <button type="button" class="btn bttn-red">
                                        Choose manual integration
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissable">

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    ??
                                </button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                </svg>	Project is successfully integrated with our system
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="">
                            <h5 class="instll-hns">
                                    Paste the code below to your site
                            </h5>
                            <div class="col-md-12 my-2 p-4 blc-instll rounded shadow-sm">
                                <div class="row">
                                    <div class="row col-md-12">
                                            <div class="ex-input">
                                                  <span class="input-group-text span-input rounded-0" id="basic-addon1"> script charset="UTF-8" src="https://s-eu-1.pushpushgo.com/js/6095d256c1c8493778793.js" async="async" /script</span>
                                            </div> 
                                        <button type="button" class="btn bttn-white mx-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                              <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                              <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                            </svg>
                                        </button> 
                                        <button type="button" class="btn bttn-red mx-auto">
                                            Check integration now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="">
                            <h5 class="instll-hns">
                                    Send integration instructions to technical people
                            </h5>
                            <div class="col-md-12 my-2 p-4 blc-instll rounded shadow-sm">
                                <div class="row">
                                    <div class="col-md-12">
                                         <div class="row my-3 col-md-12">
                                                <label for="exampleFormControlInput1" class="form-label col-md-12 mt-n2">E-mail</label>
                                                <input type="email" class="form-control col-md-9 mx-2 input-instll" id="exampleFormControlInput1" placeholder="email@domain.com">
                                                <button type="button" class="btn bttn-red col-md-2 mx-auto">Send instructions</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">PushSending By @2021 : <a href="http://www.pushsending.com/" target="_blank">PushSending</a>
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
			<h5 class="mb-0 text-uppercase">Costumize Seu Thema</h5>
			<hr/>
			<p class="mb-0">Texturas Gaussian</p>
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
			  <p class="mb-0">Plano de fundo Gradient</p>
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
	<!--plugins-->
	<script src="/Vertical/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="/Vertical/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="/Vertical/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- Vector map JavaScript -->
	<script src="/Vertical/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="/Vertical/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="/Vertical/assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
	<script src="/Vertical/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="/Vertical/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="/Vertical/assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="/Vertical/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="/Vertical/assets/js/index.js"></script>
	<!-- App JS -->
	<script src="/Vertical/assets/js/app.js?<?php echo date()?>"></script>
	<script>
		new PerfectScrollbar('.dashboard-social-list');
		new PerfectScrollbar('.dashboard-top-countries');
	</script>
</body>

</html>