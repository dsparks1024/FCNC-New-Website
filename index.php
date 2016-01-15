<!--

	Check #navbarLineContainer css3 fix is complient on all browers (IE 8+)
		- The div was over the nav links and rendered them unclickable...
		
	Google Calender API KEY: 	AIzaSyCYO4ZUyfv1YA4q2n9Hi3LaPpr7gLlYlHs
		
-->

<? include_once('globalConfig.php') ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Forest City Nursing & Rehab Center</title>
		<link href='http://fonts.googleapis.com/css?family=Marcellus+SC' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<link href="/libraries/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<link href="/resources/css/default.css" rel="stylesheet">
		<link href="/resources/css/theme.css" rel="stylesheet">
		<link href="/resources/css/mobile.css" rel="stylesheet">
			
		
		<link rel="stylesheet" href="/libraries/fullcalendar-2.5.0/fullcalendar.css" />
		
	</head>
	
	<body>
	
	<!--
	<span class="visible-xs">SIZE XS</span><span class="visible-sm">SIZE SM</span><span class="visible-md">SIZE MD</span><span class="visible-lg">SIZE LG</span>
	-->

	<header>
			<nav class="navbar navbar-default" id="mainNav">
				<div class="container-fluid">
					<div class="navbar-header">
						
						<div class="navbarLineContainer">
							<div class="navbarLine top"></div>
							<div class="navbarLine bottom"></div>
						</div>
						
						<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavigation" aria-expanded="false">
							<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
						</button>
						
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
									<li><a href="/services/skilledNursing">Skilled Nursing</a></li>
									<li><a href="/services/rehabilitation">Rehabilitation</a></li>
									<li><a href="/services/hospice">Hospice</a></li>
									<li><a href="/personalcare">Personal Care</a></li>
									<li><a href="/services/respiteCare">Respite Care</a></li>
									<li><a href="/services/independent">Independent Living</a></li>
								</ul>
							</li>
							<!-- <li><a href="#">About <span class="visible-xs-inline hidden-md hidden-sm visible-lg-inline">Us</span></a></li> -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact <span class="caret"></span> <span class="glyphicon glyphicon-chevron-down visible-xs pull-right"></span> </a>
								<ul class="dropdown-menu">
									<li><a href="/contact/contactInformation">Contact Information</a></li>
									<li><a href="/contact/sendMessage">Leave a Comment</a></li>
									<li><a href="/contact/staff">Staff Directory</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search <span class="caret"></span> <span class="glyphicon glyphicon-chevron-down visible-xs pull-right"></span> </a>
								<ul class="dropdown-menu searchDropdown"> 
									<li class="dropdown"> 
									
										<form class="searchForm">
										<div class="search input-group" data-initialize="search" role="search">
									      <input id="searchInput" name="searchInput" class="form-control searchInput" placeholder="Search" type="search">
									      <span class="input-group-btn">
									        <button class="btn btn-default submitSearch" type="button" id="submitSearch">
									          <span class="glyphicon glyphicon-search"></span>
									          <span class="sr-only">Search</span>
									        </button>
									      </span>
									    </div>
									    </form>
									    
									 </li>				
								</ul>
							</li>
						</ul>
					</div> <!-- .collase navbar-collapse #mainNavigation -->
					</div>  <!-- .navbar-header -->
				</div> <!-- .containter-fluid -->
			</nav>
		</header>
		
	<div class="wrapper">		
		<main>
			<div class="container-fluid" id="pageContent">
				<? 
					if($_GET['category'] == '' && $_GET['pageName'] == ''){
						echo "<div class='row contentTile>'>
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
								       <h5>Welcome to the </h5>
								       <h2>Forest City Nursing & Rehab Center</h2>
								      </div>
								    </div>
								    <div class='item' id='slide2'>
								      <div class='carousel-caption'>
								       <h1> </h1>
								      </div>
								    </div>
								    <div class='item' id='slide3'>
								      <div class='carousel-caption'>
								        <h1> Happy Holidays! </h1>
								        <h4>From all of the staff at the Forest City Nursing Center</h4>
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
				<? displayPageContent($_GET['category'],$_GET['pageName']); 	
					
				?>
				
				
				
					
			</div> <!-- .contianer-fluid -->
		</main>	
		
	<div class="push"></div> <!-- .push -->
	</div>  <!-- .wrapper -->
	
	<footer class="mainFooter">
		<div class="container-fluid">
			<div class="row footerLinks hidden-xs">
				<div class="col-md-2">
					<ul> 
						<li class="linkHeader">Services</li>
						<li><a href="/services/skilledNursing">Skilled Nursing</a></li>
						<li><a href="/services/rehabilitation">Rehabilitation</a></li>
						<li><a href="/services/hospice">Hospice</a></li>
						<li><a href="/services/respiteCare">Respite Care</a></li>
						<li><a href="/services/independant">Independent Living</a></li>
					</ul>
				</div> <!-- .col-md-2 -->
				<div class="col-md-2">
					<ul> 
						<li class="linkHeader">Personal Care</li>
						<li><a href="/personalCare">Information</a></li>
						<li><a href="/personalCare/admissions">Admissions</a></li>
						<li><a href="/personalCare/activities">Activities</a></li>
						<li><a href="/information/admissions">Schedule Tour</a></li>
					</ul>
				</div> <!-- .col-md-2 -->
				<div class="col-md-2">
					<ul> 
						<li class="linkHeader">Our Team</li>
						<li>Staff Directory</li>
						<li>Join Our Team</li>
						<li><a href="/employee">Employee Login</a></li>
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
						<li>Send a Message</li>
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
				
			</div> <!-- .row -->
			
			<div class="row footerBottom">
				<div class="col-md-4">
					 
					 <div class="socialMediaLinks">
						<a class="facebook" href="https://www.facebook.com/ForestCityNursingCenter"> </a>
						<a class="linkedIn" href="https://www.linkedin.com/company/10405200?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10405200%2Cidx%3A2-1-2%2CtarId%3A1452860236111%2Ctas%3Aforest%20city%20nurs"> </a>
						<a class="email" href="mailto:fcnc@echoes.net"> </a>
					 </div>
					 
				</div> <!-- .col-md-4 -->
				<div class="col-md-4 footerCopyright">
					<p>&copy; 2015 Forest City Nursing & Rehab Center</p>
					 <h6>915 Delaware Street Forest City PA, 18421</h6>
					<h4>(570) 785-3005</h4>
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
	<script src="/libraries/jquery/jquery-ui-1.11.4/jquery-ui.min.js"></script>	
	
	<script src="/libraries/fullcalendar-2.5.0/lib/moment.min.js"></script>
	<script src="/libraries/fullcalendar-2.5.0/fullcalendar.js"></script>
	<script src="/libraries/fullcalendar-2.5.0/gcal.js"></script>
	
	
	<script src="/resources/js/main.js"></script>
	<script src="/resources/js/gCalendar.js"></script>
	
	<script>$('.carousel').carousel()</script>
	
	

		
	
	</body>
	
</html>

