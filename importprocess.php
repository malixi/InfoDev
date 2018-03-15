<?php

require_once 'dbconfigs.php';

if(isset($_POST["submit_file"]))
{
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 fgets($file_open); 
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {
  $productArea = $csv[0];
  $productLongName = $csv[1];
  $productShortName = $csv[2];
  $documentName = $csv[3];
  $docID = $csv[4];
  $author = $csv[5];
  $supportedFormat = $csv[6];
  $whereToFind = $csv[7];


  $stmt = $DBcon->prepare("INSERT INTO product(productArea,productLongName,productShortName,documentName,docID,author,supportedFormat,whereToFind) VALUES(:productArea,:productLongName,:productShortName,:documentName,:docID,:author,:supportedFormat,:whereToFind)");

  $stmt->bindparam(':productArea', $productArea);
  $stmt->bindparam(':productLongName', $productLongName);
  $stmt->bindparam(':productShortName', $productShortName);
  $stmt->bindparam(':documentName', $documentName);
  $stmt->bindparam(':docID', $docID);
  $stmt->bindparam(':author', $author);
  $stmt->bindparam(':supportedFormat', $supportedFormat);
  $stmt->bindparam(':whereToFind', $whereToFind);
  $stmt->execute();
 }
}

echo "<script>alert('File Uploaded');</script>";
echo"<script>location.href='home.php';</script>";

?>



