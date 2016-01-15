<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="/libraries/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<link href="/employee/resources/css/employeeDefault.css" rel="stylesheet">
		
	</head>
	
	<body class="loginContainer">

		<div class="container-fluid">
	
	    	<div class="row loginContainer">
				<div class="col-sm-6 loginLeftPane hidden-xs"></div>
				
				<div class="col-sm-6 loginRightPane">
					<img class="center-block" src="/resources/images/birdLogo.jpg" alt="fcncBirdLogo" width="200">				
					<div class="loginFormContainer">
							
							<p>Please use the employee ID that was given to you to login. If you do not know your Employee ID, please contact your department head.</p>
							<p class="text-danger">Invalid Employee ID/Password combination.</p>
							<form class="form-horizontal loginForm" method="post" name="loginForm" action="/employee/resources/php/accounts/secureLogin.php">
							<fieldset>
							
							<!-- Text input-->
							<div class="form-group usernameInputGroup">
							  <div class="col-xs-8">
							  <input id="username" name="username" type="text" placeholder="Employee ID" class="form-control input-md">
							  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
		 
							  </div>
							</div>
							
							<!-- Password input-->
							<div class="form-group passwordInputGroup">
							  <div class="col-xs-8">
							    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md">
							    
							  </div>
							</div>
							
							<!-- Button -->
							<div class="form-group">
							  <div class="col-xs-8">
							    <button id="loginBtn" name="login" class="btn btn-primary" data-loading-text="Signing In...">Sign In</button>
							  </div>
							</div>
							
							</fieldset>
							</form>
						
							<p>Forgot Your <a href="#">Employee ID</a> | <a href="#">Password</a> </p>
							
						</div>	
					<p class="loginCopyRight">&copy;2016 Forest City Nursing & Rehab Center</p>
				</div>
	        
			</div>
	
		</div> <!-- /container -->

		
	<script src="/libraries/jquery/jquery-1.11.3.min.js"></script>
	<script src="/libraries/bootstrap-3.3.5/js/bootstrap.min.js"></script>
	<script src="/employee/resources/js/login.js"></script> 
		
	</body>
	
</html>