<?php
session_start();
error_reporting(0);
include '../includes/dbconnect.php';
if (strlen($_SESSION['obcsuid']>0)) {

$uid=$_SESSION['obcsuid'];
$put= "<div class='header-action'>
<a href='account/dashboard' class='cmn-btn-active'>Dashboard</a>
</div>";
  
}else {
    $out= " <div class='header-action'>
    <a href='\../register' class='cmn-btn'>Register</a>
    <a href='\../login' class='cmn-btn-active'>Login</a>
    </div>";
}
?>
<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/x-icon" href="../../assets/images/logoIcon/favicon.png">
<link rel="shortcut icon" type="image/x-icon" href="../../assets/images/logoIcon/favicon.png" />
<link href="../../../fonts.googleapis.com/css2b7d6.css?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<title> ProfitElite - EliteTrend</title>
<meta name="title" Content="ProfitElite - EliteTrend">
<meta name="description" content="ProfitElite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. It will grow beyond our imagination- and ProfitElite is built to be ready for whatever mining throws.">
<meta name="keywords" content="blog,Bitcoin,Ethereum,Tether,Binance Coin,Cardano,Polkadot,XRP,USD Coin,Filecoin,Klaytn,Elrond,user,payment,coin,litecoin,dogi,sales,report,AfriGold,ProfitElite,Afrigold mining,ProfitElite mining">
<link rel="shortcut icon" href="../../assets/images/logoIcon/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="../../assets/images/logoIcon/logo.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="ProfitElite - EliteTrend">
<meta itemprop="name" content="ProfitElite - EliteTrend">
<meta itemprop="description" content="">
<meta itemprop="image" content="../../assets/images/seo/612d1ba9df6921630346153.png">
<meta property="og:type" content="website">
<meta property="og:title" content="ProfitElite">
<meta property="og:description" content="ProfitElite is an integral part of the cryptocurrency miner space. ProfitElite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. The ProfitElite allows you to instantly switch what you are mining, review earnings, withdraw and receive from the wallets, and much more.">
<meta property="og:image" content="../../assets/images/seo/612d1ba9df6921630346153.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />
<meta property="og:url" content="profitelite-is-a-rock-solid-project-that-would-never-wavers">
<meta name="twitter:card" content="summary_large_image">

<link rel="stylesheet" href="../../assets/templates/basic/css/fontawesome-all.min.css">

<link rel="stylesheet" href="../../assets/templates/basic/css/line-awesome.min.css">

<link rel="stylesheet" href="../../assets/templates/basic/css/nice-select.css">

<link rel="stylesheet" href="../../assets/templates/basic/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/templates/basic/css/swiper.min.css">

<link rel="stylesheet" href="../../assets/templates/basic/css/animate.css">

<link rel="stylesheet" href="../../assets/templates/basic/css/style.css">
<link rel="stylesheet" href="../../assets/templates/basic/css/custom.css">

<link rel="stylesheet" href="../../assets/templates/basic/css/fake-notification-min.css">
<link rel="stylesheet" type="text/css" href="../../assets/templates/basic/css/colora961.css?color=b2991b">
<style>
        #social-links {
            margin: 0 auto;
            max-width: 500px;
        }
        #social-links ul li {
            display: inline-block;
        }
        #social-links ul li a {
            padding: 15px;
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 30px;
        }
        #social-links{
            display: inline-table;
        }
        #social-links ul li{
            display: inline;
        }
        table #social-links ul li a{
            padding: 5px;
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 15px;
            background: #e3e3ea;
        }
    </style>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-198044238-4"></script>
<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-198044238-4');
    </script>
<script src="../../../cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
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
<a class="site-logo site-title" href="../../."><img src="../../assets/images/logoIcon/logo.png" alt="site-logo"></a>
<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="fas fa-bars"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav main-menu ml-auto mr-auto">
<li><a href="\../." class="active">Home</a></li>
<li><a href="../../about-us">About</a></li>
 <li><a href="../../how-it-works">How it Works</a></li>
<li><a href="../../contact">Contact</a></li>
<li><a href="../../verify/pin">Verify Pin</a></li>
<li><a href="../../pin-dispatcher">Dispatchers</a></li>
<li><a href="../../top-earners">Top Earners</a></li>
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
<section class="banner-section inner-banner-section bg-overlay-primary bg_img" data-background="https://afrigoldm.com/assets/images/frontend/breadcrumb/6043507db922f1615024253.jpg">
<div class="container">
<div class="row justify-content-center align-items-center ml-b-30">
<div class="col-lg-10 text-center mrb-30">
<div class="banner-content">
<h2 class="title">EliteTrend</h2>
<div class="breadcrumb-area">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="../../.">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">EliteTrend</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="ads mb-3"><a href="https://bit.ly/3Bdtvru" target="_blank"><img src="../../../vokprime.com/wp-content/uploads/2022/07/bsness.jpg" alt="Start Business" title="Start your business"></a></div>

