<? include_once('globalConfig.php') ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Forest City Nursing & Rehab Center</title>
				
		<link href="http://fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<link href="/libraries/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<link href="/resources/css/default.css" rel="stylesheet">
		<link href="/resources/css/theme.css" rel="stylesheet">
		<link href="/resources/css/mobile.css" rel="stylesheet">
			
		
		<link rel="stylesheet" href="/libraries/fullcalendar-2.5.0/fullcalendar.css" />
		
	</head>
	
	<body>
	<noscript>
	<div class="text-center text-danger">
		<h1><span class="glyphicon glyphicon-warning-sign text-warning"></span> JavaScript Disabled... <span class="glyphicon glyphicon-warning-sign text-warning"></span></h1>
		<h4>We can not guarantee that this site with function properly.</h4>
		<h4>Please enable JavaScript and reload this page.</h4><br><br>
	</div>
	</noscript>
	
	
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-73701010-1', 'auto');
		ga('send', 'pageview');
	</script>
	
	
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
				</div> <!-- .containter-fluid -->
			</nav>
		</header>
		
	<div class="wrapper">		
		<main>
			<div class="container-fluid" id="pageContent">
			
				<? displayPageContent($_GET['category'],$_GET['pageName']); ?>
				
			</div> <!-- .contianer-fluid -->
		</main>	
		
	<div class="push"></div> <!-- .push -->
	</div>  <!-- .wrapper -->
	
	<footer class="mainFooter">
		<div class="container-fluid">
			<div class="row footerLinks hidden-xs">
				<div class="col-md-1"></div>
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
						<li><a href="/contact/staff">Staff Directory</a></li>
						<li><a href="/information/employment">Join Our Team</a></li>
						<!--<li><a href="/employee">Employee Login</a></li>-->
					</ul>
				</div> <!-- .col-md-2 -->
				<div class="col-md-2">
					<ul> 
						<li class="linkHeader">Contact Us</li>
						<li><a href="/contact/contactInformation">Information</a></li>
						<li><a href="/contact/sendMessage">Send a Message</a></li>
					</ul>
				</div> <!-- .col-md-2 -->
				<div class="col-md-2">
					<ul> 
						<li class="linkHeader">Information</li>
						<li><a herf="/information/admissions">Admission Info</a></li>
						<li><a href="/information/admissions">Schedule a Tour</a></li>
					</ul>
				</div> <!-- .col-md-2 -->
				<div class="col-md-1"></div>
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

