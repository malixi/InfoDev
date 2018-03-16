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
    <script src="assets/js/bootstrap-js.js"></script>

  

 


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
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                            <div class="header">
                                   <div class="row">
                                    <div class="col-md-10">
                                    <?php include 'addproduct.php'; ?>
                                    <?php if($_SESSION['user_type'] === "admin") { 
                                     include 'import.php';
                                 }
                                     ?>
                            </div>
                            </label>

                            <div class="col">
                            <div class="actionPart" >
                            <div class="dataTables_filter">
                                <div class="export">
                                <label>      Print/Export to</label>
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

                            </div>

    
                                </div>
                    </div>
                            <div class="container-fluid">
                            <div class="row">
                            <div class="content table-responsive table-full-width">

                                <?php if($_SESSION['user_type'] === "admin") { ?>
                                
                                <table id="table" class="table table">
                                <thead>
                                <tr>
                                   <th><input type="checkbox" id="master"></th>
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
                                <tbody id="_editable_table">
                                  <?php
                                  foreach((array)$results as $row=>$v) {
                                  ?>
                                      <tr data-row-id="<?php echo $results[$row]["id"]; ?>">
                                        <td ><input type="checkbox" class="sub_chk" data-id="<?php echo $results[$row]["id"]; ?>"></td> 
                                        <td data-name="productArea" class="productArea" data-type="text" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["productArea"]; ?></td>
                                        <td data-name="productLongName" class="productLongName" data-type="text" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["productLongName"]; ?></td>
                                        <td data-name="productShortName" class="productShortName" data-type="text" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["productShortName"]; ?></td>
                                        <td data-name="documentName" class="documentName" data-type="text" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["documentName"]; ?></td>
                                        <td data-name="docID" class="docID" data-type="text" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["docID"]; ?></td>
                                        <td data-name="author" class="author" data-type="text" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["author"]; ?></td>
                                        <td data-name="supportedFormat" class="supportedFormat" data-type="checklist" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["supportedFormat"]; ?></td>
                                        <td data-name="whereToFind" class="whereToFind" data-type="checklist" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["whereToFind"]; ?></td>
                                      </tr>
                                    <?php
                                    }
                                    ?>
                                    </table>

                                    <?php } else if ($_SESSION['user_type'] === "poweruser") 
                                    {
                                     ?>

                                     <table id="table" class="table table">
                                <thead>
                                <tr>
                                   <th class="table-header" ><input type="checkbox" id="master"></th>
                                   <th class="table-header" >Product Area</th>
                                   <th class="table-header" >Product Long Name</th>
                                   <th class="table-header" >Product Short Name</th>
                                   <th class="table-header" >Document Name</th>
                                   <th class="table-header" >Doc ID</th>
                                   <th class="table-header" >Author</th>
                                   <th class="table-header" >Supported Format</th>
                                   <th class="table-header" >Where to Find</th>
                                </tr>
                                </thead>
                                <tbody id="_editable_table">
                                  <?php
                                  foreach((array)$results as $row=>$v) {
                                  ?>
                                      <tr data-row-id="<?php echo $results[$row]["id"]; ?>">
                                        <td ><input type="checkbox" class="sub_chk" data-id="<?php echo $results[$row]["id"]; ?>"></td> 
                                        <td data-name="productArea" class="productArea" data-type="text" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["productArea"]; ?></td>
                                        <td data-name="productLongName" class="productLongName" data-type="text" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["productLongName"]; ?></td>
                                        <td data-name="productShortName" class="productShortName" data-type="text" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["productShortName"]; ?></td>
                                        <td data-name="documentName" class="documentName" data-type="text" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["documentName"]; ?></td>
                                        <td data-name="docID" class="docID" data-type="text" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["docID"]; ?></td>
                                        <td data-name="author" class="author" data-type="text" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["author"]; ?></td>
                                        <td id="usernames" data-name="supportedFormat" class="supportedFormat" data-type="checklist" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["supportedFormat"]; ?></td>
                                        <td data-name="whereToFind" class="whereToFind" data-type="checklist" data-pk="<?php echo $results[$row]["id"]; ?>"><?php echo $results[$row]["whereToFind"]; ?></td>
                                      </tr>
                                    <?php
                                    }
                                    ?>
                                    </table>

                                     <?php } ?>
                                    </tbody>
                            </div>

    
            


                </div>
            </div>


                              <div class="footer">
                                    <div class="header">
                                    <a type="button" class="btn btn-danger btn-fill pull-left delete_all">Delete</a>
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
