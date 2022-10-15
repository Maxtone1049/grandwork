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
    <a href='../register' class='cmn-btn'>Register</a>
  <a href='../login' class='cmn-btn-active'>Login</a>
    </div>";
}
?>
<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/x-icon" href="../assets/images/logoIcon/favicon.png">
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/logoIcon/favicon.png" />
<link href="../../fonts.googleapis.com/css2b7d6.css?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<title> Profit Elite - Privacy Policy</title>
<meta name="title" Content="Profit Elite - Privacy Policy">
<meta name="description" content="Profit Elite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. It will grow beyond our imagination- and Profit Elite is built to be ready for whatever mining throws.">
<meta name="keywords" content="blog,Bitcoin,Ethereum,Tether,Binance Coin,Cardano,Polkadot,XRP,USD Coin,Filecoin,Klaytn,Elrond,user,payment,coin,litecoin,dogi,sales,report,PROELITE,Profit Elite,PROELITE mining,Profit Elite mining">
<link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Profit Elite - Privacy Policy">
<meta itemprop="name" content="Profit Elite - Privacy Policy">
<meta itemprop="description" content="">
<meta itemprop="image" content="../assets/images/seo/612d1ba9df6921630346153.png">
<meta property="og:type" content="website">
<meta property="og:title" content="Profit Elite">
<meta property="og:description" content="Profit Elite is an integral part of the cryptocurrency miner space. Profit Elite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. The Profit Elite allows you to instantly switch what you are mining, review earnings, withdraw and receive from the wallets, and much more.">
<meta property="og:image" content="../assets/images/seo/612d1ba9df6921630346153.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />
<meta property="og:url" content="privacy-policy-77.html">
<meta name="twitter:card" content="summary_large_image">
<link rel="stylesheet" href="./../assets/templates/basic/css/fontawesome-all.min.css">
<link rel="stylesheet" href="./../assets/templates/basic/css/line-awesome.min.css">
<link rel="stylesheet" href="./../assets/templates/basic/css/nice-select.css">
<link rel="stylesheet" href="./../assets/templates/basic/css/bootstrap.min.css">
<link rel="stylesheet" href="./../assets/templates/basic/css/swiper.min.css">
<link rel="stylesheet" href="./../assets/templates/basic/css/animate.css">
<link rel="stylesheet" href="./../assets/templates/basic/css/style.css">
<link rel="stylesheet" href="./../assets/templates/basic/css/custom.css">
<link rel="stylesheet" href="./../assets/templates/basic/css/fake-notification-min.css">
<link rel="stylesheet" type="text/css" href="./../assets/templates/basic/css/colora961.css?color=b2991b">

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-198044238-4"></script>
<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-198044238-4');
    </script>
