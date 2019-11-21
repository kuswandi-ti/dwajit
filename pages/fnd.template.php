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
    <link href="assets/plugins/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/popper/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <div id="main-wrapper">
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <a class="navbar-brand text-white font-weight-bold" href="javascript:void(0)"> JIT </a>
                    </div>
                    <div class="navbar-collapse">
                        <ul class="navbar-nav mr-auto mt-md-0">
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        </ul>
                        <ul class="navbar-nav ml-auto my-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="?p=auth-out">
                                    <i class="mdi mdi-logout"></i> Keluar
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="left-sidebar">
                <div class="scroll-sidebar">
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                        </a> </li>
                        <li>
                            <a class="has-arrow" href="javascript:void(0)"><i class="mdi mdi-animation"></i><span class="hide-menu small" >Master Data</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="?p=product-build"><i class="mdi mdi-chart-arc"> Product by Building</a></li></i>
                                <li><a href="?p=pulling-loading"><i class="mdi mdi-chart-arc"> Cycle Time Pulling <br> and Cycle Loading</a></li></i></a>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="javascript:void(0)"><i class="mdi mdi-note-plus-outline"></i><span class="hide-menu small" >Upload XLS</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="?p=upload-csv-tmmin"><i class="mdi mdi-car"> Toyota</a></li></i>
                                <li><a href="?p=upload-csv-adm"><i class="mdi mdi-car"> Daihatsu</a></li></i></a>
                            </ul>
                        </li>
                        <li> <a href="?p=upload-pdf"><i class="mdi mdi-file-pdf"></i><span class="hide-menu small">Upload PDF</span></a> </li>
                        <li>
                        </li>
                        <li>
                            <a class="has-arrow " href="javascript:void(0)"><i class="mdi mdi-factory"></i><span class="hide-menu small">Kanban/Gedung (TMMIN)</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="?p=sunter"><i class="mdi mdi-city"> Sunter</a></li></i>
                                <li><a href="?p=history-sunter"><i class="mdi mdi-history"> History Sunter</a></li></i>
                                <li><a href="?p=karawang"><i class="mdi mdi-city"> Karawang</a></li></i>
                                <li><a href="?p=history-karawang"><i class="mdi mdi-history"> History Karawang</a></li></i>
                            </ul>
                        </li>
						<li>
                            <a class="has-arrow " href="javascript:void(0)"><i class="mdi mdi-factory"></i><span class="hide-menu small">Kanban/Gedung (ADM)</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="?p=adm-sunter"><i class="mdi mdi-city"> Sunter</a></li></i>
                                <li><a href="?p=history-adm-sunter"><i class="mdi mdi-history"> History Sunter</a></li></i>
                                <li><a href="?p=adm-karawang"><i class="mdi mdi-city"> Karawang</a></li></i>
                                <li><a href="?p=history-adm-karawang"><i class="mdi mdi-history"> History Karawang</a></li></i>
                            </ul>
                        </li>
                        <li> <a href="?p=pengaturan-cycle"><i class="mdi mdi-settings"></i><span class="hide-menu small">Pengaturan Cycle</span></a> </li>
                        <li> <a href="?p=scan-barcode"><i class="mdi mdi-barcode"></i><span class="hide-menu small">Scan Barcode <br> Security Check</span></a> </li>
                    </ul>
                </nav>
            </div>
        </aside>