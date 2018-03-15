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
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<!--     <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'> -->

      <link rel="stylesheet" type="text/css" href="assets/css/notify.css">


    <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css"/>

    <script src="assets/js/jquery.2.0.3.min.js"></script> 
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


    <link href="assets/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="assets/js/bootstrap-js.js"></script>

  

 


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
                                    <div class="col-md-11">
                                    <?php include 'addproduct.php'; ?>
                            </div>
                            <div class="col">
                            <div class="actionPart" >
                            <div class="dataTables_filter">
                                <select class="form-control" id="export">
                                    <option>Export</option>
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
                            <div class="container-fluid">
                            <div class="row">
                            <div class="content table-responsive table-full-width">

                                <?php if($_SESSION['user_type'] === "admin") { ?>
                                
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
                                        <td onclick="DoubleClick(this);"  onBlur="saveToDatabase(this,'productArea','<?php echo $results[$row]["id"]; ?>')"><?php echo $results[$row]["productArea"]; ?></td>
                                        <td onclick="DoubleClick(this);" onclick="DoubleClick(this);"   onBlur="saveToDatabase(this,'productLongName','<?php echo $results[$row]["id"]; ?>')"><?php echo $results[$row]["productLongName"]; ?></td>
                                        <td onclick="DoubleClick(this);"   onBlur="saveToDatabase(this,'productShortName','<?php echo $results[$row]["id"]; ?>')" ><?php echo $results[$row]["productShortName"]; ?></td>
                                        <td onclick="DoubleClick(this);"    onBlur="saveToDatabase(this,'documentName','<?php echo $results[$row]["id"]; ?>')"><?php echo $results[$row]["documentName"]; ?></td>
                                        <td onclick="DoubleClick(this);"    onBlur="saveToDatabase(this,'docID','<?php echo $results[$row]["id"]; ?>')"><?php echo $results[$row]["docID"]; ?></td>
                                        <td onclick="DoubleClick(this);"   onBlur="saveToDatabase(this,'author','<?php echo $results[$row]["id"]; ?>')" ><?php echo $results[$row]["author"]; ?></td>
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
                                        <td onBlur ="saveToDatabase(this,'productArea','<?php echo $results[$row]["id"]; ?>')" onClick="showEdit(this);"><?php echo $results[$row]["productArea"]; ?></td>
                                        <td onBlur ="saveToDatabase(this,'productLongName','<?php echo $results[$row]["id"]; ?>')" onClick="showEdit(this);"><?php echo $results[$row]["productLongName"]; ?></td>
                                        <td onBlur ="saveToDatabase(this,'productShortName','<?php echo $results[$row]["id"]; ?>')" onClick="showEdit(this);"><?php echo $results[$row]["productShortName"]; ?></td>
                                        <td onBlur ="saveToDatabase(this,'documentName','<?php echo $results[$row]["id"]; ?>')" onClick="showEdit(this);"><?php echo $results[$row]["documentName"]; ?></td>
                                        <td onBlur ="saveToDatabase(this,'docID','<?php echo $results[$row]["id"]; ?>')" onClick="showEdit(this);"><?php echo $results[$row]["docID"]; ?></td>
                                        <td onBlur ="saveToDatabase(this,'author','<?php echo $results[$row]["id"]; ?>')" onClick="showEdit(this);"><?php echo $results[$row]["author"]; ?></td>
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


    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js""></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

 
  <script>
$.fn.editable.defaults.mode = 'inline';

 $('#_editable_table').editable({
  container: 'body',
  selector: 'td.supportedFormat',
  url: "updates.php",
  type: "POST",
  //dataType: 'json',   
    source: [
        {value: 'PDF', text: 'PDF'},
        {value: 'Onlinehelp', text: 'Onlinehelp'},
    ],
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#_editable_table').editable({
  container: 'body',
  selector: 'td.whereToFind',
  url: "updates.php",
  type: "POST",
  //dataType: 'json',
  source: [
        {value: 'Infor Download Center', text: 'Infor Download Center'},
        {value: 'Infor Xtreme', text: 'Infor Xtreme'},

    ],
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });




</script>
</html>
