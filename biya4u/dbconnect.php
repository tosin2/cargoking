<?php
	ob_start();

	/*$con = mysql_connect("localhost","root","") or die ('Error Connectiong to mysql: '.mysqli_error());
	$dbname = "cargoking";
	$conn = mysqli_connect("127.0.0.1:3306","root","root", "ehi8so1c_cargoking") or die ('Error Connectiong to mysql: '.mysqli_error());
	*/

	/*
	$conn = mysqli_connect("127.0.0.1:3306","root","root") or die ('Error Connectiong to mysql: '.mysqli_error());
	$dbname = "ehi8so1c_cargoking";
	mysqli_select_db($conn, $dbname) or die ("Select Error: ".mysqli_error());
	*/

	//$accountId = "miggz26_";
	$accountId = "ehi8so1c";

	if( !is_resource($conn) ) {
		$conn = mysqli_connect("127.0.0.1:3306","root","root", $accountId . "_cargoking") or die ('Error Connectiong to mysql: '.mysqli_error());
		if (mysqli_connect_errno()) {
		    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
		}
	}
?>