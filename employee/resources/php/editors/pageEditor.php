<?
	include_once($_SERVER['DOCUMENT_ROOT'].'/globalConfig.php');
	$db = new Database('fcncContent.db.6441590.hostedresource.com','fcncContent','Fcnc@915','fcncContent');
	$db->setTable('contentTiles');
	
	
	
	
// Return a select input with the name of all pages on website
if(isset($_GET['getPagenameList'])){
	$response = "";
	$pageNames = getPageNames($db);
	foreach($pageNames as $pageName){
		$response .= "<option name='$pageName'>$pageName</option>";
	}
	echo $response;
}

// Return an editable content tiles
if(isset($_GET['getPageTiles'])){
	$response = '';
	
	$results = $db->retrieve();
	$tableRow = $results->getRow();
	$tileArray = array();
	// Get tiles assocaited with given page
	
	foreach($tableRow as $tile){
		if($tile['pageName'] == $_GET['pageName']){
			array_push($tileArray, $tile);
		}
	}	
	// Sort Tiles by tileOrder
	//uasort($tileArray, 'sortByTileOrder');

	echo json_encode($tileArray);
}
	
// Save Content Tile 
if(isset($_GET['saveContentTile'])){

	unset($_GET['saveContentTile']);
	
	$fieldNames = array();
	$fieldValues = array();
	
	foreach($_GET as $key => $value){
			array_push($fieldNames, $key);
			array_push($fieldValues, $value);
	}
	
	echo $db->update('id',$_GET['id'],$fieldValues,$fieldNames);
}	
	
// Add a new Content Tile to the selected category and pageName
if(isset($_GET['createNewTile'])){
	$results = $db->retrieve();
	$tableRow = $results->getRow(0);
	$fieldNames;
	foreach($tableRow as $field => $value){
		$fieldNames[$field] = "";
	}
	unset($fieldNames['id']);
	$fieldNames['category'] = $_GET['category'];
	$fieldNames['pageName'] = $_GET['pageName'];
	$fieldNames['layout'] = 5;
	
	echo $db->insert($fieldNames);
}

	
/* Returns an array of unique pageNames */
function getPageNames($db){
	$results = $db->retrieve();
	$tableRow = $results->getRow();
	$pageArray = array();
	foreach($tableRow as $row){
		foreach($row as $field=>$value){
			// compile a list of categories found in the table 
			if($field == 'pageName'){
				array_push($pageArray, $value);
			}
		}
	}
	$pageArray = array_unique($pageArray);
	$pageArray = array_values($pageArray);
	return $pageArray;
}

function sortByTileOrder($a,$b){
	return (integer)$a['order'] > (integer)$b['order'];	
}

function escapeJsonString($value) { # list from www.json.org: (\b backspace, \f formfeed)
    $escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
    $replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
    $result = str_replace($escapers, $replacements, $value);
    return $result;
}