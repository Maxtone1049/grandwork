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
<title> Profit Elite - EliteTrend</title>
<meta name="title" Content="Profit Elite - EliteTrend">
<meta name="description" content="Profit Elite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. It will grow beyond our imagination- and Profit Elite is built to be ready for whatever mining throws.">
<meta name="keywords" content="blog,Bitcoin,Ethereum,Tether,Binance Coin,Cardano,Polkadot,XRP,USD Coin,Filecoin,Klaytn,Elrond,user,payment,coin,litecoin,dogi,sales,report,Profit Elite,Profit Elite,Profit Elite mining,Profit Elite mining">
<link rel="shortcut icon" href="../../assets/images/logoIcon/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="../../assets/images/logoIcon/logo.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Profit Elite - AfricTrend">
<meta itemprop="name" content="Profit Elite - AfricTrend">
<meta itemprop="description" content="">
<meta itemprop="image" content="../../assets/images/seo/612d1ba9df6921630346153.png">
<meta property="og:type" content="website">
<meta property="og:title" content="Profit Elite">
<meta property="og:description" content="Profit Elite is an integral part of the cryptocurrency miner space. Profit Elite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. The Profit Elite allows you to instantly switch what you are mining, review earnings, withdraw and receive from the wallets, and much more.">
<meta property="og:image" content="../../assets/images/seo/612d1ba9df6921630346153.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />
<meta property="og:url" content="Profit Elite-video-challenge-winners-announced.html">
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
<a class="site-logo site-title" href="../../index.html"><img src="../../assets/images/logoIcon/logo.png" alt="site-logo"></a>
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
<section class="banner-section inner-banner-section bg-overlay-primary bg_img" data-background="\assets/images/frontend/breadcrumb/6043507db922f1615024253.jpg">
<div class="container">
<div class="row justify-content-center align-items-center ml-b-30">
<div class="col-lg-10 text-center mrb-30">
<div class="banner-content">
<h2 class="title">EliteTrend</h2>
<div class="breadcrumb-area">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
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
<img src="../../assets/images/frontend/blog/623314fe2e3131647514878.jpg" alt="Blog">
<span class="overlay-date">17, Mar</span>
</div>
<div class="blog-content">
<h3 class="title">Profit Elite VIDEO CHALLENGE WINNERS ANNOUNCED!</h3>
<p>
<span style="font-size:22px;">After weeks of videos submissions, AFGOLD 2022 VIDEO CHALLENGE CONTEST has come to an end and we are thrilled to announce this year's winners. And the grand prize winner is CBMEDIA.</span>
<br /><br /><span style="font-size:22px;">Congratulations on a job WELL DONE. Cbmedia Will take home ₦300,000 cash prize, also 30AFG coin would be CREDITED to him. </span>
<br /><br /><span style="font-size:22px;">We would also like to extend our congratulations to our second place, third place winners inclusions of </span><span style="font-size:22px;">Vicbright &amp; peaceCJ. ₦200,000 cash prize to be shared amongst them. </span><br />
<br /><br /><span style="font-size:22px;">Thank you to everyone who participated in this year's Profit Elite VIDEO CHALLENGE CONTEST. Your hard work and commitment is much appreciated and hasn't gone unnoticed. We thoroughly enjoyed getting an inside look at each of your individual videos challenge creative marketing displays.</span>
<br /><br /><span style="font-size:22px;">Those who took part in this year's video challenge using Profit Elite CUSTOMISED POLO would also be rewarded. </span>
<br /><br /><span style="font-size:22px;">While we are still modifying our system, Another contest would be coming up soon. 1M cash prize to be won! GET READY &amp; BE PREPARED! </span><br /> </p>
<p><div id="social-links"><ul><li><a href="https://www.facebook.com/sharer/sharer.php?u=\trend/170/Profit Elite-video-challenge-winners-announced" class="social-button " id="" title="" rel=""><span class="fab fa-facebook-square"></span></a></li><li><a target="_blank" href="https://wa.me/?text=\trend/170/Profit Elite-video-challenge-winners-announced" class="social-button " id="" title="" rel=""><span class="fab fa-whatsapp"></span></a></li><li><a target="_blank" href="https://telegram.me/share/url?url=\trend/170/Profit Elite-video-challenge-winners-announced&amp;text=Default+share+text" class="social-button " id="" title="" rel=""><span class="fab fa-telegram"></span></a></li></ul></div></p>
</div>
</div>
</div>
<div class="col-lg-4 mrb-30">
<div class="sidebar">
<div class="widget-box">
<h5 class="widget-title">Latest Elite Trend</h5>
<div class="popular-widget-box">
<div class="single-popular-item d-flex flex-wrap align-items-center">
<div class="popular-item-thumb">
<img src="../../assets/images/frontend/blog/6272aa325b7211651681842.jpg" alt="blog">
</div>
<div class="popular-item-content">
<h5 class="title"><a href="../174/get-started-on-profit-elite-and-claim-your-free-airtimedata-in-seconds.php">Get started on Profit Elite and claim your free airtime/data in seconds!</a></h5>
<span class="blog-date">04 May, 2022</span>
</div>
</div>
<div class="single-popular-item d-flex flex-wrap align-items-center">
<div class="popular-item-thumb">
<img src="../../assets/images/frontend/blog/6273eeabea3a91651764907.jpg" alt="blog">
</div>
<div class="popular-item-content">
<h5 class="title"><a href="../175/withdraw-and-get-paid-in-usdt-optional">WITHDRAW AND GET PAID IN USDT (OPTIONAL)</a></h5>
<span class="blog-date">05 May, 2022</span>
</div>
</div>
<div class="single-popular-item d-flex flex-wrap align-items-center">
<div class="popular-item-thumb">
<img src="../../assets/images/frontend/blog/62ab6a9c194d91655401116.jpg" alt="blog">
</div>
<div class="popular-item-content">
<h5 class="title"><a href="../178/profitelite-is-a-rock-solid-project-that-would-never-wavers">Profit Elite is a Rock solid project that would never wavers!</a></h5>
<span class="blog-date">16 June, 2022</span>
</div>
</div>
<div class="single-popular-item d-flex flex-wrap align-items-center">
<div class="popular-item-thumb">
<img src="../../assets/images/frontend/blog/62c72bef6f3e51657220079.jpg" alt="blog">
</div>
<div class="popular-item-content">
<h5 class="title"><a href="../179/profitelite-is-the-most-stable-virtual-mining-platform.php">Profit Elite is the most stable virtual mining platform in Nigeria.</a></h5>
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

<?php include('../../footer.php')?>

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
                    axios.post("../../user/trend/170.html")
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
</body>
</html>