<script src="../../cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
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
<a class="site-logo site-title" href="../."><img src="./../assets/images/logoIcon/logo.png" alt="site-logo"></a>
<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="fas fa-bars"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav main-menu ml-auto mr-auto">
<li><a href="./../." class="active">Home</a></li>
<li><a href="./../about-us">About</a></li>
<li><a href="./../how-it-works">How it Works</a></li>
<li><a href="./../contact">Contact</a></li>
<li><a href="./../verify/pin">Verify Pin</a></li>
<li><a href="./../pin-dispatcher">Dispatchers</a></li>
<li><a href="./../top-earners">Top Earners</a></li>
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
<section class="banner-section inner-banner-section bg-overlay-primary bg_img" data-background="./../assets/images/frontend/breadcrumb/6043507db922f1615024253.jpg">
<div class="container">
<div class="row justify-content-center align-items-center ml-b-30">
<div class="col-lg-10 text-center mrb-30">
<div class="banner-content">
<h2 class="title">Privacy Policy</h2>
<div class="breadcrumb-area">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="./../.">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="dashboard-section ptb-80">
<div class="container">
<div class="wb-break-all"><h3><b>What Information Do We Collect? </b></h3><p class="MsoNormal"></p><p></p>
<p class="MsoNormal"></p>
<p class="MsoNormal">We gather data from you when you register on our site,
submit a request, purchase any services, react to an overview, or round out a
structure. At the point when requesting any assistance or enrolling on our
site, as suitable, you might be approached to enter your: name, email address,
or telephone number. You may, nonetheless, visit our site anonymously. </p><p></p>
<p class="MsoNormal"></p><p> </p>
<h3><b>How Do We Protect Your Information? </b></h3><p class="MsoNormal"><b></b></p><p><b></b></p><b></b>
<p class="MsoNormal"></p><p> </p>
<p class="MsoNormal">All provided delicate/credit data is sent through Stripe.</p><p></p>
<p class="MsoNormal">After an exchange, your private data (credit cards, social
security numbers, financials, and so on) won't be put away on our workers. </p><p></p>
<p class="MsoNormal"></p><p> </p>
<h3><b>Do We Disclose Any Information To Outside Parties? </b></h3><p class="MsoNormal"><b></b></p><p><b></b></p><b></b>
<p class="MsoNormal"></p><p> </p>
<p class="MsoNormal">We don't sell, exchange, or in any case move to outside
gatherings by and by recognizable data. This does exclude confided in outsiders
who help us in working our site, leading our business, or adjusting you, since
those gatherings consent to keep this data private. We may likewise deliver
your data when we accept discharge is suitable to follow the law, implement our
site strategies, or ensure our own or others' rights, property, or wellbeing. </p><p></p>
<p class="MsoNormal"></p><p> </p>
<h3><b>Children's Online Privacy Protection Act Compliance </b></h3><p class="MsoNormal"><b></b></p><p><b></b></p><b></b>
<p class="MsoNormal"></p><p> </p>
<p class="MsoNormal">We are consistent with the prerequisites of COPPA
(Children's Online Privacy Protection Act), we don't gather any data from
anybody under 17 years old. Our site, items, and administrations are completely
coordinated to individuals who are in any event 17 years of age or more
established. </p><p></p>
<p class="MsoNormal"></p><p> </p>
<h3><b>Changes To Our Privacy Policy</b></h3><p class="MsoNormal"><b></b></p><p><b></b></p><b></b>
<p class="MsoNormal">If we decide to change our privacy policy, we will post
those changes on this page. </p><p></p>
<p class="MsoNormal"></p><p> </p>
<h3><b>How Long We Retain Your Information? </b></h3><p class="MsoNormal"></p><p></p>
<p class="MsoNormal"></p><p> </p>
<p class="MsoNormal">At the point when you register for our site, we cycle and
keep the information we have about you however long you don't erase the record
or withdraw yourself (subject to laws and guidelines). </p><p></p>
<p class="MsoNormal"></p><p> </p>
<h3><b>What We Don’t Do With Your Data </b></h3><p class="MsoNormal"></p><p></p>
<p class="MsoNormal"></p><p> </p>
<p class="MsoNormal">We don't and will never share, unveil, sell, or in any case
give your information to different organizations for the promotion of their
items or administrations.</p><p></p>
<p class="MsoNormal"></p><p> </p>
<p class="MsoNormal"></p><p> </p>
<p class="MsoNormal"></p><p> </p>
<p class="MsoNormal"></p><p> </p></div>
</div>
</div>
<?php include ('./../footer.php')?>
<script data-cfasync="false" src="./../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/templates/basic/js/jquery-3.3.1.min.js"></script>

<script src="./../assets/templates/basic/js/jquery-migrate-3.0.0.js"></script>

<script src="./../assets/templates/basic/js/bootstrap.min.js"></script>
<script src="./../assets/templates/basic/js/swiper.min.js"></script>

<script src="./../assets/templates/basic/js/jquery.nice-select.js"></script>

<script src="./../assets/templates/basic/js/chart.js"></script>

<script src="./../assets/templates/basic/js/wow.min.js"></script>

<script src="./../assets/templates/basic/js/particles.js"></script>

<script src="./../assets/templates/basic/js/main.js"></script>

<script src="./../assets/templates/basic/js/jquery.fake-notification.min.js"></script>
<link rel="stylesheet" href="./../assets/admin/css/iziToast.min.css">
<script src="./../assets/admin/js/iziToast.min.js"></script>
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

    'use strict';
    (function($){
        $(document).on("change", ".select-bar", function() {
            window.location.href = "./change/"+$(this).val() ;
        });

        $('.select-bar').val('en');
    })(jQuery)
</script>
</body>
</html>
