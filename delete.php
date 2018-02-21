<?php
$connect = mysqli_connect("localhost", "root", "", "infodev");
if(isset($_POST["ids"]))
{
 $deleted = trim($_POST['ids']);
 $query = "DELETE FROM product WHERE id in ($deleted)";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>

