$(document).ready(function(){
	
	var loginForm = $(".loginForm");
	var loginBtn = $("#loginBtn");
	var userIG = $(".usernameInputGroup");
	var passIG = $(".passwordInputGroup");
	var usernameIcon = userIG.find("span");
	var errorText = $(".text-danger");
	
	usernameIcon.hide();
	errorText.css("visibility","hidden");

	loginForm.on("submit",submitLogin);

function submitLogin(e){
	e.preventDefault();
	$("#loginBtn").button('loading');
	userIG.removeClass("has-error has-feedback");
	usernameIcon.hide();
	passIG.removeClass("has-error");
	errorText.css("visibility","hidden");
	
	$.ajax({
		method: 'POST',
		url: "/employee/resources/php/accounts/secureLogin.php",
		data: loginForm.serialize(),
		complete: loginResponse
	})
}

function loginResponse(response){
	if(response.responseText == "valid"){
		window.location.replace("/employee/index.php");
	}
	else{
		userIG.addClass("has-error has-feedback");
		usernameIcon.show();
		passIG.addClass("has-error");
		errorText.css("visibility","visible");
		loginBtn.button('reset');
	}
}
		
})