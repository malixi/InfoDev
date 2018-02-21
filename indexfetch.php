<?php
//fetch.php

$connect = mysqli_connect("localhost", "root", "", "infodev");
$output = '';
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
  SELECT * FROM product
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="content table-responsive table-full-width">
  <table id="table" class="table table-hover table-striped">
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
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
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
 echo 'No data found';
}

?>

 <script>
    // Use the plugin once the DOM has been loaded.
    $(function () {
      // Apply the plugin 
      $('#table').excelTableFilter();
    });
  </script>

