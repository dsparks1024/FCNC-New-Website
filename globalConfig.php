<? 
	$root = $_SERVER['DOCUMENT_ROOT'];
	
	// Load Dom's Framework and its components
	include_once($root.'/libraries/php/DomsFramework/Database/Database.php');
	include_once($root.'/libraries/php/DomsFramework/CMS/CMSComponents.php');
	include_once($root.'/libraries/php/DomsFramework/HTML/formBuilder.php');
	
	define("DOMS_FRAMEWORK", $root.'/libraries/php/DomsFramework');
	
	// Load other necessary php files
	include_once($root.'/resources/php/pageRenderer.php');
?>