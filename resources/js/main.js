// Register Global Static Selectors
	var searchForm;
	var	searchInput;
	var	searchSubmitBtn;
	
	var commentForm;
	var commentFormSubmitBtn;
	
	var datePickerBtn;

$(document).ready(init);

function init(){
	
	
	
	// Initialize Global Selectors
	searchForm = $("#searchForm");
	searchInput = $("#searchInput");
	searchSubmitBtn =  $("#submitSearch");
	
	commentForm = $("#commentForm");
	commentFormSubmitBtn = $("#submitComment");
	
	datePickerBtn = $("#datePickerBtn");
	
	// Register Handlers
	searchForm.on("submit",submitSearchQuery);
	searchSubmitBtn.on("click",submitSearchQuery);
	
	commentForm.on("submit",submitCommentForm);
	
	datePickerBtn.on("click",initDatePicker);
	
	//setTimeout(function(){location.reload()}, 200);
	
	var y;
	var y1;
	var topMargin;
	var contentTile = $(".contentTile");
	
	
	if($(document).width() > 992){
		$.each(contentTile, function(){
			y = $(this).height();
			y1 = $(this).find(".tileHeadingText").height();
			topMargin = (y - y1)/2;
			$(this).find(".tileHeadingText").css("padding-top",topMargin);
		})
	}else{
		$(this).find(".tileHeadingText").css("padding-top",0);
	}
	
	$(window).resize(function(){
		console.log($(document).width());
		if($(document).width() > 992){
			$.each(contentTile, function(){
			y = $(this).height();
			y1 = $(this).find(".tileHeadingText").height();
			topMargin = (y - y1)/2;
			$(this).find(".tileHeadingText").css("padding-top",topMargin);
			})
		}else{
			$(this).find(".tileHeadingText").css("padding-top",0);
		}
	})	
	
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
	window.location = "/search?q="+searchInput.val();
}

function submitCommentForm(e){
	e.preventDefault();
	$.ajax({
		url: "/resources/php/formProcessor.php",
		data: commentForm.serialize(),
		complete: completedAction
	})

}

function completedAction(response){
	if(response.responseText == 1){
		alert("success");
	}else{
		alert("failed");
	}
}

function initDatePicker(){
	alert("date");
}

function getURLParam(param) {
    location.search.substr(1)
        .split("&")
        .some(function(item) { // returns first occurence and stops
            return item.split("=")[0] == param && (param = item.split("=")[1])
        })
    return param
}