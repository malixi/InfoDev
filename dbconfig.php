<?php
// mysql connection
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'infodev';

$conn = new mysqli($hostname, $username, $password, $database);
if($conn->connect_errno)
    die('Error ' . $this->db->connect_error);

include_once('UserClass.php');
$con = new UserClass($conn);
?>