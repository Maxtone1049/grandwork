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
<title> Profit Ultimate - how it works</title>
<meta name="title" Content="Profit Ultimate - Home">
<meta name="description" content="Profit Ultimate is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. It will grow beyond our imagination- and Profit Ultimate is built to be ready for whatever mining throws.">
<meta name="keywords" content="blog,Bitcoin,Ethereum,Tether,Binance Coin,Cardano,Polkadot,XRP,USD Coin,Filecoin,Klaytn,Elrond,user,payment,coin,litecoin,dogi,sales,report,Profit Ultimate,Profit Ultimate,Profit Ultimate mining,Profit Ultimate mining">
<link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Profit Ultimate - Home">
<meta itemprop="name" content="Profit Ultimate - Home">
<meta itemprop="description" content="">
<meta itemprop="image" content="assets/images/seo/612d1ba9df6921630346153.png">
<meta property="og:type" content="website">
<meta property="og:title" content="Profit Ultimate">
<meta property="og:description" content="Profit Ultimate is an integral part of the cryptocurrency miner space. Profit Ultimate is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. The Profit Ultimate allows you to instantly switch what you are mining, review earnings, withdraw and receive from the wallets, and much more.">
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
<div class="preloader-area">
<div class='coin'>
<div class='front jump'>
<div class='star'></div>
<span class='currency'><i class="las la-coins"></i></span>
<div class='shapes'>
<div class='shape_l'></div>
<div class='shape_r'></div>
<span class='top'>ProfitUltimate</span>
<span class='bottom'>ProfitUltimate</span>
</div>
</div>
<div class='shadow'></div>
</div>
</div>
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
<h2 class="title">How it Works</h2>
<div class="breadcrumb-area">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">How it Works</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="faq-section ptb-120">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 text-center">
<div class="section-header">
<h2 class="title">AFGOLD FREQUENTLY ASKED QUESTIONS</h2>
<span class="title-border"></span>
<p>Here you can find our top frequently asked questions. Please let us know if you have any queries regarding our mining platform and FAQs.</p>
</div>
</div>
</div>
<div class="row justify-content-center ml-b-30">
<div class="col-lg-6 mrb-30">
<div class="faq-wrapper">
<div class="faq-item  active open ">
<h3 class="faq-title"><span class="title">How much unit of PULTIMATE is required for registration in naira?</span><span class="right-icon"></span></h3>
<div class="faq-content">
<p>3000(0.3)/5000(0.5)</p>
</div>
</div>
<div class="faq-item ">
<h3 class="faq-title"><span class="title">After registration, what will I do to earn?</span><span class="right-icon"></span></h3>
<div class="faq-content">
<p>Profit ultimate is a dual-purpose platform, it&#039;s either you mine to earn or earn through affiliate marketing.</p>
</div>
</div>
<div class="faq-item ">
<h3 class="faq-title"><span class="title">If I don’t have referrals, Will I earn?</span><span class="right-icon"></span></h3>
<div class="faq-content">
<p>Absolutely, You will earn. Profit ultimate isn&#039;t a read news and comment- to-earn platform, and as such, no compulsory referral needed.</p>
</div>
 </div>
