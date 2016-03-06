<? 
	$root = $_SERVER['DOCUMENT_ROOT'];
	
	// Load Dom's Framework and its components
	include_once($root.'/libraries/php/DomsFramework/Database/Database.php');
	include_once($root.'/libraries/php/DomsFramework/CMS/CMSComponents.php');
	include_once($root.'/libraries/php/DomsFramework/HTML/formBuilder.php');
	
	define("DOMS_FRAMEWORK", $root.'/libraries/php/DomsFramework');
	
	/*define("MYSQL_SERVER_ADDRESS",'107.180.51.84');
	define("MYSQL_USERNAME","fcncContent");
	define("MYSQL_PASSWORD","Fcnc@915");
	define("MYSQL_DB_NAME","fcncContent");
	*/
	
	// Localhost MYSQL Settings
	define("MYSQL_SERVER_ADDRESS",'localhost');
	define("MYSQL_USERNAME","root");
	define("MYSQL_PASSWORD","root");
	define("MYSQL_DB_NAME","FCNC_v3.0");
	
	
	// Load other necessary php files
	include_once($root.'/resources/php/pageRenderer.php');
	
?>