<section class="blog-section py-5">
<div class="container">
<div class="row justify-content-center ml-b-30">
<div class="col-lg-8 mrb-30">
<div class="blog-item">
<div class="blog-thumb">
<img src="../../assets/images/frontend/blog/62ab6a9c194d91655401116.jpg" alt="Blog">
<span class="overlay-date">16, Jun</span>
</div>
<div class="blog-content">
<h3 class="title">ProfitElite is a Rock solid project that would never wavers!</h3>
<p>
<span style="font-size:22px;">If you've joined other income platforms; it's pertinent to lend credence to the fact that ProfitElite is a ROCK SOLID PROJECT that would never ever WAVERS; With GROUNDBREAKING RECORDS.</span>
<br /><br /><span style="font-size:22px;">1st affiliate platform that disbursed over ???100,000 individually to her non affiliate partners. And still willing to do more going forward! </span>
<br /><br /><span style="font-size:15px;">Our mining &amp; SOCIAL CONGLOMERATES has been thoroughly tested and proven to be a reliable source of livelihood. </span>
<br /><br /><span style="font-size:15px;">Our non affiliate funds disbursement na BREKETE! </span><br />
<br /><br /><span style="font-size:22px;">ProfitElite members FB timeline scrutinization has commenced. </span><br />
<br /><br /><span style="font-size:22px;">Below are what we would put into consideration while scrutinising your Facebook timeline </span>
<br /><br /><span style="font-size:22px;">???? </span><br />
<span style="font-size:22px;"> Your Facebook account must be linked to your ProfitElite sophisticated dashboard</span>
<br /><br /><span style="font-size:22px;">EliteTrend must be shared to PUBLIC </span>
<br /><br /><span style="font-size:22px;">UP-TO-DATE sharing of EliteTrend (consistent sharing of EliteTrend) </span>
<br /><br /><span style="font-size:22px;">If you are eligible,please do not act as a partner in distress. We are aware that you need funds! The money you've withdrawn would be paid to you! While we fix a date for MINERS CASHOUT!??</span><br /> </p>
<p><div id="social-links"><ul><li><a href="https://www.facebook.com/sharer/sharer.php?u=https://afrigoldm.com/trend/178/ProfitElite-is-a-rock-solid-project-that-would-never-wavers" class="social-button " id="" title="" rel=""><span class="fab fa-facebook-square"></span></a></li><li><a target="_blank" href="https://wa.me/?text=https://afrigoldm.com/trend/178/ProfitElite-is-a-rock-solid-project-that-would-never-wavers" class="social-button " id="" title="" rel=""><span class="fab fa-whatsapp"></span></a></li><li><a target="_blank" href="https://telegram.me/share/url?url=https://afrigoldm.com/trend/178/ProfitElite-is-a-rock-solid-project-that-would-never-wavers&amp;text=Default+share+text" class="social-button " id="" title="" rel=""><span class="fab fa-telegram"></span></a></li></ul></div></p>
</div>
</div>
</div>
<div class="col-lg-4 mrb-30">
<div class="sidebar">
<div class="widget-box">
<h5 class="widget-title">Latest EliteTrend</h5>
<div class="popular-widget-box">
<div class="single-popular-item d-flex flex-wrap align-items-center">
<div class="popular-item-thumb">
<img src="../../assets/images/frontend/blog/623314fe2e3131647514878.jpg" alt="blog">
</div>
<div class="popular-item-content">
<h5 class="title"><a href="../170/ProfitElite-video-challenge-winners-announced.html">ProfitElite VIDEO CHALLENGE WINNERS ANNOUNCED!</a></h5>
<span class="blog-date">17 March, 2022</span>
</div>
</div>
<div class="single-popular-item d-flex flex-wrap align-items-center">
<div class="popular-item-thumb">
<img src="../../assets/images/frontend/blog/6272aa325b7211651681842.jpg" alt="blog">
</div>
<div class="popular-item-content">
<h5 class="title"><a href="../174/get-started-on-ProfitElite-and-claim-your-free-airtimedata-in-seconds.html">Get started on ProfitElite and claim your free airtime/data in seconds!</a></h5>
<span class="blog-date">04 May, 2022</span>
</div>
</div>
<div class="single-popular-item d-flex flex-wrap align-items-center">
<div class="popular-item-thumb">
<img src="../../assets/images/frontend/blog/6273eeabea3a91651764907.jpg" alt="blog">
</div>
<div class="popular-item-content">
<h5 class="title"><a href="../175/withdraw-and-get-paid-in-usdt-optional.html">WITHDRAW AND GET PAID IN USDT (OPTIONAL)</a></h5>
<span class="blog-date">05 May, 2022</span>
</div>
</div>
<div class="single-popular-item d-flex flex-wrap align-items-center">
<div class="popular-item-thumb">
<img src="../../assets/images/frontend/blog/62c72bef6f3e51657220079.jpg" alt="blog">
</div>
<div class="popular-item-content">
<h5 class="title"><a href="../179/ProfitElite-is-the-most-stable-virtual-mining-platform-in-nigeria.html">ProfitElite is the most stable virtual mining platform in Nigeria.</a></h5>
<span class="blog-date">07 July, 2022</span>
</div>
</div>
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
<p>AfriGold is one of the leading cryptocurrency mining platforms, offering cryptocurrency mining capacities in every range - for newcomers. Our mission is to make acquiring cryptocurrencies easy and fast for everyone.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 mrb-30">
<div class="footer-widget">
<h3 class="widget-title">Quick Links</h3>
<ul class="footer-list">
<li><a href="../../about-us.html">About</a></li>
<li><a href="../../how-it-works.html">How it Works</a></li>
<li><a href="../../blogs.html">Blog</a></li>
<li><a href="../../contact.html">Contact</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-sm-6 mrb-30">
<div class="footer-widget">
<h3 class="widget-title">Useful Links</h3>
<ul class="footer-list">
<li><a href="../../links/disclaimer-87.html">Disclaimer</a></li>
<li><a href="../../links/cookie-policy-83.html">Cookie Policy</a></li>
<li><a href="../../links/terms-of-service-78.html">Terms of Service</a></li>
<li><a href="../../links/privacy-policy-77.html">Privacy Policy</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6 mrb-30">
<div class="footer-widget widget-menu">
<h3 class="widget-title">Contact Info</h3>
 <ul class="footer-list">
