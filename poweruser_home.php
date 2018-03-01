<?php
@session_start();

if(!isset($_SESSION['user_id'])) {
  header('Location: index.php');
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

    <!--     Fonts and icons     -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

      <link rel="stylesheet" type="text/css" href="assets/css/notify.css">


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

            </ul>
        </div>
    </div>



    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                            
                

                    </button>
                    <a href="home.php"><img  class"navbar-brand" src="images/infor-logo.png"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                
                          <li>
                            <a class="not-active">
                                <p>InfoDev Product Assignment</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
              
                        <li>
                            <a>

                                <p>Welcome, <?php 

                                if(isset($_SESSION['user_id'])) 

                                {
                                echo $_SESSION['user_firstname'] ." ". $_SESSION['user_lastname'] ;
                                } ?></p>
                            </a>
                        </li>

                        <li>
                            <a href="logout.php">
                                <p>Sign Out</p>
                            </a>
                        </li>


                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>



        <div class="content">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
             <div class="card">
                            <div class="header">
                                   <div class="row">
                                    <div class="col-md-9">
                                <a class="btn btn-primary btn-fill" id="addproduct" role="button">Add Product</a>
                            </div>
    
                        </div>
                    </div>
                            <div id="msg" class="alert"></div>
                            <div class="container-fluid">
                            <div class="row">
                            <div class="content table-responsive table-full-width">
                                <table id="table" class="table table-hover table-striped">
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
                            while ($row = mysqli_fetch_array($result)) {
                            ?>  
                                        <tr data-row-id="<?php echo $row["id"]; ?>">
                                        <td ><input type="checkbox" class="sub_chk" data-id="<?php echo $row["id"]; ?>"></td> 
                                        <td class="editable-col" contenteditable="true" col-index='0' oldVal ="<?php echo $row['productArea'];?>"><?php echo $row['productArea'];?></td>
         <td class="editable-col" contenteditable="true" col-index='1' oldVal ="<?php echo $row['productLongName'];?>"><?php echo $row['productLongName'];?></td>
         <td class="editable-col" contenteditable="true" col-index='2' oldVal ="<?php echo $row['productShortName'];?>"><?php echo $row['productShortName'];?></td>
         <td class="editable-col" contenteditable="true" col-index='3' oldVal ="<?php echo $row['documentName'];?>"><?php echo $row['documentName'];?></td>
         <td class="editable-col" contenteditable="true" col-index='4' oldVal ="<?php echo $row['docID'];?>"><?php echo $row['docID'];?></td>
         <td class="editable-col" contenteditable="true" col-index='5' oldVal ="<?php echo $row['author'];?>"><?php echo $row['author'];?></td>
         <td class="editable-col" contenteditable="true" col-index='6' oldVal ="<?php echo $row['supportedFormat'];?>"><?php echo $row['supportedFormat'];?></td>
         <td class="editable-col" contenteditable="true" col-index='7' oldVal ="<?php echo $row['whereToFind'];?>"><?php echo $row['whereToFind'];?></td>
                                        </tr>  
                            <?php  
                            };  
                            ?> 
                            </table>
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

                    <!-- Login pop -->
                    <div class="modal fade" id="showproduct" role="dialog">
                    <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="row" >

 
                        <div class="card">

                            <div class="header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="title">Add Product</h4>
                            </div>


                            <div class="content">

                                <form role="form"  action="insert.php" method="post"  class="login"> 

                                            <div class="form-group">
                                                <label>Product Area (Category)</label>
                                                <input type="text" class="form-control" name="productarea" id="productarea" required="required">
                                            </div>
                                        
                                        
                                            <div class="form-group">
                                                <label>Product Long Name</label>
                                                <input type="text" class="form-control" name="productlongname" id="productlongname" required="required">
                                            </div>
                                      
                                       
                                            <div class="form-group">
                                                <label>Product Short Name</label>
                                                <input type="text" class="form-control" name="productshortname" id="productshortname" required="required">
                                         
                                        </div>

                                            <div class="form-group">
                                                <label>Document Name</label>
                                                <input type="text" class="form-control" name="docname" id="docname" required="required">
                                         
                                        </div>
                                            <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Doc ID</label>
                                                <input type="text" class="form-control" name="docid" id="docid" required="required">
                                           
                                        </div>
                                    </div>

                                        <div class="col-md-7">
                                        
                                            <div class="form-group">
                                                <label>Author</label>
                                                <input type="text" class="form-control" name="author" id="author" required="required">
                                        
                                        </div>
                                    </div>
                                </div>

                                         <div class="row">
                                        <div class="col-md-5">

                                        <div class="form-group">
                                        <label>Supported Format</label>  
                                        <div class="form-check">
                                            <ul>
                                          <li><input class="form-check-input" type="checkbox" value="PDF"  name="format[]"  id="pdf">
                                          <label class="form-check-label" for="pdf">
                                            PDF
                                          </label></li>
                                          <li><input class="form-check-input" type="checkbox" name="format[]" value="XLS/CSV" id="pdf">
                                          <label class="form-check-label" for="pdf">
                                            XLS/CSV
                                          </label></li>
                                          <li><input class="form-check-input" type="checkbox"  name="format[]" value="Online Help" id="onlinehelp">
                                          <label class="form-check-label" for="onlinehelp">
                                            Online Help
                                          </label></li>
                                      </ul>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-5">
                                        <div class="form-group">
                                        <label>Where to Find</label>  
                                        <div class="form-check">
                                            <ul>
                                          <li><input class="form-check-input" type="checkbox" name="find[]" value="Documentation Central" id="doccentral">
                                          <label class="form-check-label" for="doccentral">
                                            Documentation Central
                                          </label></li>
                                          <li><input class="form-check-input" type="checkbox"  name="find[]" value="Infor Xtreme" id="inforxtreme">
                                          <label class="form-check-label" for="inforxtreme">
                                            Infor Xtreme
                                          </label></li>
                                        
                                      </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                    <button type="button" class="btn btn-secondary btn-fill" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-info btn-fill">Submit</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
 
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


    $(document).ready(function(){
    $("#addproduct").click(function(){
        $("#showproduct").modal();
    });
});


});




