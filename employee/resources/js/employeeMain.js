// Register Global Static Selectors
	var	content;
	var pageEditorLink;
	var leftNavigation;

$(document).ready(initMainPage);
		
function initMainPage(){

	// Initalize Global Static Selectors
	content = $("#content");
	pageEditorLink = $("#pageEditor");
	leftNavigation = $(".leftNavigation");
	
	// Register Global Static Event Listeners
	pageEditorLink.on('click',initPageEditor); // -> loacation: pageEditor.js
	
	
	//pageEditorLink.click();

}


/* Global event handler for successful actions */
function completedAciton(data){
	if(data == 1){
		alert("success");
	}else{
		console.log(data);
	}
}
