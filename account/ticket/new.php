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
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/logoIcon/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Profit Elite - Support Tickets</title>
    <meta name="title" Content="Profit Elite - Support Tickets">
    <meta name="description" content="Profit Elite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. It will grow beyond our imagination- and Profit Elite is built to be ready for whatever mining throws.">
    <meta name="keywords" content="blog,Bitcoin,Ethereum,Tether,Binance Coin,Cardano,Polkadot,XRP,USD Coin,Filecoin,Klaytn,Elrond,user,payment,coin,litecoin,dogi,sales,report,Profit Elite,Profit Elite,Profit Elite mining,Profit Elite mining">
    <link rel="shortcut icon" href="../../assets/images/logoIcon/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="../../assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Profit Elite - Support Tickets">
    <meta itemprop="name" content="Profit Elite - Support Tickets">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="../../assets/images/seo/612d1ba9df6921630346153.png">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Profit Elite">
    <meta property="og:description" content="Profit Elite is an integral part of the cryptocurrency miner space. Profit Elite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. The Profit Elite allows you to instantly switch what you are mining, review earnings, withdraw and receive from the wallets, and much more.">
    <meta property="og:image" content="../../assets/images/seo/612d1ba9df6921630346153.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="ticket/new">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="stylesheet" href="../../assets/templates/basic/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/templates/basic/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../assets/templates/basic/css/nice-select.css">
    <link rel="stylesheet" href="../../assets/templates/basic/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/templates/basic/css/animate.css">
    <link rel="stylesheet" href="../../assets/templates/basic/css/style.css">
    <link rel="stylesheet" href="../../assets/templates/basic/css/custom.css">
    <link rel="stylesheet" type="text/css" href="../../assets/templates/basic/css/color.php?color=b2991b">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-198044238-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-198044238-4');
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
                        <h2 class="title">Support Tickets</h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="../.">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="../tick">Support Tickets</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Support Tickets</li>
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
                                            <?php echo $row->uname?>

                                            <span>
                                                <img class="user-badge" src="../../assets/images/user/badge/veri.png" alt="badge">
                                            </span>
                                        </h3>
                                        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNavDrop1down">
                                            <ul class="navbar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="../.">.</a>
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
                                                        <a class="dropdown-item" href="../trend/log">Trend Log</a>
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
                                                    <a class="nav-link" href="referral/log">Referrals</a>
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
            <div class="container">
                <div class="row justify-content-center mt-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-white d-flex flex-wrap align-items-center justify-content-between">
                                Support Tickets
                                <a href="../tick" class="cmn-btn">My Support Ticket </a>
                            </div>
                            <div class="card-body">
                                <form action="ticket/new" method="post" enctype="multipart/form-data" >
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" value="<?php echo $row->uname?>" class="form-control form-control-lg" placeholder="Enter Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email address</label>
                                            <input type="email" name="email" value="<?php echo $row->email?>" class="form-control form-control-lg" placeholder="Enter your Email" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="website">Subject</label>
                                            <input type="text" name="subject" value="" class="form-control form-control-lg" placeholder="Subject">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="inputMessage">Message</label>
                                            <textarea name="message" id="inputMessage" rows="6" class="form-control form-control-lg"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <span for="inputAttachments text-white">Attachments</span>
                                        <div class="custom-file">
                                            <input name="attachments[]" type="file" id="customFile" class="custom-file-input" accept=".jpg,.jpeg,.png,.pdf">
                                            <label class="custom-file-label form-control-lg" for="custmFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="fileUploadsContainer"></div>
                                    <p class="text-muted m-2">
                                        <i class="la la-info-circle"></i>
                                        Allowed File Extensions: .jpg, .jpeg, .png, .pdf
                                    </p>
                                    <div class="form-group">
                                        <a href="javascript:void(0)" class="btn btn-success rounded add-more-btn">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-12 justify-content-center">
                                            <button class="submit-btn" type="submit" id="recaptcha">
                                                <i class="fa fa-paper-plane"></i>
                                                &nbsp;Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
    (function($) {
        $(document).on("change", '.custom-file-input', function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        var itr = 0;

        $('.add-more-btn').on('click', function() {
            itr++
            $(".fileUploadsContainer").append(` <div class="form-group custom-file mt-3">
                                            <input type="file" name="attachments[]" id="customFile${itr}" class="custom-file-input" accept=".jpg,.jpeg,.png,.pdf" />
                                            <label class="custom-file-label form-control-lg" for="customFile${itr}">Choose file</label>
                                        </div>`);

        });

    })(jQuery)
</script>
    </body>
    </html>