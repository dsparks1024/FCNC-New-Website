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
	$this->text->set('class','col-md-6');
	$this->row->inject($this->text);
}

function addImageColumn($imagePath,$columnClass){
	$div = new html_element("div");
	$div->set('class','col-md-6');
	$this->img = new html_element("img");
	$this->img->set('src',$imagePath);
	$div->inject($this->img);
	$this->row->inject($div);
}


function build(){
	return $this->row->build();
}


}


?>