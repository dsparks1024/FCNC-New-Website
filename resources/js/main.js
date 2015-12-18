$(document).ready(function(){
	

	$("#socialMediaLinks img").children("img").hover(function(){
		var src = $(this).attr("src").match(/[^\.]+/) + "H.png";
		alert(src);
		
	})
	
})