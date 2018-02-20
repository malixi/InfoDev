<?php
@session_start();

 if(isset($_SESSION['user_id']))
 {
     header('Location: home.php');
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

    <link rel="stylesheet" href="assets/css/excel-filter.css" />




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
                                   <div class="row">
                                    <div class="col-md-9">
                                    </div>
                                    <div class="col-md-3">
                                    <div class="input-group">
                                 
                                    <input type="text" name="search_text" id="search_text" placeholder="Search by Document Name" class="form-control" />
                                    <span class="input-group-addon">Search</span>
                                    </div>
                                    </div>
                                    </div>
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

    <div id="login-modal" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog">

    <div class="modal-dialog ">
        <div class="login-modal-container">
            <form id="login-form" role="form">

                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     
                      <center><img src="images/infor-logo.png"</center>
                    <h2>Information Development</h2>
                    <div id="err-msg"></div>
                    <div class="form-group">
                        <input type="text" id="uname" name="uname" placeholder="Username" class="form-control input-lg" />
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control input-lg" />
                    </div>
                    <div class="form-group">
                        <div id="captcha"></div>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="login" name="login" value="Sign In" class="btn-block btn-lg" />
                    </div>
                </div>
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

    <script src="assets/js/login.js"></script>


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



});

</script>

  <script src="assets/js/excel-filter.js"></script>

</html>
 