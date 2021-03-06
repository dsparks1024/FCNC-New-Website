<?
	
function renderEmployeePageContent($pageName){
	
	//$db = new Database("107.180.51.84","fcncContent","Fcnc@915","fcncContent");
	$db = new Database("localhost","root","root","FCNC_v3.0");

	$db->setTable("employeePages");
	// If varables have not been set, display the home page
	if($pageName == ''){
		$queryString = ['pageName'=>'home'];
		$pageTileResults = $db->retrieveStrict($queryString);
		
		displayContent($pageTileResults->getRow());
	}else{
		$queryString = ['pageName'=>$pageName];
		$pageTileResults = $db->retrieveStrict($queryString);
		
		displayContent($pageTileResults->getRow());
	}

}
function displayContent($contentTileArray){
	// Sort tiles based on defined order
	//uasort($contentTileArray, 'sortByOrder');
	
	foreach($contentTileArray as $tile){
		// get the layout for the current tile and render using proper HTML
		switch ( intval($tile['layout']) ){
			case 1:
				echo $tile['content'];
			break;
		}
		
	}
}	
	
function displayEmployee404Error($db){
		// Page not found... display 404 error page
		$queryString['pageName'] = '404';
		$pageTileResults = $db->retrieveStrict($queryString);	
		displayHTML($pageTileResults->getRow());
}

?>