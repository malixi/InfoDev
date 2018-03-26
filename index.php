<?php
@session_start();

 if(isset($_SESSION['user_id']))
 {
     header('Location: home.php');
 }

?>

<?php


include_once "dbconfig.php"; 
$sql = "SELECT * FROM product ORDER BY id";  
$result = mysqli_query($conn, $sql);  
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

    <!--  Datatables CSS    -->
        <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css"/>


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
                <a href="index.php" class="simple-text">
                    InfoDev Product Assignment
                </a>
            </div>

            <ul class="nav">
   
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
                                
                           
                            <div class="actionPart" >
                     
                                <div class="export">
                                <label>Print/Export to</label>
                                <select class="form-control" id="export">
                                    <option></option>
                                    <option id="print">Print</option>
                                    <option id="csv">CSV</option>
                                    <option id="excel">XLS</option>                                       
                                    <option id="pdf">PDF</option>
                                </select>
                                 </div>

                        
                            </div>
                                </div>

                                       <div class="container-fluid">
                            <div class="row">
                            <div class="content table-responsive table-full-width">
                                <table id="table" class="table table-striped">
                                <thead>
                                <tr>
                                   <th>Product Area</th>
                                   <th>Product Long Name</th>
                                   <th>Product Short Name</th>
                                   <th>Document Name</th>
                                   <th>Doc ID</th>
                                   <th>Author</th>
                                   <th>Supported Format</th>
                                   <th>Where to Find</th>
                                </tr>
                                </thead>
                            <?php  
                            while ($row = mysqli_fetch_array($result)) {
                            ?>  
                                        <tr>
                                        <td><?php echo $row["productArea"]; ?></td>  
                                        <td><?php echo $row["productLongName"]; ?></td>  
                                        <td><?php echo $row["productShortName"]; ?></td>
                                        <td><?php echo $row["documentName"]; ?></td>
                                        <td class="docID"><?php echo $row["docID"]; ?></td>
                                        <td><?php echo $row["author"]; ?></td>
                                        <td><?php echo $row["supportedFormat"]; ?></td>
                                        <td><?php echo $row["whereToFind"]; ?></td>
                                        </tr>  
                            <?php  
                            };  
                            ?> 
                            </table>

                            </div>
            


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


<!-- login popup -->

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
                        <input type="text" id="uname" name="uname" placeholder="Username" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control" />
                    </div>
                    <div class="form-group">
                        <div id="captcha"></div>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="login" name="login" value="Sign In" class="btn-block btn-sm" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


</body>


    <!--   Core JS Files   -->
    <script src="assets/js/jquery.2.0.3.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>


    <script src="assets/js/login.js"></script>

    <script type="text/javascript" src="assets/js/datatables.min.js"></script>

 <script>
     
$(document).ready(function() {
    $('#table').DataTable( {
        "pagingType": "full_numbers",
        "lengthMenu": [[10, 20, -1], [10, 20, "All"]],
        dom: 'Blfrtip',
            buttons: [
            'print',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
            initComplete: function() {
         var $buttons = $('.dt-buttons').hide();
         $('#export').on('change', function() {
            var btnClass = $(this).find(":selected")[0].id 
               ? '.buttons-' + $(this).find(":selected")[0].id 
               : null;
            if (btnClass) $buttons.find(btnClass).click(); 
         })
       },
    } );
} );
 </script>

    <script src="assets/js/datatables/datatables-buttons.js"></script>
    <script src="assets/js/datatables/datatables-jszip.js"></script>
    <script src="assets/js/datatables/datatables-pdfmake.js"></script>
    <script src="assets/js/datatables/datatables-fonts.js"></script>
    <script src="assets/js/datatables/datatables-html-buttons.js"></script>
    <script src="assets/js/datatables/datatables-print-buttons.js"></script>



</html>
 