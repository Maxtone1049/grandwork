<?php
session_start();
error_reporting(0);
include '../includes/dbconnect.php';
if (strlen($_SESSION['obcsuid']>0)) {

$uid=$_SESSION['obcsuid'];
$put= "<div class='header-action'>
<a href='../account/dashboard' class='cmn-btn-active'>Dashboard</a>
</div>";

  
}else {
    $out= " <div class='header-action'>
    <a href='register' class='cmn-btn'>Register</a>
    <a href='login' class='cmn-btn-active'>Login</a>
    </div>";
}
?>

<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
+234 701 041 4251
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/x-icon" href=".../assets/images/logoIcon/favicon.png">
<link rel="shortcut icon" type="image/x-icon" href=".../assets/images/logoIcon/favicon.png" />
<link href="fonts.googleapis.com/css2b7d6.css?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<title> Profit Elite - Pin</title>
<meta name="title" Content="Profit Elite - Home">
<meta name="description" content="Profit Elite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. It will grow beyond our imagination- and Profit Elite is built to be ready for whatever mining throws.">
<meta name="keywords" content="blog,Bitcoin,Ethereum,Tether,Binance Coin,Cardano,Polkadot,XRP,USD Coin,Filecoin,Klaytn,Elrond,user,payment,coin,litecoin,dogi,sales,report,Profit Elite,Profit Elite,Profit Elite mining,Profit Elite mining">
<link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Profit Elite - Home">
<meta itemprop="name" content="Profit Elite - Home">
<meta itemprop="description" content="">
<meta itemprop="image" content="assets/images/seo/612d1ba9df6921630346153.png">
<meta property="og:type" content="website">
<meta property="og:title" content="Profit Elite">
<meta property="og:description" content="Profit Elite is an integral part of the cryptocurrency miner space. Profit Elite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. The Profit Elite allows you to instantly switch what you are mining, review earnings, withdraw and receive from the wallets, and much more.">
<meta property="og:image" content="assets/images/seo/612d1ba9df6921630346153.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />
<meta property="og:url" content="index.html">
<meta name="twitter:card" content="summary_large_image">

<link rel="stylesheet" href="../assets/templates/basic/css/fontawesome-all.min.css">
<link rel="stylesheet" href="../assets/templates/basic/css/line-awesome.min.css">
<link rel="stylesheet" href="../assets/templates/basic/css/nice-select.css">
<link rel="stylesheet" href="../assets/templates/basic/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/templates/basic/css/swiper.min.css">
<link rel="stylesheet" href="../assets/templates/basic/css/animate.css">
<link rel="stylesheet" href="../assets/templates/basic/css/style.css">
<link rel="stylesheet" href="../assets/templates/basic/css/custom.css">
<link rel="stylesheet" href="../assets/templates/basic/css/fake-notification-min.css">
<link rel="stylesheet" type="text/css" href="../assets/templates/basic/css/colora961.css?color=b2991b">

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-198044238-4"></script>
<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-198044238-4');
    </script>
<script src="cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "c44ccaed-ccd2-4f08-a81d-8a17a0965fc7",
            });
        });
    </script>
</head>
<body>
<header class="header-section">
<div class="header">
<div class="header-top-area">
<div class="container">
<div class="header-top-content">
<div class="header-content d-flex flex-wrap justify-content-between align-items-center">
<div class="header-right-info">
<span class="first-info"><a href="tel:+234 701 041 4251"><i class="fas fa-phone"></i>+234 701 041 4251</a></span>
</div>
<div class="header-right-info">
<?php
                    if ($_SESSION['obcsuid']>0) {
                        echo $put;
                    }else {
                        echo $out;
                    }
                    
                    ?>
