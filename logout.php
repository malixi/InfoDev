<?php
@session_start();
include_once('dbconfig.php');
$con->userLogout();
header('Location: index.php');
?>