<?php
session_start();
error_reporting(0);
include('../includes/dbconnect.php');
if (strlen($_SESSION['obcsaid'] == 0)) {
  header('location:logout');
} else {
  if (isset($_POST['submit'])) {
    $vid = $_GET['viewid'];
    $balance = $_POST['balance'];
    $cap = $_POST['cap'];
    $refbal = $_POST['refbal'];
    $btcbal = $_POST['btcbal'];

    $sql = "UPDATE users SET bal=:balance, refbal=:refbal,btc_bal=:btcbal, cap_bal=:cap WHERE ID=:vid";

    $query = $dbh->prepare($sql);
    $query->bindParam(':balance', $balance, PDO::PARAM_STR);
    $query->bindParam(':cap', $cap, PDO::PARAM_STR);
    $query->bindParam(':refbal', $refbal, PDO::PARAM_STR);
    $query->bindParam(':btcbal', $btcbal, PDO::PARAM_STR);
    $query->bindParam(':vid', $vid, PDO::PARAM_STR);
    $query->execute();

    echo '<script>alert("Funding Completed")</script>';
    echo "<script>window.location.href ='credit'</script>";
  }
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>PROFIT-ELITE || View Profile</title>
    <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/jquery-toggles/toggles-full.css" rel="stylesheet">
    <link href="lib/highlightjs/github.css" rel="stylesheet">
    <link href="lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">
    <!-- Amanda CSS -->
    <link rel="stylesheet" href="css/amanda.css">
  </head>

  <body>

    <?php include_once('includes/header.php');
    include_once('includes/sidebar.php');

    ?>


    <div class="am-pagetitle">

    </div><!-- am-pagetitle -->

    <div class="am-mainpanel">
      <div class="am-pagebody">

        <div class="card pd-20 pd-sm-40">


          <div class="table-wrapper" style="padding-top: 20px">
            <?php
            $vid = $_GET['viewid'];
            $sql = "SELECT * from  users where ID=$vid";
            $query = $dbh->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            $cnt = 1;
            if ($query->rowCount() > 0) {
              foreach ($results as $row) {

            ?>
                <table border="1" class="table table-bordered">


                  <tr align="center">
                    <td colspan="9" style="font-size:20px;color:blue">
                      User Details</td>
                  </tr>
                  <tr>
                    <th scope>S/NO</th>
                    <td><?php echo $row->ID; ?></td>
                    <th scope>Customer Name</th>
                    <td><?php echo $row->fname; ?></td>
                    <th scope>Email</th>
                    <td><?php echo $row->email; ?></td>
                    <th>Details</th>
                    <td colspan="9"><?php echo $row->phone . ' '; ?> <?php echo $row->dates = date("F d, Y "); ?></td>
                  </tr>
              <?php $cnt = $cnt + 1;
              }
            } ?>
                </table>

                <p align="center" style="padding-top: 20px">
                  <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal" data-target="#myModal">Take Action</button>
                </p>
                <p style="font-size:13px; border-radius:12px;color:yellow; width:70%; margin:auto; text-align:center; margin-bottom:30px; background-color:#0738;"> <?php if ($msg) {
                                                                                                                                                                      echo $msg;
                                                                                                                                                                    }  ?> </p>

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLabel">Take Action</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <table class="table table-bordered table-hover data-tables">
                          <form enctype="multipart/form-data" class="text-center" style="color: rgb(117, 117, 117);" method="post">

                            <tr>
                              <th>Balance:</th>
                              <td>
                                <input type="text" class="form-control" name="balance" value="<?php echo $row->bal ?>">
                              </td>
                            </tr>

                            <tr>
                              <th>Capital Balance:</th>
                              <td>
                                <input name="cap" placeholder="Capital Balance" rows="12" cols="14" class="form-control" required="true" value="<?php echo $row->cap_bal ?>" />
                            </tr>
                            <tr>
                              <th>Refferal Balance:</th>
                              <td>
                                <input name="refbal" placeholder="refferal Balance" rows="12" cols="14" class="form-control" required="true" value="<?php echo $row->refbal ?>" />
                              </td>
                            </tr>
                            <tr>
                              <th>BTC Bal:</th>
                              <td>
                                <input name="btcbal" placeholder="BTC Balance" rows="12" cols="14" class="form-control" required="true" value="<?php echo $row->btc_bal ?>" />
                              </td>
                            </tr>

                        </table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>

                        </form>
                      </div><!-- table-wrapper -->
                    </div><!-- card -->


                  </div><!-- am-pagebody -->
                  <?php include_once('includes/footer.php'); ?>
                </div><!-- am-mainpanel -->

                <script src="lib/jquery/jquery.js"></script>
                <script src="lib/popper.js/popper.js"></script>
                <script src="lib/bootstrap/bootstrap.js"></script>
                <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
                <script src="lib/jquery-toggles/toggles.min.js"></script>
                <script src="lib/highlightjs/highlight.pack.js"></script>
                <script src="lib/datatables/jquery.dataTables.js"></script>
                <script src="lib/datatables-responsive/dataTables.responsive.js"></script>
                <script src="lib/select2/js/select2.min.js"></script>

                <script src="js/amanda.js"></script>
                <script>
                  $(function() {
                    'use strict';

                    $('#datatable1').DataTable({
                      responsive: true,
                      language: {
                        searchPlaceholder: 'Search...',
                        sSearch: '',
                        lengthMenu: '_MENU_ items/page',
                      }
                    });

                    $('#datatable2').DataTable({
                      bLengthChange: false,
                      searching: false,
                      responsive: true
                    });

                    // Select2
                    $('.dataTables_length select').select2({
                      minimumResultsForSearch: Infinity
                    });

                  });
                </script>
  </body>

  </html>
<?php } ?>