</div>
</div>
</div>
</div>
</div>
<div class="header-bottom-area">
<div class="container">
<div class="header-menu-content">
<nav class="navbar navbar-expand-lg p-0">
<a class="site-logo site-title" href="."><img src="../assets/images/logoIcon/logo.png" alt="site-logo"></a>
<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="fas fa-bars"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav main-menu ml-auto mr-auto">
<li><a href="../." class="active">Home</a></li>
<li><a href="../about-us">About</a></li>
<li><a href="../how-it-works">How it Works</a></li>
<li><a href="../contact">Contact</a></li>
<li><a href="pin">Verify Pin</a></li>
<li><a href="../pin-dispatcher">Dispatchers</a></li>
<li><a href="../top-earners">Top Earners</a></li>
<div class="header-small">
<?php
                    if ($_SESSION['obcsuid']>0) {
                        echo $put;
                    }else {
                        echo $out;
                    }
                    
                    ?>
</div>
</ul>
</div>
</nav>
</div>
</div>
</div>
</div>
</header>
<a href="#" class="scrollToTop"><i class="fa fa-angle-double-up"></i></a>
<section class="banner-section inner-banner-section bg-overlay-primary bg_img" data-background="../assets/images/frontend/breadcrumb/6043507db922f1615024253.jpg">
<div class="container">
<div class="row justify-content-center align-items-center ml-b-30">
<div class="col-lg-10 text-center mrb-30">
<div class="banner-content">
<h2 class="title">Pin Verification</h2>
<div class="breadcrumb-area">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="../.">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Pin Verification</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="container">
<h3 class="pb-3 mt-5 mb-3 font-italic text-center">
Verify Purchase Code
</h3>
<div class="row">
<div class="col-md-8 m-auto">
<div class="card mb-4 shadow-sm">
<div class="card-body">
<form action="verify/pin" method="POST" id="verifyForm">
<div class="form-row">
<div class="form-group col-12">
<label class="font-weight-bolder">Purchase Code</label>
<div class="input-group">
<input type="text" class="form-control plan-price" name="pin">
</div>
</div>
<div class="form-group col-md-12">
<button type="submit" id="verifyBtn" class="cmn-btn btn-block">Verify</button>
</div>
</div>
</form>
<div class="text-danger font-weight-bold text-center doesNot" style="display: none;"><p>Oops... We cannot find that purchase code.</p></div>
<div class="text-danger font-weight-bold text-center ouch" style="display: none;"><p>Ouch...Where did you get that from?<br>The code is invalid.</p></div>
</div>
</div>
<div class="validCode0 mt-5" style="display: none;">
<h3 class="pb-3 my-2 font-italic text-center">
Purchase Code Details
</h3>
<div class="card mb-4 shadow-sm">
<div class="card-body">
<div class="border-bottom row py-2">
<div class="col-md-4 text-right"><em class="bg-info text-white py-1 px-3 rounded sstats">Code:</em></div>
<div class="col-md-8"><strong class="text-dark font-weight-bold stat1"></strong></div>
</div>
<div class="border-bottom row py-2">
<div class="col-md-4 text-right"><em class="bg-danger text-white py-1 px-3 rounded sstats">Serial Number:</em></div>
<div class="col-md-8"><span class="text-dark font-weight-bold stat2"></span></div>
</div>
<div class="border-bottom row py-2">
<div class="col-md-4 text-right"><em class="bg-success text-white py-1 px-3 rounded sstats">Status:</em></div>
<div class="col-md-8"><span class="text-white bg-primary font-weight-bold px-3 rounded stat3">unused</span></div>
</div>
<div class="border-bottom row py-2">
<div class="col-md-4 text-right"><em class="bg-info text-white py-1 px-3 rounded sstats">Package/Plan</em></div>
<div class="col-md-8"><strong class="text-dark font-weight-bold stat6"></strong></div>
</div>
</div>
</div>
</div>
<div class="validCode1 mt-5" style="display: none;">
<h3 class="pb-3 my-2 font-italic text-center">
Purchase Code Details
</h3>
<div class="card mb-4 shadow-sm">
<div class="card-body">
<div class="border-bottom row py-2">
<div class="col-md-4 text-right"><em class="bg-info text-white py-1 px-3 rounded sstats">Code:</em></div>
<div class="col-md-8"><strong class="text-dark font-weight-bold stat1"></strong></div>
</div>
<div class="border-bottom row py-2">
<div class="col-md-4 text-right"><em class="bg-danger text-white py-1 px-3 rounded sstats">Serial Number:</em></div>
<div class="col-md-8"><span class="text-dark font-weight-bold stat2"></span></div>
</div>
<div class="border-bottom row py-2">
<div class="col-md-4 text-right"><em class="bg-success text-white py-1 px-3 rounded sstats">Status:</em></div>
<div class="col-md-8"><span class="text-danger bg-warning font-weight-bold px-3 rounded stat3">Used</span></div>
</div>
<div class="border-bottom row py-2">
<div class="col-md-4 text-right"><em class="bg-info text-white py-1 px-3 rounded sstats">Package/Plan</em></div>
<div class="col-md-8"><strong class="text-dark font-weight-bold stat6"></strong></div>
</div>
<div class="border-bottom row py-2">
<div class="col-md-4 text-right"><em class="bg-warning text-white py-1 px-3 rounded sstats">Used By:</em></div>
<div class="col-md-8"><span class="text-dark font-weight-bold stat4"></span></div>
</div>
<div class="border-bottom row py-2">
<div class="col-md-4 text-right"><em class="bg-dark text-white py-1 px-3 rounded sstats">Used Date/Time:</em></div>
<div class="col-md-8"><span class="text-dark font-weight-bold stat5"></span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include('../footer.php')?>
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/templates/basic/js/jquery-3.3.1.min.js"></script>

