<?php
session_start();
error_reporting(0);
include('../includes/dbconnect.php');
if (strlen($_SESSION['obcsuid'] == 0)) {
    header('location:logout.php');
} else {
    $uid = $_SESSION['obcsuid'];

    if (isset($_POST['update'])) {
        //Image processing
        //Get other data
        $uid = $_SESSION['obcsuid'];
        $target = "upload/" . basename($_FILES['file']['name']);
        $image  = $_FILES['file']['name'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];

        $sql  = "UPDATE users set fname=:fname, lname=:lname,image=:file, imagename=:file, address=:address, state=:state, zip_code=:zip, city=:city WHERE ID=:uid";

        $query = $dbh->prepare($sql);

        $query->bindParam(':fname', $fname, PDO::PARAM_STR);
        $query->bindParam(':lname', $lname, PDO::PARAM_STR);
        $query->bindParam(':address', $address, PDO::PARAM_STR);
        $query->bindParam(':state', $state, PDO::PARAM_STR);
        $query->bindParam(':zip', $zip, PDO::PARAM_STR);
        $query->bindParam(':city', $city, PDO::PARAM_STR);
        $query->bindParam(':file', $image, PDO::PARAM_STR);
        $query->bindParam(':uid', $uid, PDO::PARAM_STR);
        $query->execute();
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
            // unlink('upload/' . $target);
            echo '<script>alert("Your Profile has been Updated")</script>';
            echo "<script>window.location.href='profile-setting?Profile Details Updated'</script>";
        } else {
            echo '<script>alert("Error Updating your Profile, Try Again")</script>';
            // echo $target ;
        }
    }
    // For bank Details Only
    if (isset($_POST['save'])) {
        //Get other data
        $uid = $_SESSION['obcsuid'];
        $bname = $_POST['bname'];
        $accountName = $_POST['accountName'];
        $accountNumber = $_POST['accountNumber'];
        $accountType = $_POST['accountType'];
        $sql  = "UPDATE users set bankname=:bname, accname=:accountName, accnum=:accountNumber, acctype=:accountType WHERE ID=:uid";

        $query = $dbh->prepare($sql);

        $query->bindParam(':bname', $bname, PDO::PARAM_STR);
        $query->bindParam(':accountName', $accountName, PDO::PARAM_STR);
        $query->bindParam(':accountNumber', $accountNumber, PDO::PARAM_STR);
        $query->bindParam(':accountType', $accountType, PDO::PARAM_STR);
        $query->bindParam(':uid', $uid, PDO::PARAM_STR);
        $query->execute();
        echo '<script>alert("Bank Details has been Updated")</script>';
        echo "<script>window.location.href='profile-setting?Bank_Details_Updated'</script>";
    }

    // <!-- For other details -->
    if (isset($_POST['send'])) {
        $uid = $_SESSION['obcsuid'];
        $usdt = $_POST['usdt'];
        $fb_profile = $_POST['fbprofile'];
        $sql  = "UPDATE users set walletadd=:usdt, fblink=:fbprofile WHERE ID=:uid";

        $query = $dbh->prepare($sql);

        $query->bindParam(':usdt', $usdt, PDO::PARAM_STR);
        $query->bindParam(':fbprofile', $fb_profile, PDO::PARAM_STR);
        $query->bindParam(':uid', $uid, PDO::PARAM_STR);
        $query->execute();
        echo '<script>alert("Other Details Updated")</script>';
        echo "<script>window.location.href='profile-setting?Other_Details_Updated'</script>";
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
        <title>Profit Elite - Profile Setting</title>
        <meta name="title" Content="Profit Elite - Profile Setting">
        <meta name="description" content="Profit Elite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. It will grow beyond our imagination- and Profit Elite is built to be ready for whatever mining throws.">
        <meta name="keywords" content="blog,Bitcoin,Ethereum,Tether,Binance Coin,Cardano,Polkadot,XRP,USD Coin,Filecoin,Klaytn,Elrond,user,payment,coin,litecoin,dogi,sales,report,Profit,Profit Elite,Profit mining,Profit Elite mining">
        <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Profit Elite - Profile Setting">
        <meta itemprop="name" content="Profit Elite - Profile Setting">
        <meta itemprop="description" content="">
        <meta itemprop="image" content="../assets/images/seo/612d1ba9df6921630346153.png">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Profit Elite">
        <meta property="og:description" content="Profit Elite is an integral part of the cryptocurrency miner space. Profit Elite is a site built for Cryptocurrency, Initial Coin Offerings, and Mining. The Profit Elite allows you to instantly switch what you are mining, review earnings, withdraw and receive from the wallets, and much more.">
        <meta property="og:image" content="../assets/images/seo/612d1ba9df6921630346153.png" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
        <meta property="og:image:height" content="315" />
        <meta property="og:url" content="profile-setting">
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
                            <h2 class="title">Profile Setting</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href=".">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Profile Setting</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $uid = $_SESSION['obcsuid'];
        $sql = "SELECT * FROM  users where ID=:uid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':uid', $uid, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = 1;
        if ($query->rowCount() > 0) {
            foreach ($results as $row) {
                $cnt = $cnt + 1;
            }


        ?>
            <section class="dashboard-section py-4">
                <div class="container">
                    <?php include('sidebar.php') ?>
                    <div class="row justify-content-center">
                        <p style="color:black;font-weight:900;">
                            <?php if ($msg) {
                                echo $msg;
                            }  ?>
                        </p>
                        <div class="col-lg-12">
                            <div class="profile-area">
                                <form class="profile-form" action="" method="post" enctype="multipart/form-data">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-4 mrb-30">
                                            <div class="profile-thumb-upload">
                                                <div class="profile-thumb-preview">
                                                    <div class="image-preview bg_img" data-background="upload/<?php echo $row->imagename ?>"></div>
                                                </div>
                                                <code>The image will resize into 500x500</code>
                                                <div class="profile-edit">
                                                    <input type="file" name="file" id="imageUpload" class="upload" accept=".png, .jpg, .jpeg, .pdf">
                                                    <label for="imageUpload" class="imgUp mrt-20">Upload Image </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 mrb-30">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label for="InputFirstname">First Name:</label>
                                                    <input type="text" class="form-control" id="InputFirstname" name="fname" placeholder="First Name" value="<?php echo $row->fname ?>">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="lastname">Last Name:</label>
                                                    <input type="text" class="form-control" id="lastname" name="lname" placeholder="Last Name" value="<?php echo $row->lname ?>">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label>Username</label>
                                                    <input type="text" placeholder="Username" class="form-control" value="<?php echo $row->uname ?>" readonly>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="email">E-mail Address:</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail Address" value="<?php echo $row->email ?>" readonly>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <input type="hidden" id="track" name="country_code">
                                                    <label for="phone">Mobile Number</label>
                                                    <input type="tel" class="form-control" id="phone" name="mobile" value="<?php echo $row->phonenum ?>" placeholder="Your Contact Number" readonly>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="country">Country:</label>
                                                    <input type="text" id="country" class="form-control" value="<?php echo $row->country ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-footer">
                                        <div class="row justify-content-center ml-b-20">
                                            <div class="form-group col-lg-6">
                                                <label for="address">Address:</label>
                                                <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $row->address ?>" required="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="state">State:</label>
                                                <input type="text" class="form-control" id="state" name="state" placeholder="state" value="<?php echo $row->state ?>" required="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="zip">Zip Code:</label>
                                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code" value="<?php echo $row->zip_code ?>" required="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="city">City:</label>
                                                <input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?php echo $row->city ?>" required="">
                                            </div>
                                            <div class="col-lg-12 form-group">
                                                <button type="submit" name="update" class="submit-btn">Update Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <h4 class="mt-5" id="bankDetails">Bank Details</h4>
                                <form class="profile-form" action="profile-setting" method="post" enctype="multipart/form-data">

                                    <div class="row justify-content-center ml-b-20">
                                        <div class="form-group col-lg-6">
                                            <label for="bankName2">Bank Name:</label>
                                            <input type="text" class="form-control" id="bankName2" name="bname" placeholder="Bank Name" value="<?php echo $row->bankname ?>">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="accountName">Account Name:</label>
                                            <input type="text" class="form-control" id="accountName" name="accountName" placeholder="Account Name" value="<?php echo $row->accname ?>" required="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="accountNumber">Account Number:</label>
                                            <input type="text" class="form-control" id="accountNumber" name="accountNumber" placeholder="Account Number" value="<?php echo $row->accnum ?>" required="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="accountType">Account Type:</label>
                                            <select type="text" class="form-control" id="accountType" name="accountType" required="">
                                                <option value="<?php echo $row->acctype ?>" selected><?php echo $row->acctype ?></option>
                                                <option value="NULL">__Select account type__</option>
                                                <option value="savings">Savings</option>
                                                <option value="current">Current</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <button type="submit" name="save" class="submit-btn" style="background-color: #707070; cursor: pointer;">Save bank Details</button>
                                        </div>
                                    </div>
                                </form>
                                <h4 class="mt-5 mb-2" id="otherDetails">
                                    <u>Other Details</u>
                                </h4>
                                <form class="profile-form" action="profile-setting" method="post" enctype="multipart/form-data">
                                    <div class="row justify-content-center ml-b-20">
                                        <div class="form-group col-lg-12">
                                            <label for="usdt">USDT Wallet Address:</label>
                                            <input type="text" class="form-control" id="usdt" name="usdt" placeholder="USDT Wallet Address" value=" <?php echo $row->walletadd ?>" required>
                                            <small class="text-info">Wallet Address Should be TRC20 Network</small>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label for="fb_profile">Facebook Profile Link:</label>
                                            <input type="text" class="form-control" id="fb_profile" name="fbprofile" placeholder="Facebook Profile Link" value="<?php echo $row->fblink ?>" required>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <button type="submit" class="submit-btn" name="send">Save Details</button>
                                        </div>
                                    </div>
                                </form>
                            <?php } ?>
                            </div>
                        </div>
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
            <script>
                'use strict';
                (function($) {

                    $('.imgUp').on('click', function() {
                        upload();
                    });

                    function upload() {
                        $(".upload").on('change', function() {
                            readURL(this);
                        });
                    }

                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                var preview = $(input).parents('.profile-thumb-upload').find('.image-preview');
                                $(preview).css('background-image', 'url(' + e.target.result + ')');
                                $(preview).hide();
                                $(preview).fadeIn(650);
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                })(jQuery)
            </script>
    </body>
<?php } ?>

    </html>
