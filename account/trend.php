<?php
session_start();
error_reporting(0);
include('../includes/dbconnect.php');
if (strlen($_SESSION['obcsuid']==0)) {
  header('location:../logout.php');
  } else{

$uid=$_SESSION['obcsuid'];
$sql="SELECT * FROM  users where ID=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{  $cnt=$cnt+1;}
}             
}
?>
<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../assets/images/logoIcon/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/logoIcon/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>PROFIT ULTIMATE - Sponsored Posts</title>
    <meta name="title" Content="PROFIT ULTIMATE - Sponsored Posts">
    <meta name="description" content="PROFIT ULTIMATE is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. It will grow beyond our imagination- and PROFIT ULTIMATE is built to be ready for whatever mining throws.">
    <meta name="keywords" content="blog,Bitcoin,Ethereum,Tether,Binance Coin,Cardano,Polkadot,XRP,USD Coin,Filecoin,Klaytn,Elrond,user,payment,coin,litecoin,dogi,sales,report,Profit Ultimate,PROFIT ULTIMATE,Profit Ultimate mining,PROFIT ULTIMATE mining">
    <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="PROFIT ULTIMATE - Sponsored Posts">
    <meta itemprop="name" content="PROFIT ULTIMATE - Sponsored Posts">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="../assets/images/seo/612d1ba9df6921630346153.png">
    <meta property="og:type" content="website">
    <meta property="og:title" content="PROFIT ULTIMATE">
    <meta property="og:description" content="PROFIT ULTIMATE is an integral part of the cryptocurrency miner space. PROFIT ULTIMATE is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. The PROFIT ULTIMATE allows you to instantly switch what you are mining, review earnings, withdraw and receive from the wallets, and much more.">
    <meta property="og:image" content="../assets/images/seo/612d1ba9df6921630346153.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="trend">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="stylesheet" href="../assets/templates/basic/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/templates/basic/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/templates/basic/css/nice-select.css">
    <link rel="stylesheet" href="../assets/templates/basic/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/templates/basic/css/animate.css">
    <link rel="stylesheet" href="../assets/templates/basic/css/style.css">
    <link rel="stylesheet" href="../assets/templates/basic/css/custom.css">
    <link rel="stylesheet" type="text/css" href="../assets/templates/basic/css/color.php?color=b2991b">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-198044238-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-198044238-4');
    </script>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
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
            <div class="header-bottom-area">
                <div class="ads mb-3">
                    <a href="https://vokprime.com/are-you-a-millionaire-yet-no-read-this/" target="_blank">
                        <img src="https://vokprime.com/wp-content/uploads/2021/12/Corporate.jpg" alt="Make Money" title="Make more MONEY">
                    </a>
                </div>
                <div class="container">
                    <div class="header-menu-content">
                        <nav class="navbar navbar-expand-lg p-0">
                            <a class="site-logo site-title" href="../.">
                                <img src="../assets/images/logoIcon/logo.png" alt="site-logo">
                            </a>
                            <ul class="ml-auto">
                                <li>
                                    <select class="select-bar nic-select">
                                        <option value="english">English</option>
                                    </select>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="banner-section inner-banner-section bg-overlay-primary bg_img" data-background="../assets/images/frontend/breadcrumb/6043507db922f1615024253.jpg">
        <div class="container">
            <div class="row justify-content-center align-items-center ml-b-30">
                <div class="col-lg-10 text-center mrb-30">
                    <div class="banner-content">
                        <h2 class="title">Sponsored Posts</h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="dashboard">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Sponsored Posts</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dashboard-section py-4">
        <div class="container">
        <?php include ('sidebar.php')?>
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
                                    <img src="../assets/images/frontend/blog/thumb_62c72bef6f3e51657220079.jpg" alt="Sponsored">
                                    <span class="overlay-date">07, Jul</span>
                                </div>
                                <div class="blog-content">
                                    <h3 class="title">
                                        <a href="../trend/179/profitultimate-is-the-most-stable-virtual-mining-platform-in-nigeria">PROFIT ULTIMATE is the most stable virtual mining platform in Nigeria.</a>
                                    </h3>
                                    <p>PROFIT ULTIMATE has proven to be the most stable/reliable virtual mining platform in N...</p>
                                    <div class="blog-btn">
                                        <a href="../trend/179/profitultimate-is-the-most-stable-virtual-mining-platform-in-nigeria" class="custom-btn">
                                            Read More <i class="fas fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mrb-30">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img src="../assets/images/frontend/blog/thumb_62ab6a9c194d91655401116.jpg" alt="Sponsored">
                                    <span class="overlay-date">16, Jun</span>
                                </div>
                                <div class="blog-content">
                                    <h3 class="title">
                                        <a href="../trend/178/profitultimate-is-a-rock-solid-project-that-would-never-wavers">PROFIT ULTIMATE is a Rock solid project that would never wavers!</a>
                                    </h3>
                                    <p>If you've joined other income platforms; it's pertinent to lend credence to the...</p>
                                    <div class="blog-btn">
                                        <a href="../trend/178/profitultimate-is-a-rock-solid-project-that-would-neever-wavers" class="custom-btn">
                                            Read More <i class="fas fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mrb-30">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img src="../assets/images/frontend/blog/thumb_6273eeabea3a91651764907.jpg" alt="Sponsored">
                                    <span class="overlay-date">05, May</span>
                                </div>
                                <div class="blog-content">
                                    <h3 class="title">
                                        <a href="../trend/175/withdraw-and-get-paid-in-usdt-optional">WITHDRAW AND GET PAID IN USDT (OPTIONAL)</a>
                                    </h3>
                                    <p>You can now withdraw and get paid in USDT with or without referals!
                                        Since our p...</p>
                                    <div class="blog-btn">
                                        <a href="../trend/175/withdraw-and-get-paid-in-usdt-optional" class="custom-btn">
                                            Read More <i class="fas fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="ads mb-3">
                <a href="https://bit.ly/3cCpvGt" target="_blank">
                    <img src="https://vokprime.com/wp-content/uploads/2021/12/payment.jpg" alt="Make Money" title="Make more MONEY">
                </a>
            </div>
        </div>
    </section>


    <?php
    include('inc/footer.php');
    ?>
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../assets/templates/basic//js/jquery-3.3.1.min.js"></script>
    <script src="../assets/templates/basic//js/jquery-migrate-3.0.0.js"></script>
    <script src="../assets/templates/basic//js/bootstrap.min.js"></script>
    <script src="../assets/templates/basic//js/jquery.nice-select.js"></script>
    <script src="../assets/templates/basic//js/chart.js"></script>
    <script src="../assets/templates/basic//js/wow.min.js"></script>
    <script src="../assets/templates/basic//js/particles.js"></script>
    <script src="../assets/templates/basic//js/main.js"></script>
    <link rel="stylesheet" href="../assets/admin/css/iziToast.min.css">
    <script src="../assets/admin/js/iziToast.min.js"></script>
    <script>
        "use strict";

        function notify(status, message) {
            if (typeof message == 'string') {
                iziToast[status]({
                    message: message,
                    position: "topRight"
                });
            } else {
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
        const box = document.getElementById('muskdiv');
        const direct = document.getElementById('direct');

        function handleRadioClick() {
            if (document.getElementById('sizeWeight').checked) {
                box.style.display = 'block';
                direct.style.display = 'none';
            } else if (document.getElementById('sizeDimensions').checked) {
                box.style.display = 'none';
                direct.style.display = 'block';
            } else {
                box.style.display = 'none';
                direct.style.display = 'none';
            }
        }

        const radioButtons = document.querySelectorAll('input[name="sizeBy"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('click', handleRadioClick);
        });
    </script>
</body>

</html>