<script src="\assets/templates/basic/js/jquery-migrate-3.0.0.js"></script>
<script src="\assets/templates/basic/js/bootstrap.min.js"></script>
<script src="\assets/templates/basic/js/swiper.min.js"></script>
<script src="\assets/templates/basic/js/jquery.nice-select.js"></script>
<script src="\assets/templates/basic/js/chart.js"></script>
<script src="\assets/templates/basic/js/wow.min.js"></script>
<script src="\assets/templates/basic/js/particles.js"></script>
<script src="\assets/templates/basic/js/main.js"></script>
<script src="\assets/templates/basic/js/jquery.fake-notification.min.js"></script>
<link rel="stylesheet" href="\assets/admin/css/iziToast.min.css">
<script src="\assets/admin/js/iziToast.min.js"></script>
<script>
    "use strict";
    function notify(status, message) {
        if(typeof message == 'string'){
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }else{
            $.each(message, function(i, val) {
                iziToast[status]({
                    message: val,
                    position: "topRight"
                });
            });
        }

    }

</script>
<script>
        $(document).ready(function(){

            $("#verifyForm").submit(function(e)
            {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: "verify/pin",
                    data: $('#verifyForm').serialize(),

                    success:function(data)
                    {
                        if(data.success === false) {
                            $('.validCode1').css("display", "none");
                            $('.validCode0').css("display", "none");
                            $('.doesNot').css("display", "none");
                            $('.ouch').css("display", "block");
                        } else if(data.na) {
                            $('.validCode1').css("display", "none");
                            $('.validCode0').css("display", "none");
                            $('.ouch').css("display", "none");
                            $('.doesNot').css("display", "block");
                        } else {
                            var couponCode = data.code;
                            var decrypt = atob(atob(couponCode));
                            var status =  data.status;

                            if(status === 0) {
                                $('.stat1').text(decrypt);
                                $('.stat2').text(data.serial);
                                $('.stat6').text(data.plan);
                                $('.ouch').css("display", "none");
                                $('.doesNot').css("display", "none");
                                $('.validCode1').css("display", "none");
                                $('.validCode0').css("display", "block");
                            } else {
                                $('.stat1').text(decrypt);
                                $('.stat2').text(data.serial);
                                //$('.stat3').text(data.status);
                                $('.stat4').text(data.who);
                                $('.stat5').text(data.when);
                                $('.stat6').text(data.plan);
                                //$('.stat7').text(data.refBy);
                                $('.ouch').css("display", "none");
                                $('.doesNot').css("display", "none");
                                $('.validCode0').css("display", "none");
                                $('.validCode1').css("display", "block");

                            }
                        }
                    },
                    errors: function (error) {
                        console.log(error);
                    }

                });
            });
        });
    </script>
</body>
</html>
