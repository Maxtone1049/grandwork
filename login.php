<?php
session_start();
error_reporting(0);
include('includes/dbconnect.php');

if(isset($_POST['login'])) 
  {
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql ="SELECT ID FROM users WHERE uname=:username and pword=:password";
    $query=$dbh->prepare($sql);
    $query->bindParam(':username',$uname,PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['obcsuid']=$result->ID;
}

$_SESSION['login']=$_POST['Email'];
echo "<script type='text/javascript'> document.location ='account/dashboard'; </script>";
} else{
    $msg = "<p class='text-danger bg-warning text-center font-weight-bold px-2 py-2 rounded stat3'>Wrong Username or Password</p>";
}
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
    <title> ProfitElite | Sign In</title>
    <meta name="title" Content="ProfitElite - Sign In">
    <meta name="description" content="ProfitElite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. It will grow beyond our imagination- and ProfitElite is built to be ready for whatever mining throws.">
    <meta name="keywords" content="blog,Bitcoin,Ethereum,Tether,Binance Coin,Cardano,Polkadot,XRP,USD Coin,Filecoin,Klaytn,Elrond,user,payment,coin,litecoin,dogi,sales,report,ProfitElite,ProfitElite,ProfitElite mining,ProfitElite mining">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="ProfitElite - Sign In">
    <meta itemprop="name" content="ProfitElite - Sign In">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/612d1ba9df6921630346153.png">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ProfitElite">
    <meta property="og:description" content="ProfitElite is an integral part of the cryptocurrency miner space. ProfitElite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. The ProfitElite allows you to instantly switch what you are mining, review earnings, withdraw and receive from the wallets, and much more.">
    <meta property="og:image" content="assets/images/seo/612d1ba9df6921630346153.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="login">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" href="assets/templates/basic/css/fontawesome-all.min.css">


    <link rel="stylesheet" href="assets/templates/basic/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/templates/basic/css/nice-select.css">

    <link rel="stylesheet" href="assets/templates/basic/css/animate.css">

    <link rel="stylesheet" href="assets/templates/basic/css/style.css">
    <link rel="stylesheet" href="assets/templates/basic/css/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/templates/basic/css/colora961.css?color=b2991b">

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
    <!-- <div class="preloader-area">
        <div class='coin'>
            <div class='front jump'>
                <div class='star'></div>
                <span class='currency'><i class="las la-coins"></i></span>
                <div class='shapes'>
                    <div class='shape_l'></div>
                    <div class='shape_r'></div>
                    <span class='top'>ProfitElite</span>
                    <span class='bottom'>ProfitElite</span>
                </div>
            </div>
            <div class='shadow'></div>
        </div>
    </div> -->
    <section class="register-section bg-overlay-primary bg_img" data-background="assets/images/frontend/banner/6040cb7e059681614859134.jpg">
        <div class="container">
            <div class="row register-area justify-content-center align-items-center">
                <div class="ads mb-3"><a href="https://vokprime.com/are-you-a-millionaire-yet-no-read-this/" target="_blank"><img src="vokprime.com/wp-content/uploads/2021/12/Corporate.jpg" alt="Make Money" title="Make more MONEY"></a></div>
                <div class="col-lg-6">
                    <div class="register-form-area">
                        <div class="register-logo-area text-center">
                            <a href="."><img src="assets/images/logoIcon/logo.png" alt="logo"></a>
                        </div>
                        <div class="account-header text-center">
                            <h2 class="title">Login To Your Account Now</h2>
                            <p class="sub-title">Don't Have An Account? <a href="register">Create Now</a></p>
                        </div>
                        <p style="font-size:15px; border-radius:12px;color:#fff; width:70%; margin:auto; text-align:center; margin-bottom:30px; background-color:red;">
                        <?php if($msg){
    echo $msg;
  }  ?> </p>
                        <form method="POST" action="" class="register-form">
                            <input type="hidden" name="_token" value="BwQmT3eviYgErFYse8rAotcKMYaOaIMXubjr2o23">
                            <div class="row justify-content-center ml-b-20">
                                <div class="col-lg-12 form-group">
                                    <label class="register-icon"><i class="fas fa-user"></i></label>
                                    <input type="text" class="form-control" name="username" placeholder="Username" value="" required>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="register-icon"><i class="fas fa-key"></i></label>
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required autocomplete="new-password">
                                </div>
                                <div class="col-lg-12 form-group text-center">
                                    <div class="checkbox-wrapper d-flex flex-wrap align-items-center">
                                        <div class="checkbox-item">
                                            <label class="forgot-password"><a href="password/reset">Forgot Password?</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 form-group text-center">
                                    <button type="submit" name="login"  class="submit-btn">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/templates/basic/js/jquery-3.3.1.min.js"></script>

    <script src="assets/templates/basic/js/jquery-migrate-3.0.0.js"></script>

    <script src="assets/templates/basic/js/bootstrap.min.js"></script>

    <script src="assets/templates/basic/js/jquery.nice-select.js"></script>

    <script src="assets/templates/basic/js/chart.js"></script>

    <script src="assets/templates/basic/js/wow.min.js"></script>

    <script src="assets/templates/basic/js/main.js"></script>
    <link rel="stylesheet" href="assets/admin/css/iziToast.min.css">
    <script src="assets/admin/js/iziToast.min.js"></script>
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

</body>

</html>