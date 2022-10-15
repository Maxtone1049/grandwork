<?php
session_start();
error_reporting(0);
include 'includes/dbconnect.php';
if (strlen($_SESSION['obcsuid']>0)) {

$uid=$_SESSION['obcsuid'];
$put= "<div class='header-action'>
<a href='account/dashboard' class='cmn-btn-active'>Dashboard</a>
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
<title> Profit Elite - Contact</title>
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
<meta property="og:url" content="index.html">
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
<!-- <div class="preloader-area">
<div class='coin'>
<div class='front jump'>
<div class='star'></div>
<span class='currency'><i class="las la-coins"></i></span>
<div class='shapes'>
<div class='shape_l'></div>
<div class='shape_r'></div>
<span class='top'>ProfitElite</span>
<span class='bottom'>ProfitElite</span>
</div>
</div>
<div class='shadow'></div>
</div>
</div> -->
<header class="header-section">
<div class="header">
<div class="header-top-area">
<div class="container">
<div class="header-top-content">
<div class="header-content d-flex flex-wrap justify-content-between align-items-center">
<div class="header-right-info">
<span class="first-info"><a href="tel:+234 812 645 2522"><i class="fas fa-phone"></i>+234 812 645 2522</a></span>
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
<h2 class="title">Contact Us</h2>
<div class="breadcrumb-area">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href=".">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="contact-section register-section pd-t-120">
<div class="container">
<div class="row justify-content-center ml-b-30">
<div class="col-lg-5 mrb-30">
<div class="contact-thumb">
<img src="assets/images/frontend/contact_us/606c0eb443bbf1617694388.png" alt="">
</div>
</div>
<div class="col-lg-7 mrb-30">
<div class="register-form-area">
<h3 class="title mb-4">Contact With Us</h3>
<span class="title-border"></span>
<form method="POST" class="register-form">
<input type="hidden" name="_token" value="BwQmT3eviYgErFYse8rAotcKMYaOaIMXubjr2o23"> <div class="row justify-content-center ml-b-20">
<div class="col-lg-6 form-group">
<label class="register-icon"><i class="fas fa-pen"></i></label>
<input type="text" class="form-control" name="name" value="" placeholder="Your Name">
</div>
<div class="col-lg-6 form-group">
<label class="register-icon"><i class="fas fa-envelope"></i></label>
<input type="text" class="form-control" name="email" value="" placeholder="Your Email">
</div>
<div class="col-lg-12 form-group">
<label class="register-icon"><i class="fas fa-book"></i></label>
<input type="text" class="form-control" name="subject" value="" placeholder="Subject">
</div>
<div class="col-lg-12 form-group">
<textarea name="message" class="form-control" placeholder="Your Message"></textarea>
</div>
<div class="col-lg-12 form-group text-center">
<button type="submit" class="submit-btn">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>


<div class="contact-info-area ptb-120">
<div class="container">
<div class="contact-info-item-area">
<div class="row justify-content-center ml-b-30">
<div class="col-lg-4 col-md-6 col-sm-8 text-center mrb-30">
<div class="contact-info-item">
<i class="fas fa fa-map-marker-alt"></i>
<h3 class="title">Address</h3>
<p>Profit Elite Head Office, Lagos 125666, NG</p>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-8 text-center mrb-30">
<div class="contact-info-item item-one">
<i class="fas fa-envelope"></i>
<h3 class="title">Email Address</h3>
<p><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="6d1e181d1d021f192d0c0b1f040e0a020109430e0200">[email&#160;protected]</a></p>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-8 text-center mrb-30">
<div class="contact-info-item item-two">
<i class="fas fa-phone-alt"></i>
<h3 class="title">Phone Number</h3>
<p>+234 812 645 2522</p>
</div>
</div>
</div>
</div>
</div>
</div>

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
<p>Profit Elite is a dual-purpose platform made up of subsidiaries that provide an opportunity to utilize PULTIMATE Virtual mining technique, which is intended for evaluating mining revenue and as well as conversion of PULTIMATE units to real word money and cash out as at when due.</p>
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
<i class="fas fa-coins"></i>  </div>
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
<!-- <script>

    'use strict';
    (function($){
        $(document).on("change", ".select-bar", function() {
            window.location.href = "https://ProfitElite.com/change/"+$(this).val() ;
        });

        $('.select-bar').val('en');
    })(jQuery)
</script> -->
<script>

    $(document).ready(function() {
        $('#notification-1').Notification({
            // Notification varibles
            Varible1: ["David","Jack","Olivia","Samuel","Thomas","William","Adam","Dylan","Luke","Matthew","Ethan","Nathan","Archie","Oscar","Lucas","Isaac","Tom","Gabriel","Reuben","Sean","Jude","Leon","Tanaka","Sasaki","Kimura","Yamada","Hayashi","Ogawa","Lisa","Grete","Sandra","Anna","Kati","Stacy","Jane"],
            Varible2: ["Ikeja","Lagos","Kaduna","Kwara","Delta","Ghana","Cameroon","Makurdi","Uyo","Eket","Awka","Enugu","Kebbi","Jos","Kogi","Nasarrawa","Kebbi","Lokoja","Abia"],
            Varible3: ["registerd", "started mining", "referred"],
            Amount: [100, 50000],
            Content: '[Varible1] from [Varible2] has just [Varible3].',
            // Timer
            Show: ['random', 5, 10],
            Close: 5,
            Time: [0, 23],
            // Notification style
            LocationTop: [false, '5%'],
            LocationBottom:[true, '5%'],
            LocationRight: [false, '5px'],
            LocationLeft:[true, '10px'],
            Background: '#252c40',
            BorderRadius: 5,
            BorderWidth: 3,
            BorderColor: 'gold',
            TextColor: 'white',
            IconColor: 'orange',
            // Notification Animated
            AnimationEffectOpen: 'fadeInUp',
            AnimationEffectClose: 'fadeOutDown',
            // Number of notifications
            Number: 100,
            // Notification link
            Link: [false, '#']

        });


    });

</script>
</body>
</html>
