<?
ini_set('error_reporting', E_ALL ^ E_NOTICE); 
ini_set('display_errors', 1);	

include_once($root."/libraries/php/pageTile.php");


function displayPageContent($category,$pageName){
	
	//$db = new Database("107.180.51.84","fcncContent","Fcnc@915","fcncContent");
	$db = new Database("localhost","root","root","FCNC_v3.0");
	
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
				$row = new pageTile("contentTile ".$tile['containerClass']);
				if($count % 2 == 0){
					$row->addTextColumn($tile['col1'],"col-md-push-6");
					$row->addTextColumn($tile['col2'],"col-md-pull-6");

				}else{
					$row->addTextColumn($tile['col1'],"");
					$row->addTextColumn($tile['col2'],"");
				}	
				echo $row->build();
			break;
			
			case 2: // Image Slider layout
				$row = new pageTile("contentTile ".$tile['containerClass']);
				echo "NOT IMPLEMENTED";
			break;
						
			case 4: // Employee directory display
				$row = new pageTile("contentTile employeeBio");
				$row->addsmTextColumn($tile['col1'],"");
				$row->addsmTextColumn($tile['col2'],"");
				echo $row->build();
			break;
			
			case 5: // Custom Layout, create row and insert col1 data
				$row = new pageTile( $tile['containerClass'] ); // REMOVED ." hidden-xs"
				$row->setText($tile['col1']);
				echo $row->build();
			
			break;
			case 6: // Google serch results layout
				$row = new html_element("div");
				$row->set("class","row");
				$col = new html_element("div");
				$col->set("class","col-md-12 ".$tile['col12']);
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