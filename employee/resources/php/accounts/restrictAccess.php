<?
/**
 * This script only allows access to a page based on the 
 * authorization level set in the $_POST[acceptableAuths] array.
 *
 *	Be sure to start a session before including this script.
 * @author Dominick Sparks
 */ 
 	
 	// username and auth are not set, reject the user
 	if(!isset($_SESSION['auth']) || !isset($_SESSION['username'])){
		header("Location: /employee/login.php");
 	}else if( isset($_SESSION['username']) && !isset($_POST['acceptableAuths'])){
	 	echo '<p>no authorization need to view this page</p>';
 	}else if( in_array($_SESSION['auth'],$_POST['acceptableAuths'])){
	 	echo '<p>you are authorized to view this page.</p>';
 	}else{
	 	header("Location: /employee/login.php?authFail=true");
 	}
 	 

 
 	

?>