<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pin Validate</title>
</head>
<body>
<div class="container">
        <h3 class="pb-3 mt-5 mb-3 font-italic text-center">
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
                        $msg="<p style='color:black;background-color:aqua;padding:1em;text-align:center;border-radius:50px;font-size:1rem'>Pin Generated and Stored</p>";
                        echo ("<script type='text/javascript'>  
         setTimeout(function(){
            window.location.href = '../.';
         }, 2000);
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
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label class="font-weight-bolder">Purchase Code</label>
                                    <div class="input-group">
                                        <?php
                                        // if (isset($$_GET['verify'])){
                                        //code to generate random number for access Code;
                                        $alph = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                                        $code = 'PEL';
                                        for ($i = 0; $i < 35; $i++) {
                                            $code .= $alph[rand(20, 90)];
                                            //    }
                                        }
                                        ?>
                                        <input type="text" class="form-control plan-price" name="pinned" value="<?php echo $code;?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <?php echo $msg?>
                                    <button type="submit" name="verify" class="cmn-btn btn-block">Verify</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-danger font-weight-bold text-center doesNot" style="display: none;">
                            <p>Ouch... We cannot find that purchase code.</p>
                        </div>
                        <div class="text-danger font-weight-bold text-center ouch" style="display: none;">
                            <p>Yikes...Where did you get that from?<br>The code is invalid.</p>
                        </div>
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
                <div class="validCode1 mt-5" style="display: none;">
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
                                <div class="col-md-8"><span class="text-danger bg-warning font-weight-bold px-3 rounded stat3">Used</span></div>
                            </div>
                            <div class="border-bottom row py-2">
                                <div class="col-md-4 text-right"><em class="bg-info text-white py-1 px-3 rounded sstats">Package/Plan</em></div>
                                <div class="col-md-8"><strong class="text-dark font-weight-bold stat6"></strong></div>
                            </div>
                            <div class="border-bottom row py-2">
                                <div class="col-md-4 text-right"><em class="bg-warning text-white py-1 px-3 rounded sstats">Used By:</em></div>
                                <div class="col-md-8"><span class="text-dark font-weight-bold stat4"></span></div>
                            </div>
                            <div class="border-bottom row py-2">
                                <div class="col-md-4 text-right"><em class="bg-dark text-white py-1 px-3 rounded sstats">Used Date/Time:</em></div>
                                <div class="col-md-8"><span class="text-dark font-weight-bold stat5"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>