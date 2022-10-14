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
<title> Profit Ultimate - Pin Dispatcher</title>
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
<h2 class="title">Pin Dispatchers</h2>
<div class="breadcrumb-area">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Pin Dispatchers</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="contact-section py-5">
<div class="container">
<div class="col-md-8 m-auto">
<h4 class="text-center dispatch-text">
Below embodies Profit Ultimate trusted secret strings dispatchers.
You can contact any of them for your PULTIMATE activation code,
and you would be attended to promptly.
</h4>
<div class="text-center mb-5 musers">
<small class="text-danger text-center">For mobile users: scroll left to see the other columns of the dispatchers table </small>
</div>
<table class="table table-responsive-stac table-responsive-sm text-center">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Mobile</th>
<th scope="col">WhatsApp</th>
<th scope="col">Call</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td class="disname">PULTIMATE</td>
<td class="disname">08127161517</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348127161517&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08127161517">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">2</th>
<td class="disname">Profit Ultimate</td>
<td class="disname">09075716103</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2349075716103&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:2349075716103">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">3</th>
<td class="disname">MARVELOUS</td>
<td class="disname">08071793403</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348071793403&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:2348071793403">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">4</th>
<td class="disname">daviesakeem</td>
<td class="disname">08127161517</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348127161517&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08127161517">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">5</th>
<td class="disname">Succylove</td>
<td class="disname">08110001096</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348110001096&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08110001096">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">6</th>
<td class="disname">Prospere</td>
<td class="disname">08115736776</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348115736776&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08115736776">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">7</th>
<td class="disname">Jesusbaby</td>
<td class="disname">09024021659</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2349024021659&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:09024021659">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">8</th>
<td class="disname">favour</td>
<td class="disname">08165358971</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348165358971&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08165358971">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">9</th>
<td class="disname">Grasong</td>
<td class="disname">09078605086</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2349078605086&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:09078605086">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">10</th>
<td class="disname">mabdell</td>
<td class="disname">09060213811</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2349060213811&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
 <img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:09060213811">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">11</th>
<td class="disname">vizon</td>
<td class="disname">09090343477</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2349090343477&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:09090343477">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">12</th>
<td class="disname">Nkay</td>
<td class="disname">09078891730</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2349078891730&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:09078891730">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">13</th>
<td class="disname">Hussaini55</td>
<td class="disname">09010288356</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2349010288356&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:09010288356">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">14</th>
<td class="disname">FAVOUR1</td>
<td class="disname">08086758220</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348086758220&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08086758220">
 <img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">15</th>
<td class="disname">Lyncia</td>
<td class="disname">07032736923</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2347032736923&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:07032736923">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">16</th>
<td class="disname">DAMSELCRUZ</td>
<td class="disname">09023346542</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2349023346542&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:09023346542">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">17</th>
<td class="disname">gracesie</td>
<td class="disname">08162918135</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348162918135&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08162918135">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">18</th>
<td class="disname">victory</td>
<td class="disname">08157502033</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348157502033&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08157502033">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">19</th>
 <td class="disname">zionmiles</td>
<td class="disname">08101046246</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348101046246&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08101046246">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">20</th>
<td class="disname">kansi</td>
<td class="disname">09073282229</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2349073282229&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:09073282229">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">21</th>
<td class="disname">ekpesidung</td>
<td class="disname">07019649457</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2347019649457&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:07019649457">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">22</th>
<td class="disname">Vickychi</td>
<td class="disname">08140053819</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348140053819&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08140053819">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">23</th>
<td class="disname">Nora</td>
<td class="disname">08130419494</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348130419494&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08130419494">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">24</th>
<td class="disname">Gracechild</td>
<td class="disname">09064532755</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2349064532755&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:09064532755">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">25</th>
<td class="disname">MCASH247</td>
<td class="disname">08147001966</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348147001966&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08147001966">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">26</th>
<td class="disname">SMARD TV</td>
<td class="disname">08121361882</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348121361882&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08121361882">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">27</th>
<td class="disname">EMEM01</td>
<td class="disname">08167647921</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348167647921&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08167647921">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
<tr>
<th scope="row">28</th>
<td class="disname">EMMYBEST TV</td>
<td class="disname">08132544189</td>
<td>
<a href="https://api.whatsapp.com/send/?phone=2348132544189&amp;text=Hello,+I+want+to+purchase+ProfitUltimate+activation+code.+Hope+you+are+available?&amp;app_absent=0" target="_blank">
<img class="wa-image" src="assets/templates/basic/images/whatsapp.png" title="Click to chat">
</a>
</td>
<td>
<a href="tel:08132544189">
<img class="wa-image" src="assets/templates/basic/images/phone.png" title="Click to call">
</a>
</td>
</tr>
</tbody>
</table>
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
</body>

</html>
