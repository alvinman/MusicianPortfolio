<?php
	require_once('config.php');
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
	unset($_SESSION['SESS_USERNAME']);
	$_SESSION['LOGGED_USER'] = false;
	
	session_write_close();
	header("location: ".HOMEURL);
	
	session_destroy();
	exit();
?>
