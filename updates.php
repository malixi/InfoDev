<?php
$connect = mysqli_connect("localhost", "root", "", "infodev");
$query = "
 UPDATE product SET ".$_POST["name"]." = '".implode('<br>', $_POST['value'])."' 
 WHERE id = '".$_POST["pk"]."'";
mysqli_query($connect, $query);
?>