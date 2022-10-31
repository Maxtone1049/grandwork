<?php
session_start();
error_reporting(0);
include 'includes/dbconnect.php';
if (strlen($_SESSION['obcsuid']>0)) {

$uid=$_SESSION['obcsuid'];
$put= "<div class='header-action'>
<a href='account/.' class='cmn-btn-active'>Dashboard</a>
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

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/x-icon" href="assets/images/logoIcon/favicon.png">
<link rel="shortcut icon" type="image/x-icon" href="assets/images/logoIcon/favicon.png" />
<link href="fonts.googleapis.com/css2b7d6.css?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<title> Profit Elite - About</title>
<meta name="title" Content="Profit Elite - Home">
<meta name="description" content="Profit Elite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. It will grow beyond our imagination- and Profit Elite is built to be ready for whatever mining throws.">
<meta name="keywords" content="blog,Bitcoin,Ethereum,Tether,Binance Coin,Cardano,Polkadot,XRP,USD Coin,Filecoin,Klaytn,Elrond,user,payment,coin,litecoin,dogi,sales,report,Profit Elite,Profit Elite,Profit Elite mining,Profit Elite mining">
<link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">
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
<meta property="og:url" content=".">
<meta name="twitter:card" content="summary_large_image">

<link rel="stylesheet" href="assets/templates/basic/css/fontawesome-all.min.css">

<link rel="stylesheet" href="assets/templates/basic/css/line-awesome.min.css">

<link rel="stylesheet" href="assets/templates/basic/css/nice-select.css">

<link rel="stylesheet" href="assets/templates/basic/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/templates/basic/css/swiper.min.css">

<link rel="stylesheet" href="assets/templates/basic/css/animate.css">

<link rel="stylesheet" href="assets/templates/basic/css/style.css">
<link rel="stylesheet" href="assets/templates/basic/css/custom.css">

<link rel="stylesheet" href="assets/templates/basic/css/fake-notification-min.css">
<link rel="stylesheet" type="text/css" href="assets/templates/basic/css/colora961.css?color=b2991b">

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
<a class="site-logo site-title" href="."><img src="assets/images/logoIcon/logo.png" alt="site-logo"></a>
<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="fas fa-bars"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav main-menu ml-auto mr-auto">
<li><a href="." class="active">Home</a></li>
<li><a href="about-us">About</a></li>
<li><a href="how-it-works">How it Works</a></li>
<li><a href="contact">Contact</a></li>
<li><a href="verify/pin">Verify Pin</a></li>
<li><a href="pin-dispatcher">Dispatchers</a></li>
<li><a href="top-earners">Top Earners</a></li>
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
<section class="banner-section inner-banner-section bg-overlay-primary bg_img" data-background="assets/images/frontend/breadcrumb/6043507db922f1615024253.jpg">
<div class="container">
<div class="row justify-content-center align-items-center ml-b-30">
<div class="col-lg-10 text-center mrb-30">
<div class="banner-content">
<h2 class="title">About</h2>
<div class="breadcrumb-area">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href=".">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">About</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="about-section ptb-120">
<div class="container">
<div class="row justify-content-center ml-b-30">
<div class="col-lg-6 mrb-30">
<div class="about-thumb">
<img src="assets/images/frontend/about/6059bc7e057951616493694.png" alt="about">
</div>
</div>
<div class="col-lg-6 mrb-30">
<div class="about-content">
<h2 class="title">About Profit Elite</h2>
<span class="title-border"></span>
<p>Profit Elite is a dual-purpose platform made up of subsidiaries that provide an opportunity to utilize PELITE Virtual mining technique, which is intended for evaluating mining revenue and as well as conversion of PELITE units to real word money and cash out as at when due.</p>
<div class="about-item-area ml-b-30">
<div class="about-item d-flex flex-wrap align-items-center mrb-30">
<div class="about-icon">
<i class="las la-database"></i> </div>
<div class="about-details">
<h3 class="title">Performance</h3>
<p>Ultimate performance at low cost</p>
</div>
</div>
<div class="about-item d-flex flex-wrap align-items-center mrb-30">
<div class="about-icon">
<i class="fas fa-globe"></i> </div>
<div class="about-details">
<h3 class="title">World Wide Mining</h3>
<p>Servicing thousands of users from many countries</p>
</div>
</div>
<div class="about-item d-flex flex-wrap align-items-center mrb-30">
<div class="about-icon">
<i class="fas fa-coins"></i> </div>
<div class="about-details">
<h3 class="title">Multiple Cryptocurrencies</h3>
<p>We are offering mining for the next generation coin.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="blog-section py-5">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 text-center">
<div class="section-header">
<h2 class="section-title">Latest Trend Posts</h2>
<span class="title-border"></span>
<p>See our latest trend posts to get recent updates from this site. </p>
</div>
</div>
</div>
<div class="row justify-content-center ml-b-30">
<div class="col-lg-4 col-md-6 col-sm-12 mrb-30">
<div class="blog-item">
<div class="blog-thumb">
<img src="assets/images/frontend/blog/thumb_62c72bef6f3e51657220079.jpg" alt="Sponsored">
<span class="overlay-date">07, Jul</span>
</div>
<div class="blog-content">
<h3 class="title"><a href="trend/179/profitelite-is-the-most-stable-virtual-mining-platform">Profit Elite is the most stable virtual mining platform in Nigeria.</a></h3>
<p> Profit Elite has proven to be the most stable/reliable virtual mining platform in N...</p>
<div class="blog-btn">
<a href="trend/179/profitelite-is-the-most-stable-virtual-mining-platform" class="custom-btn">Read More <i class="fas fa-angle-double-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 mrb-30">
<div class="blog-item">
<div class="blog-thumb">
<img src="assets/images/frontend/blog/thumb_62ab6a9c194d91655401116.jpg" alt="Sponsored">
<span class="overlay-date">16, Jun</span>
</div>
<div class="blog-content">
<h3 class="title"><a href="trend/178/profitelite-is-a-rock-solid-project-that-would-never-wavers">Profit Elite is a Rock solid project that would never wavers!</a></h3>
<p> If you've joined other income platforms; it's pertinent to lend credence to the...</p>
<div class="blog-btn">
<a href="trend/178/profitelite-is-a-rock-solid-project-that-would-never-wavers" class="custom-btn">Read More <i class="fas fa-angle-double-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 mrb-30">
<div class="blog-item">
<div class="blog-thumb">
<img src="assets/images/frontend/blog/thumb_6273eeabea3a91651764907.jpg" alt="Sponsored">
<span class="overlay-date">05, May</span>
</div>
<div class="blog-content">
<h3 class="title"><a href="trend/175/withdraw-and-get-paid-in-usdt-optional">WITHDRAW AND GET PAID IN USDT (OPTIONAL)</a></h3>
<p> You can now withdraw and get paid in USDT with or without referals!
Since our p...</p>
<div class="blog-btn">
<a href="trend/175/withdraw-and-get-paid-in-usdt-optional" class="custom-btn">Read More <i class="fas fa-angle-double-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php include ('footer.php')?>


<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/templates/basic/js/jquery-3.3.1.min.js"></script>

<script src="assets/templates/basic/js/jquery-migrate-3.0.0.js"></script>

<script src="assets/templates/basic/js/bootstrap.min.js"></script>
<script src="assets/templates/basic/js/swiper.min.js"></script>

<script src="assets/templates/basic/js/jquery.nice-select.js"></script>

<script src="assets/templates/basic/js/chart.js"></script>

<script src="assets/templates/basic/js/wow.min.js"></script>

<script src="assets/templates/basic/js/particles.js"></script>

<script src="assets/templates/basic/js/main.js"></script>

<script src="assets/templates/basic/js/jquery.fake-notification.min.js"></script>
<link rel="stylesheet" href="assets/admin/css/iziToast.min.css">
<script src="assets/admin/js/iziToast.min.js"></script>
</body>
</html>
