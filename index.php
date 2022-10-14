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
<title> Profit Ultimate - Home</title>
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
  } ?>
      
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
<section class="banner-section bg-overlay-primary bg_img" data-background="assets/images/frontend/banner/6040cb7e059681614859134.jpg">
<div class="container">
<div class="row justify-content-center align-items-center ml-b-30">
<div class="col-lg-10 text-center mrb-30">
<div class="banner-content">
<h2 class="title">ACHIEVE THE BEST HASHRATE</h2>
<p>Profit Ultimate is a Gold-backed digital mining application designed to be a highly secure platform design for future miners. Start mining and achieve the highest level of Hashrate.</p>
<div class="banner-btn justify-content-center">
<a href="register" class="cmn-btn py-3 px-5">Start Mining</a>
</div>
</div>
</div>
</div>
</div>
<div id="particles-js"></div>
</section>
<section class="work-section ptb-120">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 text-center">
<div class="section-header">
<h2 class="section-title">HOW Profit Ultimate WORKS?</h2>
<span class="title-border"></span>
<p>Learn about our work process. You need to follow the steps below to start your first mining.</p>
</div>
</div>
</div>
<div class="row work-content-area justify-content-center ml-b-30">
<div class="col-md-6 mrb-30">
<div class="work-content">
<div class="work-item-area ml-b-30">
<div class="work-item d-flex flex-wrap flex-row-reverse mrb-30">
<div class="work-icon">
1
<i class="las la-briefcase"></i> </div>
<div class="work-details work-details--style">
<h3 class="title">Buy a membership pin</h3>
<p>Contact one of our dispatch retailers to buy a membership pin for any plan/package you want to register with</p>
</div>
</div>
<div class="work-item d-flex flex-wrap flex-row-reverse mrb-30">
<div class="work-icon">
2
<i class="las la-highlighter"></i> </div>
<div class="work-details work-details--style">
<h3 class="title">Create Account</h3>
<p>Create a user profile for yourself using the register option and get ready to mining.</p>
</div>
</div>
 </div>
</div>
</div>
<div class="col-md-6 mrb-30">
<div class="work-content work-content--style">
<div class="work-item-area work-item-area-two ml-b-30">
<div class="work-item d-flex flex-wrap mrb-30">
<div class="work-icon">
3
<i class="las la-coins"></i> </div>
<div class="work-details work-details--style">
<h3 class="title">Start Mining</h3>
<p>Now you are ready to mine! Increase the mining power on the fly for all the coins using Profit Ultimate.</p>
</div>
</div>
<div class="work-item d-flex flex-wrap mrb-30">
<div class="work-icon">
4
<i class="las la-wallet"></i> </div>
<div class="work-details work-details--style">
<h3 class="title">Get Mining Output</h3>
<p>You will periodically receive mining output from your designated wallet. Try our Profit Ultimate mining platform now!</p>
</div>
</div>
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
<h2 class="title">About Profit Ultimate</h2>
<span class="title-border"></span>
<p>Profit Ultimate is a dual-purpose platform made up of subsidiaries that provide an opportunity to utilize PUltimate Virtual mining technique, which is intended for evaluating mining revenue and as well as conversion of PUltimate units to real word money and cash out as at when due.</p>
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
<section class="faq-section ptb-120">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 text-center">
<div class="section-header">
<h2 class="title">Profit Ultimate FREQUENTLY ASKED QUESTIONS</h2>
<span class="title-border"></span>
<p>Here you can find our top frequently asked questions. Please let us know if you have any queries regarding our mining platform and FAQs.</p>
</div>
</div>
</div>
<div class="row justify-content-center ml-b-30">
<div class="col-lg-6 mrb-30">
<div class="faq-wrapper">
<div class="faq-item  active open ">
<h3 class="faq-title"><span class="title">How much unit of PUltimate required for registration in naira?</span><span class="right-icon"></span></h3>
<div class="faq-content">
<p>3000(0.3)/5000(0.5)</p>
</div>
</div>
<div class="faq-item ">
<h3 class="faq-title"><span class="title">After registration, what will I do to earn?</span><span class="right-icon"></span></h3>
<div class="faq-content">
<p>Profit Ultimate is a dual-purpose platform, it&#039;s either you mine to earn or earn through affiliate marketing.</p>
</div>
</div>
<div class="faq-item ">
<h3 class="faq-title"><span class="title">If I don’t have referrals, Will I earn?</span><span class="right-icon"></span></h3>
<div class="faq-content">
<p>Absolutely, You will earn. Profit Ultimate isn&#039;t a read news and comment- to-earn platform, and as such, no compulsory referral needed.</p>
</div>
</div>
<div class="faq-item ">
<h3 class="faq-title"><span class="title">How do I withdraw my earnings.</span><span class="right-icon"></span></h3>
<div class="faq-content">
<p>your earnings would be credited to your account after attaining Profit Ultimate minimum withdrawal threshold.</p>
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
<p>You can withdraw your earnings when you attain Profit Ultimate withdrawal threshold.</p>
</div>
</div>
<div class="faq-item ">
<h3 class="faq-title"><span class="title">What is the difference between Profit Ultimate and all these read news and comment to earn platforms?</span><span class="right-icon"></span></h3>
<div class="faq-content">
<p>Profit Ultimate has a functional cash reservoir, they do not depend on Google Adsense before paying her members. Amount of PUltimate supply daily is what they can afford to pay. The company is monitised in different ways to ensure consistent mining cash flow.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="subscribe-section call-to-action-section pd-t-60 pd-b-60">
<div class="container">
<div class="call-to-action-area">
<div class="row justify-content-center align-items-center">
<div class="col-lg-8 text-center">
<div class="call-to-action-content">
<h2 class="title">Subscribe to Our Newsletter to Get All Latest News</h2>
<form class="call-to-action-form">
<div class="row justify-content-center">
<div class="col-lg-12">
<input type="email" name="email" placeholder="Your Email Adress">
<button type="button" class="submit-btn subscribe-btn w-auto mt-0"><i class="fas fa-paper-plane"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="order-section pd-t-120 pd-b-120">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 text-center">
<div class="section-header">
<h2 class="section-title">Transaction log</h2>
<span class="title-border"></span>
<p>Our Latest Registrations And Withdraws </p>
</div>
</div>
</div>
<div class="row justify-content-center ml-b-30">
<div class="col-lg-6 mrb-30">
<div class="order-header float-left">
<h3 class="title">Latest Registrations</h3>
</div>
<div class="order-table-area">
<table class="order-table">
<thead>
<tr>
<th>User</th>
<th>Plan</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row" class="d-flex flex-wrap align-items-center">
<div class="user-img">
<img src="placeholder-image/500x500.jpg" alt="user">
</div>
<span>Peter Madu</span>
</th>
<td style="text-align: right;">Skyway Gold</td>
</tr>
<tr>
<th scope="row" class="d-flex flex-wrap align-items-center">
<div class="user-img">
<img src="placeholder-image/500x500.jpg" alt="user">
</div>
<span>ODETUNJI VICTORIA FUNMILOLA</span>
</th>
<td style="text-align: right;">Skyway Gold</td>
</tr>
<tr>
<th scope="row" class="d-flex flex-wrap align-items-center">
<div class="user-img">
<img src="placeholder-image/500x500.jpg" alt="user">
</div>
<span>Adebayo Oluwapelumi Boluwatife</span>
</th>
<td style="text-align: right;">Skyway Gold</td>
</tr>
<tr>
<th scope="row" class="d-flex flex-wrap align-items-center">
<div class="user-img">
<img src="placeholder-image/500x500.jpg" alt="user">
</div>
<span>ADEBAYO OLAPEJU FOLUKE</span>
</th>
<td style="text-align: right;">Skyway Gold</td>
</tr>
<tr>
<th scope="row" class="d-flex flex-wrap align-items-center">
<div class="user-img">
<img src="placeholder-image/500x500.jpg" alt="user">
</div>
<span>Tomisin Joseph Owoseni</span>
</th>
<td style="text-align: right;">Skyway Gold</td>
</tr>
</tbody>
 </table>
