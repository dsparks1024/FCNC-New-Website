<? include_once('globalConfig.php') ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Forest City Nursing & Rehab Center</title>
		<link href='http://fonts.googleapis.com/css?family=Marcellus+SC' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300' rel='stylesheet' type='text/css'>
		<link href="/libraries/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<link href="/resources/css/default.css" rel="stylesheet">
		<link href="/resources/css/mobile.css" rel="stylesheet">
		<link href="/resources/css/theme.css" rel="stylesheet">
		
	</head>
	
	<body>
	
	<span class="visible-xs">SIZE XS</span><span class="visible-sm">SIZE SM</span><span class="visible-md">SIZE MD</span><span class="visible-lg">SIZE LG</span>

	<header>
			<nav class="navbar navbar-default" id="mainNav">
				<div class="container-fluid">
					<div class="navbar-header">
						
						<div class="navbarLine top"></div>
						<div class="navbarLine bottom"></div>
						
						<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavigation" aria-expanded="false">
							<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
						</button>
						<!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavigation" aria-expanded="false">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button> 
						-->
						<a class="navbar-brand" href="/">
							<img alt="Home" src="/resources/css/images/fcncTextLogo.png">
						</a>
					</div> <!-- .navbar-header -->	
					<div class="collapse navbar-collapse" id="mainNavigation">
						<ul class="nav navbar-nav nav-justified">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Information <span class="caret"></span> <span class="glyphicon glyphicon-chevron-down visible-xs pull-right"></span> </a>
								<ul class="dropdown-menu">
									<li><a href="/information/departments">Departments</a></li>
									<li><a href="/information/admissions">Admission Information</a></li>
									<li><a href="/information/employment">Employment Opportunities</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span> <span class="glyphicon glyphicon-chevron-down visible-xs pull-right"></span> </a>
								<ul class="dropdown-menu">
									<li><a href="/services/personalCare">Personal Care</a></li>
									<li><a href="#">Respite Care</a></li>
									<li><a href="#">Independent Living</a></li>
								</ul>
							</li>
							<!-- <li><a href="#">About <span class="visible-xs-inline hidden-md hidden-sm visible-lg-inline">Us</span></a></li> -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact <span class="caret"></span> <span class="glyphicon glyphicon-chevron-down visible-xs pull-right"></span> </a>
								<ul class="dropdown-menu">
									<li><a href="#">Contact Information</a></li>
									<li><a href="#">Leave a Comment</a></li>
									<li><a href="/contact/staff">Staff Directory</a></li>
								</ul>
							</li>
							<li><a href="#">Search</a></li>
						</ul>
					</div> <!-- .collase navbar-collapse #NAVBAR_NAME -->
					</div>  <!-- .navbar-header -->
				</div> <!-- .containter-fluid -->
			</nav>
		</header>
		
	<div class="wrapper">		
		<main>
			<div class="container-fluid" id="pageContent">
				<? 
					if($_GET['category'] == '' && $_GET['pageName'] == ''){
						echo "<div class='row>'>
							<div id='carousel-example-generic' class='carousel slide' data-ride='carousel'>
								  <!-- Indicators -->
								  <ol class='carousel-indicators'>
								    <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
								    <li data-target='#carousel-example-generic' data-slide-to='1'></li>
								    <li data-target='#carousel-example-generic' data-slide-to='2'></li>
								  </ol>
								
								  <!-- Wrapper for slides -->
								  <div class='carousel-inner' role='listbox'>
								  	<div class='item active' id='slide1'>
								      
								      <div class='carousel-caption'>
								       <h1>  </h1>
								      </div>
								    </div>
								    <div class='item' id='slide2'>
								      <div class='carousel-caption'>
								       <h1> </h1>
								      </div>
								    </div>
								    <div class='item' id='slide3'>
								      <div class='carousel-caption'>
								        <h1>  </h1>
								      </div>
								    </div>
								    
								  </div>
								
								  <!-- Controls -->
								  <a class='left carousel-control' href='#carousel-example-generic' role='button' data-slide='prev'>
								    <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
								    <span class='sr-only'>Previous</span>
								  </a>
								  <a class='right carousel-control' href='#carousel-example-generic' role='button' data-slide='next'>
								    <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
								    <span class='sr-only'>Next</span>
								  </a>
								</div>
						</div> <!-- .row -->";
					}	
				?>
				<? displayPageContent($_GET['category'],$_GET['pageName']); ?>
				
				
				
					
			</div> <!-- .contianer-fluid -->
		</main>	
		
	<div class="push"></div> <!-- .push -->
	</div>  <!-- .wrapper -->
	
	<footer>
		<div class="container-fluid">
			<div class="row footerLinks hidden-xs">
				<div class="col-md-1"></div>
				<div class="col-md-2">
					<ul> 
						<li class="linkHeader">Services</li>
						<li>Respite Care</li>
						<li>Rehab</li>
						<li>Therapy</li>
					</ul>
				</div> <!-- .col-md-2 -->
				<div class="col-md-2">
					<ul> 
						<li class="linkHeader">Our Team</li>
						<li>Staff Directory</li>
						<li>Join Our Team</li>
						<li>Employee Login</li>
					</ul>
				</div> <!-- .col-md-2 -->
				<div class="col-md-2">
					<ul> 
						<li class="linkHeader">About Us</li>
						<li>Directions</li>
						<li>History</li>
						<li>Image Gallery</li>
					</ul>
				</div> <!-- .col-md-2 -->
				<div class="col-md-2">
					<ul> 
						<li class="linkHeader">Contact Us</li>
						<li>Send a message</li>
						<li>Leave Feedback</li>
					</ul>
				</div> <!-- .col-md-2 -->
				<div class="col-md-2">
					<ul> 
						<li class="linkHeader">Information</li>
						<li>Admission Info</li>
						<li>Schedule a Tour</li>
					</ul>
				</div> <!-- .col-md-2 -->
				<div class="col-md-1"></div>
			</div> <!-- .row -->
			
			<div class="row footerBottom">
				<div class="col-md-4">
					 
					 <div class="socialMediaLinks">
						<a class="facebook" href="http://www.facebook.com"> </a>
						<a class="linkedIn" href="http://www.linkedin.com"> </a>
						<a class="email" href="mailto:fcnc@echoes.net"> </a>
					 </div>
					 
				</div> <!-- .col-md-4 -->
				<div class="col-md-4 footerCopyright">
					<p>&copy; 2015 Forest City Nursing & Rehab Center</p>
				</div> <!-- .col-md-4 -->
				<div class="col-md-4 footerImageContainer">
					<a href="/"> 
						<img alt="Home" src="/resources/css/images/fcncTextLogo.png">
					</a>
				</div> <!-- .col-md-4 -->
			</div> <!-- .row -->
		</div> <!-- .container-fluid -->
	</footer>
	
	
	<script src="/libraries/jquery/jquery-1.11.3.min.js"></script>
	<script src="/libraries/bootstrap-3.3.5/js/bootstrap.min.js"></script>
	<script src="/resources/js/main.js"></script>
	<script>$('.carousel').carousel()</script>
	</body>
	
</html>
