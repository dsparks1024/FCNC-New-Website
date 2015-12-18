<?
	include_once($_SERVER['DOCUMENT_ROOT'].'/globalConfig.php');
	$db = new Database('fcncContent.db.6441590.hostedresource.com','fcncContent','Fcnc@915','fcncContent');
	$db->setTable('contentTiles');
	
	if(isset($_POST['displayPageNames'])){
		$categories = getCategories($db);
		getPages($db,$categories);
	}



	/* Returns an array of MYSQL rows that are matched based on a column name and value */
	function getItems($colName,$colValue){
	}
	/* Returns an array of unique categories which pages are listed under */
	function getCategories($db){
		$results = $db->retrieve();
		$tableRow = $results->getRow();
		$categoryArray = array();
		foreach($tableRow as $row){
			foreach($row as $field=>$value){
				// compile a list of categories found in the table 
				if($field == 'category'){
					array_push($categoryArray, $value);
				}
			}
		}
		$categoryArray = array_unique($categoryArray);
		return $categoryArray;
	}
	
	/* Returns an array of pages associated with a given category */
	function getPages($db,$categoryArray){
		
		$result = array();
		foreach($categoryArray as $category){
			$query = $db->retrieve("category",$category);
			$tableRow = $query->getRow();
			
			foreach($tableRow as $row){
				foreach($row as $field=>$value){
					if($field == 'pageName'){
						$result[$category] = 
					}
				}
			}
		}
		
		print_r($result);
		
		return $result;
	}
	
	
	
Class navObject{
	public function __construct()
}