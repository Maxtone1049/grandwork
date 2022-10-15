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
<title> Profit Elite - Disclaimer</title>
<meta name="title" Content="ProfitElite - Disclaimer">
<meta name="description" content="ProfitElite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. It will grow beyond our imagination- and ProfitElite is built to be ready for whatever mining throws.">
<meta name="keywords" content="blog,Bitcoin,Ethereum,Tether,Binance Coin,Cardano,Polkadot,XRP,USD Coin,Filecoin,Klaytn,Elrond,user,payment,coin,litecoin,dogi,sales,report,PROELITE,ProfitElite,ProfitElite mining,ProfitElite mining">
<link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="ProfitElite - Disclaimer">
<meta itemprop="name" content="ProfitElite - Disclaimer">
<meta itemprop="description" content="">
<meta itemprop="image" content="../assets/images/seo/612d1ba9df6921630346153.png">
<meta property="og:type" content="website">
<meta property="og:title" content="ProfitElite">
<meta property="og:description" content="ProfitElite is an integral part of the cryptocurrency miner space. ProfitElite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. The ProfitElite allows you to instantly switch what you are mining, review earnings, withdraw and receive from the wallets, and much more.">
<meta property="og:image" content="../assets/images/seo/612d1ba9df6921630346153.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />
<meta property="og:url" content="disclaimer-87.html">
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
<a class="site-logo site-title" href="../index.html"><img src="../assets/images/logoIcon/logo.png" alt="site-logo"></a>
<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="fas fa-bars"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav main-menu ml-auto mr-auto">
<li><a href="../index.html" class="active">Home</a></li>
<li><a href="../about-us.html">About</a></li>
<li><a href="../how-it-works.html">How it Works</a></li>
<li><a href="../contact.html">Contact</a></li>
<li><a href="../verify/pin.html">Verify Pin</a></li>
 <li><a href="../pin-dispatcher.html">Dispatchers</a></li>
<li><a href="../top-earners.html">Top Earners</a></li>
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
<h2 class="title">Disclaimer</h2>
<div class="breadcrumb-area">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="../index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Disclaimer</li>
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
<div class="wb-break-all"><p class="MsoNormal">MEMBER EXPRESSLY AGREES THAT USE OF THE SERVICE IS AT
MEMBERS SOLE RISK. THE SERVICE IS PROVIDED ON TO THE MAXIMUM EXTENT ALLOWED BY
APPLICABLE NIGERIAN LAW, PROELITE EXPRESSLY DISCLAIMS ALL WARRANTIES OF ANY KIND,
EXPRESS OR IMPLIED BY LAW, CUSTOM OR OTHERWISE, INCLUDING WITHOUT LIMITATION
ANY WARRANTY OF MERCHANTABILITY, SATISFACTORY QUALITY, FITNESS FOR A PARTICULAR
PURPOSE OR NON-INFRINGEMENT. PROELITE MAKES NO WARRANTY REGARDING ANY GOODS OR
SERVICES PURCHASED OR OBTAINED THROUGH THE PROGRAM OR ANY TRANSACTIONS ENTERED
INTO THROUGH THE PROGRAM.</p>
<p class="MsoNormal">TO THE MAXIMUM EXTENT ALLOWED BY APPLICABLE NIGERIAN LAW,
NEITHER PROELITE NOR ANY OF ITS MEMBERS, SUBSIDIARIES, PUBLISHERS, SERVICE
PROVIDERS, LICENSORS, OFFICERS, DIRECTORS OR EMPLOYEES SHALL BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF
OR RELATING TO THIS AGREEMENT, RESULTING FROM THE USE OR THE INABILITY TO USE
THE SERVICE OR FOR THE COST OF PROCUREMENT OF SUBSTITUTE GOODS AND SERVICES OR
RESULTING FROM ANY GOODS OR SERVICES PURCHASED OR OBTAINED OR MESSAGES RECEIVED
OR TRANSACTIONS ENTERED INTO THROUGH THE PROGRAM OR RESULTING FROM UNAUTHORIZED
ACCESS TO OR ALTERATION OF USERS TRANSMISSIONS OR DATA, INCLUDING BUT NOT
LIMITED TO, DAMAGES FOR LOSS OF PROFITS, USE, DATA OR OTHER INTANGIBLE, EVEN IF
SUCH PARTY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>
<p class="MsoNormal">To prevent unauthorized access, maintain data accuracy, and
ensure the correct use of information, PROELITE uses appropriate industry
standard procedures to safeguard the confidentiality of Members personal
information, such as SSL, firewall, encryption, token authentication,
application proxies, monitoring technology, and adaptive analysis of the Websites
traffic to track abuse of the PROELITE Website and its data. However, no data
transmitted over the Internet can be 100% secure. As a result, while PROELITEm
strives to protect its members personal information, ProfitElite cannot guarantee
the security of any information that Members transmit to or from the
participating advertisers/merchants and Member does so at his/her own risk.</p>
<p class="MsoNormal">This Agreement constitutes the entire Agreement between
Member and PROELITE in connection with general membership in PROELITE and
supersedes all prior agreements between the parties regarding the subject
matter contained herein. If any provision of this AGREEMENT is found invalid or
unenforceable, that provision will be enforced to the maximum extent
permissible, and the other provisions of this AGREEMENT will remain in force.
Failure of either party to exercise or enforce any of its rights under this
AGREEMENT, within two (2) months the cause arose, will act as a waiver of such
rights. In the event of any dispute or need for interpretation or enforcement
of terms, arising out of this agreement, parties shall refer to arbitration
before litigation.</p>
</div>
</div>
</div>
<?php include ('../footer.php')?>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/templates/basic/js/jquery-3.3.1.min.js"></script>

<script src="../assets/templates/basic/js/jquery-migrate-3.0.0.js"></script>

<script src="../assets/templates/basic/js/bootstrap.min.js"></script>
<script src="../assets/templates/basic/js/swiper.min.js"></script>

<script src="../assets/templates/basic/js/jquery.nice-select.js"></script>

<script src="../assets/templates/basic/js/chart.js"></script>

<script src="../assets/templates/basic/js/wow.min.js"></script>

<script src="../assets/templates/basic/js/particles.js"></script>

<script src="../assets/templates/basic/js/main.js"></script>

<script src="../assets/templates/basic/js/jquery.fake-notification.min.js"></script>
<link rel="stylesheet" href="../assets/admin/css/iziToast.min.css">
<script src="../assets/admin/js/iziToast.min.js"></script>
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
