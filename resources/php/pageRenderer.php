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
		
		// This can probably be cleaned up
		// if page exists display it
		// else display 404 error page
		if( pageExists(count($pageTileResults->getRow())) ){
			displayHTML($pageTileResults->getRow());
		}else{
			display404Error($db);
		}
		
	}
	// Request only has a pageName associated with it
	else {
		//error check if pageName does not exist!!!!!
		$queryString = ['category'=>"",'pageName'=>$pageName];
		$pageTileResults = $db->retrieveStrict($queryString);
		if( count($pageTileResults->getRow()) == 0){
			// Page not found... display 404 error page
			$queryString['pageName'] = '404';
			$pageTileResults = $db->retrieveStrict($queryString);	
			displayHTML($pageTileResults->getRow());
		}else{
			displayHTML($pageTileResults->getRow());
		}
	}
}
	
function displayHTML($contentTileArray){
	// Sort tiles based on defined order
	uasort($contentTileArray, 'sortByOrder');
	$count = 1;
	foreach($contentTileArray as $tile){
		// get the layout for the current tile and render using proper HTML
		switch ( intval($tile['layout']) ){
			case 1: // Default 2 column layout with with alternating columns.		
				$row = new pageTile("");
				if($count % 2 == 0){
					$row->addTextColumn($tile['col1'],"col-md-push-6");
					$row->addTextColumn($tile['col2'],"col-md-pull-6");

				}else{
					$row->addTextColumn($tile['col1'],"");
					$row->addTextColumn($tile['col2'],"");
				}	
				echo $row->build();
			break;

			case 2: // Media tile w/ background and image
				// col1 contains an image
				// col2 contains the header text
				// col3 contains the body of text
				$row = new pageTile("mediaTile");
				$row->addImageColumn("/resources/images/PersonalCare.png","");
				$row->addTextColumn($tile['col3'],"");
				echo $row->build();
				
			break;
			
			case 3:
				$row = new pageTile($tile['col12']);
				if($count % 2 == 0){
					$row->addTextColumn($tile['col1'],"col-md-push-6");
					$row->addTextColumn($tile['col2'],"col-md-pull-6");

				}else{
					$row->addTextColumn($tile['col1'],"");
					$row->addTextColumn($tile['col2'],"");
				}	
				echo $row->build();
			break;
			
			case 4: // Employee directory display
				$row = new pageTile("employeeBio");
				$row->addsmTextColumn($tile['col1'],"");
				$row->addsmTextColumn($tile['col2'],"");
				echo $row->build();
			break;
			
			case 5: // Custom Layout, create row and insert col1 data
				$row = new pageTile($tile['col12'] ); // REMOVED ." hidden-xs"
				$row->setText($tile['col1']);
				echo $row->build();
			
			break;
			case 6: // Google serch results layout
				$row = new html_element("div");
				$row->set("class","row");
				$col = new html_element("div");
				$col->set("class","col-md-12");
				$col->set("text",$tile['col1']);
				$row->inject($col);
				echo $row->build();
			break;
		}
			$count++;
	}
}	
	
function sortByOrder($a,$b){
	return (integer)$a['order'] > (integer)$b['order'];	
}

function pageExists($pageTileCount){
	if( $pageTileCount == 0){
		return false;
	}else{
		return true;
	}
}

function display404Error($db){
		// Page not found... display 404 error page
		$queryString['category'] = '';
		$queryString['pageName'] = '404';
		$pageTileResults = $db->retrieveStrict($queryString);	
		displayHTML($pageTileResults->getRow());
}

?>