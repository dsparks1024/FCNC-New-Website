<?

// Generically process any form passed to this file

if(isset($_GET['submitForm'])){
	
	$formName = $_GET['formName'];
	
	unset($_GET['submitForm']);
	unset($_GET['formName']);
	
	$results = "";
	
	foreach($_GET as $field => $value){
		$results .= $field . ": " . $value ."\n";
	}
	
	$sendTo = "dsparks1024@yahoo.com";
	$emailSubject = ucwords($formName)." Form Results";
	$body = $results;
	
	
	$headers = "Form: FCNC\r\n";
	$headers = "Content=type: text/html\r\n";
	
	echo mail($sendTo, $emailSubject, $body, $headers);
	
	
}	
	

?>