</script>
<script src="jquery.simplePagination.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  jQuery('#master').on('click', function(e) {
    if($(this).is(':checked',true))  
    {
      $(".sub_chk").prop('checked', true);  
    }  
    else  
    {  
      $(".sub_chk").prop('checked',false);  
    }  
  });
  jQuery('.delete_all').on('click', function(e) { 
    var allVals = [];  
    $(".sub_chk:checked").each(function() {  
      allVals.push($(this).attr('data-id'));
    });  
    //alert(allVals.length); return false;  
    if(allVals.length <=0)  
    {  
      alert("Please select row.");  
    }  
    else {  
      //$("#loading").show(); 
      WRN_PROFILE_DELETE = "Are you sure you want to delete this row?";  
      var check = confirm(WRN_PROFILE_DELETE);  
      if(check == true){  

        var join_selected_values = allVals.join(","); 
        
        $.ajax({   
          
          type: "POST",  
          url: "delete.php",  
          cache:false,  
          data: 'ids='+join_selected_values,  
          success: function(response)  
          {   
            window.setTimeout(function(){window.location.reload()}, 500);

            //referesh table
          }   
        });
        $.each(allVals, function( index, value ) {
          $('table tr').filter("[data-row-id='" + value + "']").css('background-color', '#FF3232');
          $('table tr').filter("[data-row-id='" + value + "']").fadeOut('slow');
        });
      }  
    }  
  });
  jQuery('.remove-row').on('click', function(e) {
    WRN_PROFILE_DELETE = "Are you sure you want to delete this row?";  
      var check = confirm(WRN_PROFILE_DELETE);  
      if(check == true){
        $('table tr').filter("[data-row-id='" + $(this).attr('data-id') + "']").remove();
      }
  });
});
</script>


<script type="text/javascript" src="assets/js/datatables.min.js"></script>
<script src="assets/js/notify.js"></script>

 <script>
     
$(document).ready(function() {
    $('#table').DataTable( {
        "pagingType": "full_numbers",
        "lengthMenu": [[10, 20, -1], [10, 20, "All"]],
        "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 0 ] }
       ]
    } );
} );
 </script>


<!-- edit function -->

<script type="text/javascript">
$(document).ready(function(){
  $('td.editable-col').on('focusout', function() {
    data = {};
    data['val'] = $(this).text();
    data['id'] = $(this).parent('tr').attr('data-row-id');
    data['index'] = $(this).attr('col-index');
      if($(this).attr('oldVal') === data['val'])
    return false;

    $.ajax({   
          
          type: "POST",  
          url: "server.php",  
          cache:false,  
          data: data,
          dataType: "json",       
          success: function(response)  
          {   
            //$("#loading").hide();
            if(!response.error) {
              $.notify('Document Updated',{close: true, color: "#fff", background: "#20D67B",animationType:"drop"})
  
            } else {
              $.notify('Please try again!', { close: true, color: "#fff", background: "#d44950",animationType:"drop"})
            }
          }   
        });
  });
});

</script>




</html>