</div>
</div>
<div class="col-lg-6 mrb-30">
<div class="order-header float-right">
<h3 class="title">Latest Withdraws</h3>
</div>
<div class="order-table-area">
<table class="order-table">
<thead>
<tr>
<th>User</th>
<th>Amount</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row" class="d-flex flex-wrap align-items-center">
<div class="user-img">
<img src="assets/images/user/profile/1643177200_haloj.jpg" alt="user">
</div>
<span>Henry Edegua</span>
</th>
<td>15000</td>
</tr>
<tr>
<th scope="row" class="d-flex flex-wrap align-items-center">
<div class="user-img">
<img src="assets/images/user/profile/1635663991_Favour.jpg" alt="user">
</div>
<span>Favour A</span>
</th>
<td>19000</td>
</tr>
<tr>
<th scope="row" class="d-flex flex-wrap align-items-center">
<div class="user-img">
<img src="placeholder-image/500x500.jpg" alt="user">
</div>
<span>Oluwatimilehin Olodude</span>
</th>
<td>12600</td>
</tr>
<tr>
<th scope="row" class="d-flex flex-wrap align-items-center">
<div class="user-img">
<img src="placeholder-image/500x500.jpg" alt="user">
</div>
<span>Oluwatimilehin Olodude</span>
</th>
<td>28000</td>
</tr>
<tr>
<th scope="row" class="d-flex flex-wrap align-items-center">
<div class="user-img">
<img src="assets/images/user/profile/1646395380_Preciouslove123.jpg" alt="user">
</div>
<span>Precious Okoawoh</span>
</th>
<td>15000</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>
<section class="call-to-action-section pd-t-60 pd-b-60">
<div class="container">
<div class="call-to-action-area">
<div class="row justify-content-between align-items-center ml-b-30">
<div class="col-lg-8 mrb-30">
<div class="call-to-action-content">
<h2 class="title">Ready To Start Your Mining</h2>
<p>Just create an account on our site and start your first mining.</p>
</div>
</div>
<div class="col-lg-4 mrb-30">
<div class="call-to-action-btn">
<a href="register" class="cmn-btn">Start Mining</a>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="service-section ptb-120">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 text-center">
<div class="section-header">
<h2 class="section-title">OUR SERVICES</h2>
<span class="title-border"></span>
<p>We provide the best services to our miners, be connected with us, and get profited. </p>
</div>
</div>
</div>
<div class="row justify-content-center ml-b-30">
<div class="col-lg-4 col-md-6 col-sm-6 mrb-30">
<div class="service-item text-center">
<div class="service-icon">
<i class="las la-headset"></i> </div>
<div class="service-content">
<h3 class="title">24/7 Support</h3>
<p>We are ready to answer all your questions and advise you 24/7. Feel free to reach us anytime.</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 mrb-30">
<div class="service-item text-center">
<div class="service-icon">
<i class="fab fa-connectdevelop"></i> </div>
<div class="service-content">
<h3 class="title">Instant Connect</h3>
<p>Our team of experts always available and feels happy to help you. Please mail if you have issue</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 mrb-30">
<div class="service-item text-center">
<div class="service-icon">
<i class="las la-money-bill-wave-alt"></i> </div>
<div class="service-content">
<h3 class="title">Easy Withdrawal</h3>
<p>Our withdrawal process takes only 24 hours. We are highly transparent about transactions.</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 mrb-30">
<div class="service-item text-center">
<div class="service-icon">
<i class="las la-chart-area"></i> </div>
<div class="service-content">
<h3 class="title">Detailed Statistics</h3>
<p>We make detailed statistics of your transaction, also you will get all the mining logs.</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 mrb-30">
<div class="service-item text-center">
<div class="service-icon">
<i class="fab fa-bitcoin"></i> </div>
<div class="service-content">
<h3 class="title">Cloud Mining</h3>
<p>We provide the best cloud mining service and give rewards to our miners on a daily basis.</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 mrb-30">
<div class="service-item text-center">
<div class="service-icon">
<i class="fab fa-accusoft"></i> </div>
<div class="service-content">
<h3 class="title">Data Protection</h3>
<p>We constantly work on improving our system and the level of our security to minimize any risks.</p>
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
<h2 class="section-title">Why Choose Profit Ultimate?</h2>
<span class="title-border"></span>
<p>As an PUltimate MINER, you get paid as you mine per minute without having to bring people before earning. We are combining all the key aspects of conducting an efficient cryptocurrency mining activity. From building a highly efficient data center to providing a robust mining system for our users.</p>
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
<!-- <section class="blog-section py-5">
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
<h3 class="title"><a href="trend/179/profitultimate-is-the-most-stable-virtual-mining-platform">Profit Ultimate is the most stable virtual mining platform in Nigeria.</a></h3>
<p> Profit Ultimate has proven to be the most stable/reliable virtual mining platform in N...</p>
<div class="blog-btn">
<a href="trend/179/profitultimate-is-the-most-stable-virtual-mining-platform" class="custom-btn">Read More <i class="fas fa-angle-double-right"></i></a>
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
<h3 class="title"><a href="trend/178/profitultimate-is-a-rock-solid-project-that-would-never-wavers">Profit Ultimate is a Rock solid project that would never wavers!</a></h3>
<p> If you've joined other income platforms; it's pertinent to lend credence to the...</p>
<div class="blog-btn">
<a href="trend/178/profitultimate-is-a-rock-solid-project-that-would-never-wavers" class="custom-btn">Read More <i class="fas fa-angle-double-right"></i></a>
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
</section> -->

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
<script>
        'use strict';
        (function($){
            //ADD TO CART
        $(document).on('click','.subscribe-btn' , function(){
            var email    = $('input[name="email"]').val();

            $.ajax({
                headers: {"X-CSRF-TOKEN": "BwQmT3eviYgErFYse8rAotcKMYaOaIMXubjr2o23",},
                url:"https://afrigoldm.com/subscribe",
                method:"POST",
                data:{email:email},
                success:function(response)
                {
                    console.log(response);
                    if(response.success) {
                        notify('success', response.success);
                    }else{
                        notify('error', response);
                    }
                }
            });

        });
        })(jQuery)
    </script>
<script>
        'use strict';
        particlesJS('particles-js',{
            "particles": {
            "number": {
                "value": 80,
                "density": {
                "enable": true,
                "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                "width": 0,
                "color": "#000000"
                },
                "polygon": {
                "nb_sides": 5
                },
                "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
                }
            },
            "size": {
                "value": 5,
                "random": true,
                "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 3,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
                }
            }
            },
            "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                "enable": true,
                "mode": "repulse"
                },
                "onclick": {
                "enable": true,
                "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                "distance": 400,
                "line_linked": {
                    "opacity": 1
                }
                },
                "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
                },
                "repulse": {
                "distance": 200
                },
                "push": {
                "particles_nb": 4
                },
                "remove": {
                "particles_nb": 2
                }
            }
            },
            "retina_detect": true,
            "config_demo": {
            "hide_card": false,
            "background_color": "#b61924",
            "background_image": "",
            "background_position": "50% 50%",
            "background_repeat": "no-repeat",
            "background_size": "cover"
        }
    })
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
</body>
</html>
