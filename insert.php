<?php

	@session_start();
	require_once('connector.php');

	$productArea = $_POST['productarea'];
	$productLongName = $_POST['productlongname'];
	$productShortName = $_POST['productshortname'];
	$documentName = $_POST['docname'];
	$documentID = $_POST['docid'];
	$Author = $_POST['author'];
	
	if(isset($_POST['format']))
	{
	    $Format = implode("\n",$_POST['format']);
	}
	else
	    $Format = null; //or any other default value

	if(isset($_POST['find']))
	{
	    $Find = implode("\n",$_POST['find']);
	}
	else
	    $Find = null;



	  $stmt = $dbconn->prepare('SELECT * FROM product WHERE docID = ?');
			$stmt->bind_param('s', $documentID);
			$stmt->execute();
			$result = $stmt->get_result();
			if($rows = $result->fetch_assoc()) {
				header("Content-Type: text/html; charset=UTF-8");
				echo "<script>alert('Document ID already exists.');history.back();</script>";
				$stmt->close();
				exit;
			} else {
				$stmt2 = $dbconn->prepare('INSERT INTO product (productArea, productLongName, productShortName, documentName, docID, author, supportedFormat, whereToFind) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
				$stmt2->bind_param('ssssssss', $productArea, $productLongName, $productShortName, $documentName, $documentID, $Author, $Format, $Find);
				$stmt2->execute();
				echo "<script>alert('Product Added.');</script>";
				echo"<script>location.href='home.php';</script>";
			}

?>


