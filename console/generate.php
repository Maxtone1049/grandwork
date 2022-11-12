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

    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/jquery-toggles/toggles-full.css" rel="stylesheet">
    <link href="lib/highlightjs/github.css" rel="stylesheet">
    <link href="lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">
    <!-- Amanda CSS -->
    <link rel="stylesheet" href="css/amanda.css">
    <title>Admin - Pin Validate</title>
</head>

<body>
    <?php include_once('includes/header.php');
    ?>
    <div class="container mx-auto overflow-hidden relative pt-6">
        <h3 class="pb-3 mt-5 mb-3 font-bold text-black text-2xl text-center">
            Generate Purchase Code
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
                  window.location.href = 'dashboard';
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
        <!-- Generate form Starts here -->
        <div class="row w-full flex items-center">
            <div class="mx-auto w-full flex items-center">
                <div class="w-full flex justify-center">
                    <div class="flex justify-center w-full p-3">
                        <form action="" method="POST" class="shadow-sm bg-gray-400 md:w-50 text-white rounded-2xl p-5 flex flex-col items-center w-full md:w-full lg:w-2/5">
                            <div class="flex flex-col items-center">
                                <div class="flex flex-col items-center p-6">
                                    <label class="font-bold text-4xl mb-2">Generated Code</label>
                                    <div class="input-group p-4 flex flex-col">
                                        <?php
                                        //code to generate random number for access Code;
                                        $alph = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                                        $code = 'PEL';
                                        for ($i = 0; $i < 35; $i++) {
                                            $code .= $alph[rand(20, 90)];
                                        }
                                        ?>
                                        <input type="text" class="text-black bg-none outline-none p-1 text-center rounded-full text-l md:text-2xl w-full font-bold" name="pinned" value="<?php echo $code; ?>">
                                       <p> <?php echo $msg ?></p>
                                    </div>
                                </div>
                                <div class="justify-center flex-col w-full md:flex-row flex">
                                    <button type="submit" name="verify" class="bg-red-500 p-3 my-1 md:mx-1 font-bold rounded-full w-full text-2xl">Save</button>
                                    <button type="button" onclick="window.location.href = 'dashboard'" name="home" class="bg-blue-500 p-3 my-1 md:mx-1 font-bold rounded-full w-full text-2xl">Dashboard</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- generate form ends here-->
    </div>
    <script src="js/amanda.js"></script>
    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="lib/jquery-toggles/toggles.min.js"></script>
    <script src="lib/highlightjs/highlight.pack.js"></script>
    <script src="lib/datatables/jquery.dataTables.js"></script>
    <script src="lib/datatables-responsive/dataTables.responsive.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>
</body>

</html>