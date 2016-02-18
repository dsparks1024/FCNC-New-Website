<?	
	
class pageTile{
	
	var $row;
	var $columns;
	
	
	var $imageSlider;
	var $imageSliderID;
	
	
function __construct($className){
	$this->row = new html_element('div');
	$this->row->set('class',"row $className");
}

function addClass($className){
	$this->currentClass = $this->row->get('class');
	echo  $this->currentClass; 
	//$this->row->set('class',$className);
}

function setText($text){
	$this->row->set('text',$text);
}

function addTextColumn($text,$columnClass){
	$this->text = new html_element("div");
	$this->text->set('text',$text);
	$this->text->set('class',"col-md-6 $columnClass");
	$this->row->inject($this->text);
}

function addsmTextColumn($text,$columnClass){
	$this->text = new html_element("div");
	$this->text->set('text',$text);
	$this->text->set('class',"col-sm-6 $columnClass");
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

function addImageSlider(){
	$this->imageSliderID = "carousel".rand();
	
	$this->imageSlider = new html_element("div");
	$this->imageSlider->set("class","carousel slide");
	$this->imageSlider->set("data-ride","carousel");
	$this->imageSlider->set("id",$this->imageSliderID);
	

	
}

function addImageSlide($id,$content){
	$this->slide = new html_element("div");
	if( count($this->imageSlideArray) == 0){
		$this->slide->set("class","item active");
	}else{
		$this->slide->set("class","item");
	}
	$this->slide->set("id",$id);
	$this->caption = new html_element("div");
	$this->caption->set("class","carousel-caption");
	$this->caption->set("text",$content);
	$this->slide->inject($this->caption);

}

function build(){
	return $this->row->build();
}


}



?>