<div class="faq-item ">
<h3 class="faq-title"><span class="title">How do I withdraw my earnings.</span><span class="right-icon"></span></h3>
<div class="faq-content">
<p>your earnings would be credited to your account after attaining Profit ultimate minimum withdrawal threshold.</p>
</div>
</div>
<div class="faq-item ">
<h3 class="faq-title"><span class="title">What is the least earnings I can earn in a day.</span><span class="right-icon"></span></h3>
<div class="faq-content">
<p>You earn nothing less than ₦4500 daily depending on your subscription plan.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6 mrb-30">
<div class="faq-wrapper">
<div class="faq-item  active open ">
<h3 class="faq-title"><span class="title">Will it Crash?</span><span class="right-icon"></span></h3>
<div class="faq-content">
<p>It would never crash because there would always be enough funds to mine and earn. Units of gold supplied daily is prior to how much profit the platform makes daily. However, it&#039;s a decentralized platform. You MINE, EARN, and withdraw as you wish.</p>
</div>
</div>
<div class="faq-item ">
<h3 class="faq-title"><span class="title">Will I receive money daily?</span><span class="right-icon"></span></h3>
<div class="faq-content">
<p>As long as you earn everyday, you can receive profit everyday. It all depends on your hardwork and dedication.</p>
</div>
</div>
<div class="faq-item ">
<h3 class="faq-title"><span class="title">If I join today, When will they pay me?</span><span class="right-icon"></span></h3>
<div class="faq-content">
<p>You can withdraw your earnings when you attain Profit ultimate withdrawal threshold.</p>
</div>
</div>
<div class="faq-item ">
<h3 class="faq-title"><span class="title">What is the difference between Profit ultimate and all these read news and comment to earn platforms?</span><span class="right-icon"></span></h3>
<div class="faq-content">
<p>Profit ultimate has a functional cash reservoir, they do not depend on Google Adsense before paying her members. Amount of AFGOLD supply daily is what they can afford to pay. The company is monitised in different ways to ensure consistent mining cash flow.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="choose-section ptb-120">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 text-center">
<div class="section-header">
<h2 class="section-title">Why Choose Profit ultimate?</h2>
<span class="title-border"></span>
<p>As an AFGOLD MINER, you get paid as you mine per minute without having to bring people before earning. We are combining all the key aspects of conducting an efficient cryptocurrency mining activity. From building a highly efficient data center to providing a robust mining system for our users.</p>
</div>
</div>
</div>
<div class="choose-item-area">
<div class="row justify-content-between ml-b-60">
<div class="col-lg-4 col-md-6 col-sm-8">
<div class="choose-item d-flex flex-wrap align-items-center mrb-60">
<div class="choose-icon">
<i class="las la-wallet"></i> </div>
<div class="choose-content">
<h3 class="title">Daily Mining Output</h3>
<p>Our system will automatically add your daily mining results to your account. Also, you are able to withdraw that amount.</p>
</div>
</div>
<div class="choose-item d-flex flex-wrap align-items-center mrb-60">
<div class="choose-icon">
<i class="las la-lock"></i> </div>
<div class="choose-content">
<h3 class="title">Secure and Private</h3>
<p>We support cryptocurrencies that promote privacy, so we try to keep user data collected to a minimum and will only require information.</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-8 choose-thumb-inner">
<div class="choose-thumb">
<img src="assets/images/frontend/feature/60433fce5004c1615019982.png" alt="rocket">
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-8">
<div class="choose-item d-flex flex-wrap align-items-center mrb-60">
<div class="choose-icon">
<i class="las la-chart-bar"></i> </div>
<div class="choose-content">
<h3 class="title">Intuitive Dashboard</h3>
<p>Our system dashboard contains all your crypto mining data and charts.</p>
</div>
</div>
<div class="choose-item d-flex flex-wrap align-items-center mrb-60">
<div class="choose-icon">
<i class="las la-hammer"></i> </div>
<div class="choose-content">
<h3 class="title">Robust Mining Technology</h3>
<p>For each of the blockchain algorithms that we have proposed, we are providing some of the highest performance mining systems available.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<footer class="footer-section ptb-80">
<div class="container">
<div class="footer-area">
<div class="row ml-b-30">
<div class="col-lg-4 col-sm-6 mrb-30">
<div class="footer-widget widget-menu">
<h3 class="widget-title">About Us</h3>
<p>Profit ultimate is one of the leading cryptocurrency mining platforms, offering cryptocurrency mining capacities in every range - for newcomers. Our mission is to make acquiring cryptocurrencies easy and fast for everyone.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 mrb-30">
<div class="footer-widget">
<h3 class="widget-title">Quick Links</h3>
<ul class="footer-list">
<li><a href="about-us.html">About</a></li>
<li><a href="how-it-works.html">How it Works</a></li>
<li><a href="blogs.html">Blog</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-sm-6 mrb-30">
<div class="footer-widget">
<h3 class="widget-title">Useful Links</h3>
<ul class="footer-list">
<li><a href="links/disclaimer-87.html">Disclaimer</a></li>
<li><a href="links/cookie-policy-83.html">Cookie Policy</a></li>
<li><a href="links/terms-of-service-78.html">Terms of Service</a></li>
<li><a href="links/privacy-policy-77.html">Privacy Policy</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6 mrb-30">
<div class="footer-widget widget-menu">
<h3 class="widget-title">Contact Info</h3>
<ul class="footer-list">
<li>Call Us Now +234 812 645 2522</li>
<li><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="daa9afaaaab5a8ae9abbbca8b3b9bdb5b6bef4b9b5b7">[email&#160;protected]</a></li>
<li>Profit ultimate Head Office, Lagos 125666, NG</li>
</ul>
</div>
</div>
<div class="col-lg-12">
<div class="social-area d-flex justify-content-center">
<ul class="footer-social">
<li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
<li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
<li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
<li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</footer>
<div class="privacy-area privacy-area--style">
<div class="container">
<div class="copyright-area d-flex flex-wrap align-items-center justify-content-center">
<div class="copyright">
<p>COPYRIGHT © 2021 ALL RIGHTS RESERVED</p>
</div>
</div>
</div>
</div>

<div id="notification-1" class="notification">
<div class="notification-block">
<div class="notification-img">

<img src="assets/images/logoIcon/favicon.png" aria-hidden="true"></img>

</div>
<div class="notification-text-block">
<div class="notification-title">

Profit ultimate Update

</div>
<div class="notification-text"></div>
</div>
</div>
</div>


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
