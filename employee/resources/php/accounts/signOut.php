<?
	session_start();
	$_SESSION['username'] = null;
	$_SESSION['auth'] = null;
	session_destroy();
	header("LOCATION: /employee");
	
?>