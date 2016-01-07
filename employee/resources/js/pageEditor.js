/* DELETE THIS CODE FOR PRODUCITON */
$(document).keydown(function(e) {
    if ((e.which == '115' || e.which == '83' ) && (e.ctrlKey || e.metaKey))
    {
        e.preventDefault();
        saveContentTileData();
        return false;
    }
    return true;
});
/* ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ */ 
/* DELETE THIS CODE FOR PRODUCITON */
/* Move it so it only works for editors...s */



/* Initialize and set up the page editor */

	var pageEditorScript = "/employee/resources/php/editors/pageEditor.php";
	var pageEditorMarkup = "/employee/resources/php/editors/editorMarkup.html";
	var pageEditorDOM;
	
	// Register pageEditor Selectors
	var pageNameSelect;
	var	tileEditorForm = ".tileEditorForm";
	var pageEditorTileContainer = ".pageEditorTileContainer";
	var createNewTileBtn;
		
function initPageEditor(e){
	e.preventDefault();

	// Load pageEditor HTML elements into the DOM
	$.ajax({
		url: pageEditorMarkup,
		method: "get",
		success: loadToDOM
	});
	function loadToDOM(html){ 
		pageEditorDOM = $.parseHTML(html);
		content.html(pageEditorDOM[0]);
		leftNavigation.append(pageEditorDOM[4]);
		
		// Initialize pageEditor Selectors
		pageNameSelect = $(document).find(".pageNameSelect");
		createNewTileBtn = $(document).find("#createNewTileBtn");		
				
		// Register pageEditor Evnet Listeners
		pageNameSelect.on("change",displayPageTiles);
		createNewTileBtn.on("click",addNewContentTile);
		
		// Populate the pageName select field
		$.ajax({
			url: pageEditorScript,
			data: {getPagenameList:"true"},
			success: success
		});
		function success(html){
			pageNameSelect.append(html);
		}	
	}
}


// Returns editable content for each tile on the selected page
function displayPageTiles(e){
	$.ajax({
		url: pageEditorScript,
		data: {getPageTiles:"true",pageName:pageNameSelect.val()},
		success: success,
		dataType: 'json'
	});
	function success(data){
		// Remove prevously existing editable tiles before new ones are added
		$(document).find($(pageEditorTileContainer).remove());
		
		var i = 0;
		var tile = pageEditorDOM[2];

		for(i=0; i<data.length;i++){
			$(tile).attr("id",data[i].id);
			$(tile).find(".idInput").val(data[i].id);
			$(tile).find(".categoryInput").val(data[i].category);
			$(tile).find(".pageNameInput").val(data[i].pageName);
			$(tile).find(".tileLayoutInput").val(data[i].layout);
			$(tile).find(".tileOrderInput").val(data[i].order);
			$(tile).find(".col1Input").text(data[i].col1);
			$(tile).find(".col2Input").text(data[i].col2);
			$(tile).clone().appendTo(content);
		}
	}
}
	
function saveContentTileData(){
	var forms = $(tileEditorForm);	
	$.each(forms, function(key,value){
		$.ajax({
			url: pageEditorScript,
			data: $(value).serialize(),
			complete: completedAciton		//-> location: /employee/resources/js/employeeMain.js
		})
	})
}

function addNewContentTile(){
	var category = $(document).find(".categoryInput").val();
	var pageName = $(document).find(".pageNameInput").val();
	
	if(category != null){
		if(confirm("Are you sure you want to add a new tile under:\nCategory: "+category+"\nPage Name: "+pageName)){
			$.ajax({
				url: pageEditorScript,
				data: {createNewTile: "true", category: category, pageName: pageName},
				success: displayPageTiles,
				complete: completedAciton //-> location: /employee/resources/js/employeeMain.js
			})	
		}
	}
	

}	
	
