<?php
session_start();
$inputPassword = $_POST['mypassword'];
$actualPassword = 'modelunitednations';
$isEqual = strcmp($inputPassword, $actualPassword);
if($isEqual == 0) {
	$_SESSION['username'] = 'ucbmun';
	header("location:testbank.php");
} else {
	header("location:login.php");
}
