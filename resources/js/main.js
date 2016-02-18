// Register Global Static Selectors
	var searchForm;
	var	searchInput;
	var	searchSubmitBtn;
	
	var commentForm;
	var commentFormSubmitBtn;
	
	var nhTourForm;
	var nhtourFormSubmitBtn;
	
$(document).ready(init);

function init(){

	
	// Initialize Global Selectors
	searchForm = $(".searchForm");
	searchInput = $(".searchInput");
	searchSubmitBtn =  $(".submitSearch");
	
	commentForm = $("#commentForm");
	commentFormSubmitBtn = $("#submitComment");
	
	nhTourForm = $("#nhTourForm");
	nhtourFormSubmitBtn = $("#submitNHTour");
	
	datePickerBtn = $("#datePickerBtn");
	
	// Register Handlers
	searchForm.on("submit",submitSearchQuery);
	searchSubmitBtn.on("click",submitSearchQuery);
	
	commentForm.on("submit",submitCommentForm);
	nhTourForm.on("submit",submitNHTourForm);
	
	
	$("#desiredDate").datepicker({
		minDate: new Date(),
		maxDate: "+8m"
	});
	
	var y;
	var y1;
	var topMargin;
	var contentTile = $(".contentTile");
	
/************************************************************************************************
**		TODO: 1. Move this to a function
**			  2. Create a generic "vertical center" wrapper to vertically center elements
************************************************************************************************/	
	if($(document).width() > 992){
		$.each(contentTile, function(){
			y = $(this).height();
			y1 = $(this).find(".tileHeadingText").height();
			topMargin = (y - y1)/2;
			$(this).find(".tileHeadingText").css("padding-top",topMargin);
		})
	}else{
		$.each(contentTile, function(){
			$(this).find(".tileHeadingText").css("padding-top",0);
		})	
	}
	
	$(window).resize(function(){
		if($(document).width() > 992){
			$.each(contentTile, function(){
				y = $(this).height();
				y1 = $(this).find(".tileHeadingText").height();
				topMargin = (y - y1)/2;
				$(this).find(".tileHeadingText").css("padding-top",topMargin);
			})
		}else{
			$.each(contentTile, function(){
				$(this).find(".tileHeadingText").css("padding-top",0);
			})	
		}

/*		var tallestTile = 0;
		
		// make all "thumbnailNav" tiles the same height
		if( $(".thumbnailNav").length > 0 ){
			
			$.each( $(document).find(".thumbnail"), function(){
				if( $(this).height() > tallestTile ){
					tallestTile = $(this).height();
				}
			})
			
		}
		
		// Set all tiles to the tallest height
		
		$.each( $(document).find(".thumbnail"), function(){
			console.log( $(this) );
			//$(this).css("height",tallestTile);
		})
*/

		
		
	})	
/************************************************************************************************/	
	
	initGoogleSearch();
	


}






function initGoogleSearch(){
	 var cx = '011889679930615190784:aagzpto07mo'; // Insert your own Custom Search engine ID here
	 var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
	 gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
	 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
}
	
function initializeGoogleMaps() {
		var FCNC = new google.maps.LatLng(41.655583366739144, -75.46726584434509)
	
		var myOptions = {
    	zoom: 13,
    	center: FCNC,
    	mapTypeId: google.maps.MapTypeId.ROADMAP
  		}
  		var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

		var marker = new google.maps.Marker({
			map:map,
			draggable:false,
			title: "Forest City Nursing Center",
			animation:google.maps.Animation.DROP,
			position: FCNC
		});
	
  		directionsDisplay = new google.maps.DirectionsRenderer();
		
		directionsDisplay.setMap(map);
		directionsDisplay.setPanel(document.getElementById("directions"));	
}

function submitSearchQuery(e){
	e.preventDefault();
	var query;
	$.each(searchInput,function(){
		if( $(this).val() != ''){
			query = $(this).val();
		}
	})
	window.location = "/search?q="+query;
}

function submitCommentForm(e){
	e.preventDefault();
	$.ajax({
		url: "/resources/php/formProcessor.php",
		data: commentForm.serialize(),
		complete: nhCommentSubmitComplete
	})

}

function submitNHTourForm(e){
	e.preventDefault();
	$.ajax({
		url: "/resources/php/formProcessor.php",
		data: nhTourForm.serialize(),
		complete: nhTourSubmitComplete
	})
}

function completedAction(response){
	if(response.responseText == 1){
		alert("success");
	}else{
		alert("failed");
	}
}

function nhTourSubmitComplete(response){
	if(response.responseText == 1){
		nhtourFormSubmitBtn.fadeOut();
		nhtourFormSubmitBtn.parent().hide()
		.html("<p class='bg-success'><span class='glyphicon glyphicon-ok'></span> &nbsp;  Tour Submitted Successfully!<br> <small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expect to hear from us soon.</small></p>")
		.fadeIn();
		
	}else{
		nhtourFormSubmitBtn.fadeOut();
		nhtourFormSubmitBtn.parent().hide()
		.html("<p class='bg-danger'><span class='glyphicon glyphicon-remove'></span> &nbsp;  Something Went Wrong!<br> <small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Try refreshing the page, or give us a call.</small></p>")
		.fadeIn();
	}
}

function nhCommentSubmitComplete(response){
	if(response.responseText == 1){
		commentFormSubmitBtn.fadeOut();
		commentFormSubmitBtn.parent().hide()
		.html("<p class='bg-success'><span class='glyphicon glyphicon-ok'></span> &nbsp;  Message Submitted Successfully!<br> <small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expect to hear from us soon.</small></p>")
		.fadeIn();
		
	}else{
		commentFormSubmitBtn.fadeOut();
		commentFormSubmitBtn.parent().hide()
		.html("<p class='bg-danger'><span class='glyphicon glyphicon-remove'></span> &nbsp;  Something Went Wrong!<br> <small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Try refreshing the page, or give us a call.</small></p>")
		.fadeIn();
	}

}

function getURLParam(param) {
    location.search.substr(1)
        .split("&")
        .some(function(item) { // returns first occurence and stops
            return item.split("=")[0] == param && (param = item.split("=")[1])
        })
    return param
}