<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "infodev");
$output = '';
$nodata = 'No data found';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM product 
  WHERE productArea LIKE '%".$search."%'
  OR productLongName LIKE '%".$search."%' 
  OR productShortName LIKE '%".$search."%' 
  OR documentName LIKE '%".$search."%' 
  OR docID LIKE '%".$search."%'
  OR author LIKE '%".$search."%'
  OR supportedFormat LIKE '%".$search."%'
  OR whereToFind LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM product ORDER BY `id`
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="content table-responsive table-full-width">
  <table class="table table-hover table-striped">
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
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr data-row-id="'.$row["id"].'">
    <td><input type="checkbox" class="sub_chk" data-id="'.$row["id"].'"></td>
    <td>'.$row["productArea"].'</td>
    <td>'.$row["productLongName"].'</td>
    <td>'.$row["productShortName"].'</td>
    <td>'.$row["documentName"].'</td>
    <td class="docID">'.$row["docID"].'</td>
    <td>'.$row["author"].'</td>
    <td>'.$row["supportedFormat"].'</td>
    <td>'.$row["whereToFind"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo  "<center>" .$nodata. "</center>";
}

?>

<!-- delete function -->
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
            $("#loading").hide();  
            $("#msgdiv").html(response);
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
