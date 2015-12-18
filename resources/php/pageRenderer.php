<?
ini_set('error_reporting', E_ALL ^ E_NOTICE); 
ini_set('display_errors', 1);	

include_once($root."/libraries/php/pageTile.php");


function displayPageContent($category,$pageName){
	
	$db = new Database("fcncContent.db.6441590.hostedresource.com","fcncContent","Fcnc@915","fcncContent");
	$db->setTable("contentTiles");
	// If varables have not been set, display the home page
	if($category == '' && $pageName == ''){
		$queryString = ['category'=>'index','pageName'=>'index'];
		$pageTileResults = $db->retrieveStrict($queryString);
		displayHTML($pageTileResults->getRow());
	}
	// Request has a cateagory and a page name associated with it
	else if(isset($category)){
		//error check if category and pageName exitst!!!!!
		$queryString = ['category'=>$category,'pageName'=>$pageName];
		$pageTileResults = $db->retrieveStrict($queryString);
		displayHTML($pageTileResults->getRow());
	}
	// Request only has a pageName associated with it
	else {
		//error check if pageName does not exist!!!!!
		echo $pageName;
	}
}
	
function displayHTML($contentTileArray){
	// Sort tiles based on defined order
	uasort($contentTileArray, 'sortByOrder');
	foreach($contentTileArray as $tile){
		// get the layout for the current tile and render using proper HTML
		switch ( intval($tile['layout']) ){
			case 1: // Default 2 column layout
				$row = new html_element('div');
				$row->set('class','row contentTile');
				$col1 = new html_element('div');
				$col1->set('class','col-md-6');
				$col1->set('text',$tile['col1']);
				$col2 = new html_element('div');
				$col2->set('class','col-md-6');
				$col2->set('text',$tile['col2']);
				$row->inject($col1);
				$row->inject($col2);
				echo $row->build();
			break;

			case 2: // Media tile w/ background and image
				// col1 contains an image
				// col2 contains the header text
				// col3 contains the body of text
				$row = new pageTile("mediaTile");
				$row->addImageColumn("/resources/images/PersonalCare.png","col-md-5 croppedImage");
				$row->addTextColumn($tile['col3'],"col-md-7");
				echo $row->build();
				
			break;
		}
	}
}	
	
function sortByOrder($a,$b){
	return (integer)$a['order'] > (integer)$b['order'];	
}

?>