<li>Call Us Now +234 812 645 2522</li>
<li><a href="../../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="2e5d5b5e5e415c5a6e4f485c474d4941424a004d4143">[email&#160;protected]</a></li>
<li>ProfitElite Head Office, Lagos 125666, NG</li>
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
<p>COPYRIGHT ?? 2021 ALL RIGHTS RESERVED</p>
</div>
</div>
</div>
</div>

<div id="notification-1" class="notification">
<div class="notification-block">
<div class="notification-img">

<img src="../../assets/images/logoIcon/favicon.png" aria-hidden="true"></img>

</div>
<div class="notification-text-block">
<div class="notification-title">

ProfitElite Update

</div>
<div class="notification-text"></div>
</div>
</div>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../../assets/templates/basic/js/jquery-3.3.1.min.js"></script>

<script src="../../assets/templates/basic/js/jquery-migrate-3.0.0.js"></script>

<script src="../../assets/templates/basic/js/bootstrap.min.js"></script>
<script src="../../assets/templates/basic/js/swiper.min.js"></script>

<script src="../../assets/templates/basic/js/jquery.nice-select.js"></script>

<script src="../../assets/templates/basic/js/chart.js"></script>

<script src="../../assets/templates/basic/js/wow.min.js"></script>

<script src="../../assets/templates/basic/js/particles.js"></script>

<script src="../../assets/templates/basic/js/main.js"></script>

<script src="../../assets/templates/basic/js/jquery.fake-notification.min.js"></script>
<script src="../../assets/templates/basic/js/axios.min.js"></script>
<link rel="stylesheet" href="../../assets/admin/css/iziToast.min.css">
<script src="../../assets/admin/js/iziToast.min.js"></script>
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

            $(".social-button").click(function()
            {

                setTimeout(function () {
                    axios.post("../../user/trend/178.html")
                        .then(function (response) {
                            console.log(response.data);
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }, 5000)

            });
        });
    </script>
<script>

    'use strict';
    (function($){
        $(document).on("change", ".select-bar", function() {
            window.location.href = "https://afrigoldm.com/change/"+$(this).val() ;
        });

        $('.select-bar').val('en');
    })(jQuery)
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

<!-- Mirrored from afrigoldm.com/trend/178/ProfitElite-is-a-rock-solid-project-that-would-never-wavers by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 00:14:27 GMT -->
</html>
