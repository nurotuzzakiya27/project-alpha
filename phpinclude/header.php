<?php
session_start();
if(!isset($_SESSION['ID_LOGIN'])){
    header('Location: index.php');
}
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Project Alpha</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- notification CSS
        ============================================ -->
    <link rel="stylesheet" href="css/notification/notification.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- Data Table JS
        ============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- autocomplete CSS
        ============================================ -->
    <link rel="stylesheet" href="css/autocomplete/autocomplete.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- bootstrap select CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">
    <!-- dialog CSS
        ============================================ -->
    <link rel="stylesheet" href="css/dialog/sweetalert2.min.css">
    <link rel="stylesheet" href="css/dialog/dialog.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/datapicker/datepicker3.css">
</head>

<body>  
<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="header-top-menu">
                    <ul class="nav navbar-nav notika-top-nav">
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-support"></i></span></a>
                            <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                <div class="hd-mg-tt">
                                    <a class="btn btn-default" href="#">Compose</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top Area -->
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Charts" href="dashboard.php">Dashboard</a>
                            </li>
                            <li><a data-toggle="collapse" data-target="#master_menu" href="#">Master</a>
                                <ul id="master_menu" class="collapse dropdown-header-top">
                                    <li><a href="company-profile.php">Perusahaan</a></li>
                                    <li><a href="employee.php">Karyawan</a></li>
                                    <li><a href="customer.php">Pelanggan</a></li>
                                    <li><a href="items.php">Barang</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#transaction_menu" href="#">Transaksi</a>
                                <ul id="transaction_menu" class="collapse dropdown-header-transaksi">
                                    <li><a href="sales-orders.php">Sales Orders</a></li>
                                    <li><a href="invoices.php">Invoices</a></li>
                                    <li><a href="receipts.php">Receipts</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#report_menu" href="#">Laporan</a>
                                <ul id="report_menu" class="collapse dropdown-header-top">
                                    <li><a href="report-sales-orders.php">Sales Orders</a></li>
                                    <li><a href="report-invoices.php">Invoices</a></li>
                                    <li><a href="report-receipts.php">Receipts</a></li>
                                    <li><a href="all-sales-report.php">Semua Laporan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="active"><a data-toggle="tab" href="dashboard.php"><i class="notika-icon notika-house"></i> Dashboard</a>
                    </li>
                    <li><a data-toggle="tab" href="#master"><i class="notika-icon notika-flag"></i> Master</a>
                    </li>
                    <li><a data-toggle="tab" href="#transaksi"><i class="notika-icon notika-app"></i> Transaksi</a>
                    </li>
                    <li><a data-toggle="tab" href="#laporan"><i class="notika-icon notika-form"></i> Laporan</a>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="master" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="company-profile.php">Perusahaan</a>
                            </li>
                            <li><a href="employee.php">Karyawan</a>
                            </li>
                            <li><a href="customer.php">Pelanggan</a>
                            </li>
                            <li><a href="items.php">Barang</a>
                            </li>
                        </ul>
                    </div>
                    <div id="transaksi" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="sales-orders.php">Sales Orders</a>
                            </li>
                            <li><a href="invoices.php">Invoices</a>
                            </li>
                            <li><a href="receipts.php">Receipts</a>
                            </li>
                        </ul>
                    </div>
                    <div id="laporan" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="report-sales-orders.php">Sales Orders</a>
                            </li>
                            <li><a href="report-invoices.php">Invoices</a>
                            </li>
                            <li><a href="report-receipts.php">Receipts</a>
                            </li>
                            <li><a href="all-sales-report.php">Semua Laporan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->