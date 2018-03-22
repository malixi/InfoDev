<?php

	session_start();
	require_once('dbconfig.php');


	$id=$_SESSION['user_id'];
	$oldpassword=hash('sha512',$_POST['currentpassword']);
	$newpassword=$_POST['newpass'];
	$newpassword2=$_POST['retypepass'];
	$encryptednewpassword = hash('sha512',$_POST['retypepass']);


	$stmt = $conn->prepare('SELECT * FROM users WHERE userID = ? AND password = ?');
	$stmt->bind_param('is', $id, $oldpassword);
	$stmt->execute();
	$result = $stmt->get_result();


	if($rows = $result->fetch_assoc()){
		if($newpassword == $newpassword2){
			$stmt2 = $conn->prepare('UPDATE users SET password =? WHERE userID = ?');
			$stmt2->bind_param('si', $encryptednewpassword, $id);
			$stmt2->execute();

			echo "<script>window.alert('Password updated.');</script>";
			echo"<script>location.href='settings.php';</script>";
		}else{
			echo "<script>alert('Password Dont Match.');history.back();</script>";
		}
	}else{
		header("Content-Type: text/html; charset=UTF-8");
		echo "<script>alert('Old password incorrect.');history.back();</script>";
		$stmt->close();
		exit;
	}
?>
