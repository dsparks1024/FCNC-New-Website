$(document).ready(function(){
	
	var editorScript = "/employee/resources/php/editors/pageEditor.php";
		content = $("#content");
		pageEditorLink = $("#pageEditor");
		
	// get list of editable pages and display the links
	pageEditorLink.click(function(e){
		e.preventDefault();
		$.post(editorScript,{displayPageNames:true},function(html){content.html(html)});
	})
	
	
})