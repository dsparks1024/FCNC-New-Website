<?	
	
class pageTile{
	
	var $row;
	var $columns;
	
	
function __construct($className){
	$this->row = new html_element('div');
	$this->row->set('class',"row contentTile $className");
}

function addClass($className){
	$this->currentClass = $this->row->get('class');
	echo  $this->currentClass; 
	//$this->row->set('class',$className);
}

function addTextColumn($text,$columnClass){
	$this->text = new html_element("div");
	$this->text->set('text',$text);
	$this->text->set('class',$columnClass);
	$this->row->inject($this->text);
}

function addImageColumn($imagePath,$columnClass){
	$this->img = new html_element("img");
	$this->img->set('src',$imagePath);
	$this->img->set('class',$columnClass);
	$this->row->inject($this->img);
}


function build(){
	return $this->row->build();
}


}


?>