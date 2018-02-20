<?php
include_once('dbconfig.php');

if (isset($_POST['login']))
{
	$username = $con->escapeString($_POST['uname']);
	$upwd = $con->escapeString($_POST['password']);
	echo $con->userLogin($username, $upwd);
}
?>