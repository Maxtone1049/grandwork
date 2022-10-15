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
<title> Profit Elite - Terms of Service</title>
<meta name="title" Content="Profit Elite - Terms of Service">
<meta name="description" content="Profit Elite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. It will grow beyond our imagination- and Profit Elite is built to be ready for whatever mining throws.">
<meta name="keywords" content="blog,Bitcoin,Ethereum,Tether,Binance Coin,Cardano,Polkadot,XRP,USD Coin,Filecoin,Klaytn,Elrond,user,payment,coin,litecoin,dogi,sales,report,Profit Elite,Profit Elite,Profit Elite mining,Profit Elite mining">
<link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Profit Elite - Terms of Service">
<meta itemprop="name" content="Profit Elite - Terms of Service">
<meta itemprop="description" content="">
<meta itemprop="image" content="../assets/images/seo/612d1ba9df6921630346153.png">
<meta property="og:type" content="website">
<meta property="og:title" content="Profit Elite">
<meta property="og:description" content="Profit Elite is an integral part of the cryptocurrency miner space. Profit Elite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. The Profit Elite allows you to instantly switch what you are mining, review earnings, withdraw and receive from the wallets, and much more.">
<meta property="og:image" content="../assets/images/seo/612d1ba9df6921630346153.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />
<meta property="og:url" content="terms-of-service-78.html">
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
<section class="banner-section inner-banner-section bg-overlay-primary bg_img" data-background="./assets/images/frontend/breadcrumb/6043507db922f1615024253.jpg">
<div class="container">
<div class="row justify-content-center align-items-center ml-b-30">
<div class="col-lg-10 text-center mrb-30">
<div class="banner-content">
<h2 class="title">Terms of Service</h2>
<div class="breadcrumb-area">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="../index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Terms of Service</li>
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
<div class="wb-break-all">
<p class="MsoNormal"><b>TERMS OF SERVICE</b></p>
<p class="MsoNormal"><b>Introduction </b></p>
<p class="MsoNormal">The following Terms and Conditions control your membership
on Profit Elite  You agree that you have read and understand this
Agreement  and that your membership on Profit Elite shall be subject to the
following Terms and Conditions between you Profit Elite MINING PLATFORM. </p>
<p class="MsoNormal">These Terms and Conditions may be modified at any time by
Profit Elite Administrators without notice. Please review them from time to time
since your ongoing use is subject to the terms and conditions as modified. Your
continued participation in Profit Elite after such modification shall be deemed to
be your acceptance of any such modification. If you do not agree to these Terms
and Conditions, please do not register to become a member of Profit Elite.</p>
<p class="MsoNormal"><b>Terms of Participation </b></p>
<p class="MsoNormal">Member must be 18 years of age or older to participate.
Members must provide Profit Elite with accurate, complete and updated
registration information, including but not limited to an accurate name,
mailing address and email address. </p>
<p class="MsoNormal">To the full extent allowed by applicable law, Profit Elite at
its sole discretion and for any or no reason may refuse to accept applications
for membership. </p>
<p class="MsoNormal"> </p>
<p class="MsoNormal">Members may not:</p>
<p class="MsoListParagraphCxSpFirst" style="margin-left:0.75in;text-indent:-0.5in;"><span><span>i.<span style="font:7pt 'Times New Roman';">                    
</span></span></span>Activate or use more than one Member account. </p>
<p class="MsoListParagraphCxSpMiddle" style="margin-left:0.75in;text-indent:-0.5in;"><span><span>ii.<span style="font:7pt 'Times New Roman';">                  
</span></span></span>Select or use an Email Address of another person.
</p>
<p class="MsoListParagraphCxSpMiddle" style="margin-left:0.75in;text-indent:-0.5in;"><span><span>iii.<span style="font:7pt 'Times New Roman';">                
</span></span></span>Use a name subject to rights of another person
without authorization from that person.</p>
<p class="MsoListParagraphCxSpLast" style="margin-left:0.75in;text-indent:-0.5in;"><span><span>iv.<span style="font:7pt 'Times New Roman';">                 
</span></span></span>Use a false or misleading name (Except for
privacy), mailing address, or email address to activate or use a member
account. </p>
<p class="MsoNormal">By signing up for the Profit Elite, member is opting-in to
receive other special offer emails from Profit Elite. If you do not wish to
receive these emails, you may cancel your account anytime. </p>
<p class="MsoNormal">Profit Elite reserves the right to track Member activity by
both IP Address as well as individual browser activity. </p>
<p class="MsoNormal">Member agrees not to abuse his or her membership privileges
by acting in a manner inconsistent with this Agreement. </p>
<p class="MsoNormal"> </p>
<p class="MsoNormal">Member agrees not to attempt to earn through other means
than the legitimate channels authorized by Profit Elite. </p>
<p class="MsoNormal">Member agrees not to participate in any fraudulent behavior
of any kind.</p>
<p class="MsoNormal">Spamming is strictly prohibited. Any spamming done to
advertise AFGOLD will result in immediate termination of your account and a
forfeiture of your account earning balance. Incidents will be dealt with on a case-by-case
basis. </p>
<p class="MsoNormal">Refund Policy: As we are offering non-tangible virtual
digital goods which is form of registration fee , we do not generally issue
refunds after the purchase Of Profit Elite UNIT has been made. Please note that by
purchasing any of the AFGOLD UNITS , you agree to the no Refund Policy.</p>
<p class="MsoNormal"><b>Membership activities, Mining, trend post sharing and
recruiting: </b></p>
<p class="MsoNormal">Administrators, Editors and Moderators reserve the right to
approve or disapprove contents or comments posted on the Profit Elite Forum. As an
AFGOLD MINER, you will only mine and get a revenue shared paid to your bank
account when you abide by the following rules: </p>
<p class="MsoNormal">TREND POST sharing must correspond with the post date and
must be shared as recommended.</p>
<p class="MsoNormal"><b>Payment: </b></p>
<p class="MsoNormal">We pay out daily starting from AFGOLD affiliate earners with
minimum of at least N5,000 also AFGOLD miners Activities Earning respectively
accumulated to at least 1 unit of AFGOLD and above. Payment shall always start
from the highest miners to others. Once the available revenue is finally
exhausted, pending earning will be carried over to the following month revenue
payout. </p>
<p class="MsoNormal">If you did not get paid while you have earned 1 unit of
AFGOLD threshold, it doesn't mean you wont get paid while the system keep
running. Your earning will be carried over to the following week. You only need
to earn more to the top earner for you to have a share on the following month
revenue payout. </p>
<p class="MsoNormal">Members discontinued participation in the AFGOLD or failure
to notify AFGOLD of any address (mailing or email) changes may result in the
termination of Members membership and forfeiture of Member unredeemed Earnings.
</p>
<p class="MsoNormal">Member shall comply with all laws, rules, and regulations
that are applicable to member. Member acknowledges that Member may only
participate in AFGOLD if and to the extent that such participation is permitted
by such laws, rules, and regulations. </p>
<p class="MsoNormal">If member objects to any of the Terms and Conditions of this
Agreement, or any subsequent modifications to this agreement, or becomes
dissatisfied with the Program, Members only recourse is to immediately
discontinue participation in AFGOLD and properly terminate his or her
membership. </p></div>
</div>
</div>
<?php include ('./footer.php')?>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/templates/basic/js/jquery-3.3.1.min.js"></script>

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
