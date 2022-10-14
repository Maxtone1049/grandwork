<?php
session_start();
error_reporting(0);
include('../../includes/dbconnect.php');
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
    <link rel="icon" type="image/x-icon" href="../../assets/images/logoIcon/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://afrigoldm.com/assets/images/logoIcon/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Profit Ultimate - Referral Bonus Logs</title>
    <meta name="title" Content="Profit Ultimate - Referral Bonus Logs">
    <meta name="description" content="Profit Ultimate is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. It will grow beyond our imagination- and Profit Ultimate is built to be ready for whatever mining throws.">
    <meta name="keywords" content="blog,Bitcoin,Ethereum,Tether,Binance Coin,Cardano,Polkadot,XRP,USD Coin,Filecoin,Klaytn,Elrond,user,payment,coin,litecoin,dogi,sales,report,AfriGold,Profit Ultimate,Afrigold mining,Profit Ultimate mining">
    <link rel="shortcut icon" href="../../assets/images/logoIcon/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="../../assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Profit Ultimate - Referral Bonus Logs">
    <meta itemprop="name" content="Profit Ultimate - Referral Bonus Logs">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="../../assets/images/seo/612d1ba9df6921630346153.png">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Profit Ultimate">
    <meta property="og:description" content="Profit Ultimate is an integral part of the cryptocurrency miner space. Profit Ultimate is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. The Profit Ultimate allows you to instantly switch what you are mining, review earnings, withdraw and receive from the wallets, and much more.">
    <meta property="og:image" content="../../assets/images/seo/612d1ba9df6921630346153.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="log">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="stylesheet" href="../../assets/templates/basic/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/templates/basic/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../assets/templates/basic/css/nice-select.css">
    <link rel="stylesheet" href="../../assets/templates/basic/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/templates/basic/css/animate.css">
    <link rel="stylesheet" href="../../assets/templates/basic/css/style.css">
    <link rel="stylesheet" href="../../assets/templates/basic/css/custom.css">
    <link rel="stylesheet" type="text/css" href="../../assets/templates/basic/css/color.php?color=b2991b">
    <style>
        .copyInput {
            display: inline-block;
            line-height: 50px;
            position: absolute;
            top: 0;
            right: 0;
            width: 40px;
            text-align: center;
            font-size: 14px;
            cursor: pointer;
            -webkit-transition: all .3s;
            -o-transition: all .3s;
            transition: all .3s;
        }

        .copied::after {
            position: absolute;
            top: 10px;
            right: 12%;
            width: 100px;
            display: block;
            content: "COPIED";
            font-size: 1em;
            padding: 2px 5px;
            color: #fff;
            border-radius: 3px;
            opacity: 0;
            will-change: opacity, transform;
            animation: showcopied 1.5s ease;
            background-color: #b2991b;
        }

        @keyframes showcopied {
            0% {
                opacity: 0;
                transform: translateX(100%);
            }

            50% {
                opacity: 0.7;
                transform: translateX(40%);
            }

            70% {
                opacity: 1;
                transform: translateX(0);
            }

            100% {
                opacity: 0;
            }
        }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-198044238-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
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
    <div class="preloader-area">
        <div class='coin'>
            <div class='front jump'>
                <div class='star'></div>
                <span class='currency'>
                    <i class="las la-coins"></i>
                </span>
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
            <div class="header-bottom-area">
                <div class="ads mb-3">
                    <a href="https://vokprime.com/are-you-a-millionaire-yet-no-read-this/" target="_blank">
                        <img src="https://vokprime.com/wp-content/uploads/2021/12/Corporate.jpg" alt="Make Money" title="Make more MONEY">
                    </a>
                </div>
                <div class="container">
                    <div class="header-menu-content">
                        <nav class="navbar navbar-expand-lg p-0">
                            <a class="site-logo site-title" href="../../.">
                                <img src="../../assets/images/logoIcon/logo.png" alt="site-logo">
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
    <section class="banner-section inner-banner-section bg-overlay-primary bg_img" data-background="../../assets/images/frontend/breadcrumb/6043507db922f1615024253.jpg">
        <div class="container">
            <div class="row justify-content-center align-items-center ml-b-30">
                <div class="col-lg-10 text-center mrb-30">
                    <div class="banner-content">
                        <h2 class="title">Referral Bonus Logs</h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="../dashboard">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Referral Bonus Logs</li>
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
        <div class="row">
    <div class="col-lg-12">
        <div class="dash-user-area">
            <div class="dash-left-user-area d-flex flex-wrap align-items-center">
                <div class="user-icon badge-wrapper">
                    <img class="ppic" src="../upload/<?php echo $row->imagename?>" alt="<?php echo $row->uname ?>">
                    
                </div>
                <div class="user-details d-flex flex-wrap align-items-center justify-content-between">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent p-0 w-100">
                        <h3 class="title w-auto user-name">
                            <?php echo $row->uname ?>
                            <span>
                                <img class="user-badge" src="../../assets/images/user/badge/veri.png" alt="badge">
                            </span>
                        </h3>
                        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="../dashboard">Dashboard</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Miner </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarNavDropdown">
                                        <a class="dropdown-item" href="../mine">Mine Engine</a>
                                        <a class="dropdown-item" href="../mine-log">Mine Log</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Share &Earn </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarNavDropdown">
                                        <a class="dropdown-item" href="../trend">Trend Posts</a>
                                        <!-- <a class="dropdown-item" href="log">Trend Log</a> -->
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Withdraw </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarNavDropdown">
                                        <a class="dropdown-item" href="../withdrawal">Withdraw Funds</a>
                                        <a class="dropdown-item" href="../history">Withdraw Log</a>
                                        <a class="dropdown-item" href="../cashout">Self Cashout</a>
                                        <a class="dropdown-item" href="../codes">All Codes</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="log">Referrals</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="transfer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transfer </a>
                                    <div class="dropdown-menu" aria-labelledby="transfer">
                                        <a class="dropdown-item" href="../transfer">Transfer PU</a>
                                        <a class="dropdown-item" href="../transfer-log">Transfer Log</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../buy-sell/home">Buy/Sell</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="../profile-setting">Profile</a>
                                        <a class="dropdown-item" href="../tick">Support Tickets</a>
                                        <a class="dropdown-item" href="../twofactor">2FA Security</a>
                                        <a class="dropdown-item" href="../change-password">Change Password</a>
                                        <a class="dropdown-item" href="../logout">Logout</a>
                                    </div>
                                </li>
                                <li class="nav-item upgrade">
                                    <a class="nav-link" href="upgrade">Upgrade</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
            <div class="ads mb-3">
                <a href="https://bit.ly/3Bdtvru" target="_blank">
                    <img src="https://vokprime.com/wp-content/uploads/2022/07/bsness.jpg" alt="Start Business" title="Start your business">
                </a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3>Your Referral Link</h3>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="url" id="ref" value="register?ref=Sirjoe" class="form-control form-control-lg bg-transparent" readonly>
                            <div class="input-group-append">
                                <button type="button" data-copytarget="#ref" class="input-group-text bg--info border--light text--white copybtn">
                                    <i class="fa fa-copy"></i>
                                    &nbsp;Copy
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-section pd-t-30 pd-b-80">
                <div class="row justify-content-center ml-b-30">
                    <div class="col-lg-12 mrb-30">
                        <div class="order-table-area">
                            <table class="order-table">
                                <thead>
                                    <tr>
                                        <th scope="col">User</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-capitalize" data-label="User">ejor2020</td>
                                        <td data-label="Amount">
                                            <strong>₦ 2700
                                            </strong>
                                        </td>
                                        <td data-label="Description">Level 1 Referral Commission From ejor2020</td>
                                        <td data-label="Time">17 Sep, 2021 03:00 PM
                                        </td>
                                        <td data-label="Balance">₦ 2700</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../../assets/templates/basic//js/jquery-3.3.1.min.js"></script>
    <script src="../../assets/templates/basic//js/jquery-migrate-3.0.0.js"></script>
    <script src="../../assets/templates/basic//js/bootstrap.min.js"></script>
    <script src="../../assets/templates/basic//js/jquery.nice-select.js"></script>
    <script src="../../assets/templates/basic//js/chart.js"></script>
    <script src="../../assets/templates/basic//js/wow.min.js"></script>
    <script src="../../assets/templates/basic//js/particles.js"></script>
    <script src="../../assets/templates/basic//js/main.js"></script>
    <link rel="stylesheet" href="../../assets/admin/css/iziToast.min.css">
    <script src="../../assets/admin/js/iziToast.min.js"></script>
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
        'use strict';
        document.querySelectorAll('.copybtn').forEach((element) => {
            element.addEventListener('click', copy, true);
        })

        function copy(e) {
            var t = e.target,
                c = t.dataset.copytarget,
                inp = (c ? document.querySelector(c) : null);
            if (inp && inp.select) {
                inp.select();
                try {
                    document.execCommand('copy');
                    inp.blur();
                    t.classList.add('copied');
                    setTimeout(function() {
                        t.classList.remove('copied');
                    }, 1500);
                } catch (err) {
                    alert(`Please press Ctrl/Cmd+C to copy`);
                }
            }
        }
    </script>

</body>

</html>