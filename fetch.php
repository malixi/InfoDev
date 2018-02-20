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
  SELECT * FROM product ORDER BY `id` DESC
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

       <th>Action</th>
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
   <td><button type="button" name="delete" class="btn btn-danger btn-xs delete btn-fill" id="'.$row["id"].'">Delete</button></td>
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


