<?php
session_start();
require_once 'user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
    $user_login->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
    $uname = trim($_POST['txtemail']);
    $upass = trim($_POST['txtupass']);

    if($user_login->login($uname,$upass))
    {
        $user_login->redirect('home.php');
    }
}
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

    <!--  Login CSS    -->
    <link href="assets/css/login.css" rel="stylesheet" media="screen">




    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


    
</head>
<body>


<div class="wrapper">
    <div class="sidebar" data-color="white">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    InfoDev
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <div class="main-panel">
        <?php include 'header.php'; ?>
     <div class="content">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
             <div class="card">
                            <div class="header">
                                 <h4 class="title">Information Development Product</h4>

                              <!--    <div class="input-group">
                                 <span class="input-group-addon">Search</span>
                                 <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
                                </div> -->
                            </div>
                            <div id="result"></div>
                            </table>

                            </div>


                        </div>
                    </div>
            </div>
      
        </div>
        <?php include 'footer.php'; ?>

    </div>
</div>

    <div class="modal fade" id="popupmodal" role="dialog">
    <div class="modal-dialog">
        <div class="content" id="login">
            <?php
        if(isset($_GET['inactive']))
        { ?>
              <div class='alert alert-error'>
                <button class='close' data-dismiss='alert'>&times;</button>
                <strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it.
            </div>
            <?php
        }
        ?>
    <form class="form-signin" id="reg-form" method="post">
        <?php
        if(isset($_GET['error']))
        {
            ?>
                 <div class='alert alert-success'>
                <button class='close' data-dismiss='alert'>&times;</button>
                <strong>Wrong Details!</strong>
            </div>
            <?php
        }
        ?>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><img src="images/infor-logo.png"</center>


        <h4 class="form-signin-heading" id="loginfont">Information Development</h4><hr />
        <input type="text" class="input-block-level" placeholder="Username" name="txtemail" required />
        <input type="password" class="input-block-level" placeholder="Password" name="txtupass" required />
        <hr />

        <button class="btn btn-large btn-primary" type="submit" name="btn-login">Sign in</button>

      </form>

    </div>
</div>
</div>


</body>



    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>


<script>
    $(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"indexfetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });

    $(document).ready(function(){
    $("#login-popup").click(function(){
        $("#popupmodal").modal();
    });

});


});

</script>

</html>
 