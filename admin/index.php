<?php
session_start();
error_reporting(0);
include '../includes/dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <title>Pin Validate</title>
</head>

<body>
    <div class="container mx-auto">
        <h3 class="pb-3 mt-5 mb-3 font-bold text-2xl text-center">
            Verify Purchase Code
        </h3>
        <?php
        if (isset($_POST['verify'])) {
            $pinned = $_POST['pinned'];
            $ret = "SELECT pinnum from pintable where pinnum=:pinned";
            $query = $dbh->prepare($ret);
            $query->bindParam(':pinned', $pinned, PDO::PARAM_STR);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            if ($query->rowCount() == 0) {
                $sql = "INSERT INTO pintable(pinnum) VALUES (:pinned)";
                $query = $dbh->prepare($sql);
                $query->bindParam(':pinned', $pinned, PDO::PARAM_STR);
                $query->execute();
                $lastInsertId = $dbh->lastInsertId();
                if ($lastInsertId) {
                    // $msg = "Pin Generated and Stored";
                    $msg = "<p class='rounded-full bg-green-500 text-xl text-center mt-2 p-3 text-white w-full'>Pin Generated and Stored</p>";
                    echo ("<script type='text/javascript'>  
         setTimeout(function(){
            window.location.href = '.';
         }, 6000);
        </script>");
                } else {
                    $msg = "This Purchase Code is invalid, please contact our Verified Pin Dispatch";
                    echo ("<script type='text/javascript'>  
                    setTimeout(function(){
                       window.location.href = 'pin-dispatcher';
                    }, 3000);
                   </script>");
                }
            } else {
                $msg = "This Pin is already used. Get Another one";
            }
        }
        ?>
        <div class="row w-full flex items-center">
            <div class="col-md-8 mx-auto w-full flex items-center">
                <div class="w-full flex justify-center">
                    <div class="flex justify-center w-full p-3">
                        <form action="" method="POST" class="shadow-sm bg-gray-400 md:w-50 text-white rounded-2xl p-5 flex flex-col items-center w-full md:w-full lg:w-2/5">
                            <div class="flex flex-col items-center">
                                <div class="flex flex-col items-center p-6">
                                    <label class="font-bold text-4xl mb-2">Generate Code</label>
                                    <div class="input-group p-4">
                                        <?php
                                        //code to generate random number for access Code;
                                        $alph = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                                        $code = 'PEL';
                                        for ($i = 0; $i < 35; $i++) {
                                            $code .= $alph[rand(20, 90)];
                                        }
                                        ?>
                                        <input type="text" class="form-control plan-price text-black bg-none outline-none p-1 text-center rounded-full text-l md:text-2xl w-full font-bold" name="pinned" value="<?php echo $code; ?>">
                                        <?php echo $msg ?>
                                    </div>
                                </div>
                                <div class="justify-center flex-col w-full md:flex-row flex">
                                    <button type="submit" name="verify" class="bg-red-500 p-3 my-1 md:mx-1 font-bold rounded-full w-full text-2xl">Save</button>
                                    <button type="button" name="verify" class="bg-blue-500 p-3 my-1 md:mx-1 font-bold rounded-full w-full text-2xl">Home</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="validCode0 mt-5" style="display: none;">
                    <h3 class="pb-3 my-2 font-italic text-center">
                        Purchase Code Details
                    </h3>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <div class="border-bottom row py-2">
                                <div class="col-md-4 text-right"><em class="bg-info text-white py-1 px-3 rounded sstats">Code:</em></div>
                                <div class="col-md-8"><strong class="text-dark font-weight-bold stat1"></strong></div>
                            </div>
                            <div class="border-bottom row py-2">
                                <div class="col-md-4 text-right"><em class="bg-danger text-white py-1 px-3 rounded sstats">Serial Number:</em></div>
                                <div class="col-md-8"><span class="text-dark font-weight-bold stat2"></span></div>
                            </div>
                            <div class="border-bottom row py-2">
                                <div class="col-md-4 text-right"><em class="bg-success text-white py-1 px-3 rounded sstats">Status:</em></div>
                                <div class="col-md-8"><span class="text-white bg-primary font-weight-bold px-3 rounded stat3">unused</span></div>
                            </div>
                            <div class="border-bottom row py-2">
                                <div class="col-md-4 text-right"><em class="bg-info text-white py-1 px-3 rounded sstats">Package/Plan</em></div>
                                <div class="col-md-8"><strong class="text-dark font-weight-bold stat6"></strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>