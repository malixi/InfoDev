<?php
@session_start();

if(!isset($_SESSION['user_id']) && !isset($_SESSION['user_type'])) {
  header('Location: index.php');
}
?>

<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$sql = "SELECT * FROM product ORDER BY id DESC";  
$results = $db_handle->runQuery($sql);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="images/infor-logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>InfoDev Product Assignment</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />


    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <script defer src="assets/js/fontawesome.js"></script>
<!--     <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'> -->
    
    <link rel="stylesheet" type="text/css" href="assets/css/notify.css">
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css"/>

    <script src="assets/js/jquery.2.0.3.min.js"></script> 
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="assets/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="assets/js/editable-js.js"></script>


</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="white">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="home.php" class="simple-text">
                    InfoDev
                </a>
            </div>

            <ul class="nav">


            </ul>
        </div>
    </div>



    <div class="main-panel">
     
          <?php include 'home_header.php'; ?>



        <div class="content">
          <div class="row">
            
        <hr/>
        <div class="col-md-2"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left">
            <h6>Settings</h6>
            <li class="active"><a href="#home" data-toggle="tab">Password</a></li>
            <li class="disabled"><a href="#admin">Profile</a></li>
             <li class="disabled"><a href="#admin">Email</a></li>
          </ul>
        </div>

          <!-- Tab panes -->
          <div class="col-md-10">
          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <div class="col-md-5">

                <form method="post" action="updatepassword.php">


                                            <div class="form-group">
                                                <label>Current Password*</label>
                                                <input type="Password" class="form-control" name="currentpassword" id="currentpassword" required="required">
                                            </div>

                                            <div class="form-group">
                                                <label>New Password*</label>
                                                <input type="Password" class="form-control" name="newpass" id="newpass"  pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}" title="Must contain at least one number, one uppercase, one lowercase letter and one special characters, and at least 8 characters">
                                            </div>

                                            <div class="form-group">
                                                <label>New Password Confirmation*</label>
                                                <input type="Password" class="form-control" name="retypepass" id="retypepass" required>
                                            </div>


                                    <button type="submit" class="btn btn-primary btn-fill">Save Changes</button>
                                    <a href="home.php" id="cancel" name="cancel" class="btn btn-default btn-fill">Cancel</a>
                            
                                    
                </form>
                <div class="col-md-5">



            </div>
          </div>
        </div>
      </div>


        <div class="clearfix"></div>


            


                </div>


            </div>


            </div>


            </div>
            </div>
            </div>
      
        </div>
       <?php include 'footer.php'; ?>

    </div>
</div>

   
</body>





  <!--   Core JS Files   -->

    <script src="assets/js/responsive.js"></script>
    <script type="text/javascript" src="assets/js/datatables.min.js"></script>
    <script type="text/javascript" src="assets/js/infodev_crud.js"></script>
    <script src="assets/js/notify.js"></script>

   <!-- Assets for Export files -->
    <script src="assets/js/datatables/datatables-buttons.js"></script>
    <script src="assets/js/datatables/datatables-jszip.js"></script>
    <script src="assets/js/datatables/datatables-pdfmake.js"></script>
    <script src="assets/js/datatables/datatables-fonts.js"></script>
    <script src="assets/js/datatables/datatables-html-buttons.js"></script>
    <script src="assets/js/datatables/datatables-print-buttons.js"></script>

</html>





