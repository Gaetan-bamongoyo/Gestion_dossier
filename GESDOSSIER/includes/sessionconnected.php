<?php
	include './class/app.php';
	session_start();

	if(!isset($_SESSION['CodeUser']) || trim($_SESSION['CodeUser']) == ''){
		header('location: ./index.php');
		exit();
	}

	$conn = $app->getPDO();

	$id = $_SESSION['CodeUser'];
	$sql = "SELECT * FROM tbl_user WHERE id_user=$id";
	$req = $app->fetch($sql);
	$username = $req['username'];
	$isActive = $req['isActive'];
    

?>