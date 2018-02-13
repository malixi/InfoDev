<?php
$connect = mysqli_connect("localhost", "root", "", "infodev");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM product WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
