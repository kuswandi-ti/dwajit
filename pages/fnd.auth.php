<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="JIT - Shipping Management">
    <meta name="author" content="PT. Dasa Windu Agung">
    <title>JIT - Shipping Management</title>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
</head>
<body>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
		
        <section id="wrapper">
            <div class="login-register" style="background-image:url(images/login.jpg);">
                <div class="login-box card">
					<div class="card-header">
						<h2 class="text-center">JIT - Shipping Management</h2>
					</div>
                    <?= fndNotification() ?>
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="?p=process-auth" method="post">
                            <h2 class="box-title m-b-20 font-weight-bold text-center"><i class="mdi mdi-account mdi-48px">Login</h2></i>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" required name="fnd-usr" placeholder="Username" autocomplete="off" autofocus> 
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" required name="fnd-pwd" placeholder="Password" autocomplete="off"> 
                                </div>
                            </div>
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-info btn-block text-uppercase waves-effect waves-dark" type="submit">Masuk</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer small"> © 2019 PT. <a href="http://www.dwa.co.id" target="_blank">Dasa Windu Agung</a></div>
                </div>
            </div>
        </section>
        <script src="assets/plugins/popper/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/sidebarmenu.js"></script>
        <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/js/custom.min.js"></script>
        <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    </body>
    </html>