
<?php
	//include connection file 
	include_once("dbconfig.php");
	
	//define index of column
	$columns = array(
		0 =>'productArea', 
		1 => 'productLongName',
		2 => 'productShortName',
		3 => 'documentName',
		4 => 'docID',
		5 => 'author',
		6 => 'supportedFormat',
		7 => 'whereToFind'
	);
	$error = false;
	$colVal = '';
	$colIndex = $rowId = 0;
	
	$msg = array('status' => !$error, 'msg' => 'Failed! updation in mysql');

	if(isset($_POST)){
    if(isset($_POST['val']) && !empty($_POST['val']) && !$error) {
      $colVal = $_POST['val'];
      $error = false;
      
    } else {
      $error = true;
    }
    if(isset($_POST['index']) && $_POST['index'] >= 0 &&  !$error) {
      $colIndex = $_POST['index'];
      $error = false;
    } else {
      $error = true;
    }
    if(isset($_POST['id']) && $_POST['id'] > 0 && !$error) {
      $rowId = $_POST['id'];
      $error = false;
    } else {
      $error = true;
    }
	
	if(!$error) {
			$sql = "UPDATE product SET ".$columns[$colIndex]." = '".$colVal."' WHERE id='".$rowId."'";
			$status = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
			// $msg = array('error' => $error, 'msg' => 'Document Updated!');
	} else {
		// $msg = array('error' => $error, 'msg' => 'Please try again!');
	}
	}
	// send data as json format
	echo json_encode($msg);
	
?>
	