<?	
	session_start();	
	// set the authorizations required to view this page.
	unset($_POST['acceptableAuths']);
	$_POST['acceptableAuths'] = array('user','admin');
	include_once($_SERVER['DOCUMENT_ROOT'].'/globalConfig.php');
	include_once($_SERVER['DOCUMENT_ROOT'].'/employee/resources/php/accounts/restrictAccess.php');
	include_once($_SERVER['DOCUMENT_ROOT'].'/employee/resources/php/employeePageRenderer.php');

	var_dump($_SESSION);
	?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="/libraries/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<link href="/employee/resources/css/employeeDefault.css" rel="stylesheet">
		
		<!-- LOAD ONLY IF PERSON IS AN EDITOR OR ADMIN -->
		<link href="/employee/resources/css/editor.css" rel="stylesheet">
		
	</head>
	
	<body>
		
		<header>
			<div class="container-fluid">
				<div class="row">
						<div class="col-xs-12">
							<a class="pull-right" href="/employee/resources/php/accounts/signOut.php">Sign Out</a>
							<h1>Forest City Nursing & Rehab Center</h1>
							<h3>Employee Website</h3>							
							
						</div>
				</div>
			</div>
		</header>
	
		<div id="wrapper">
			<main>	
				<div class="container-fluid">
					<div class="row">
						
						<div class="col-md-2 leftNavigation">
							<ul class="nav nav-pills nav-stacked well">
								<li>Useful Pages</li>
								<li><a href="index.php?pageName=home">Home</a></li>
								<li><a href="index.php?pageName=maintRequest">Maintenance Request</a></li>
								<?
									if($_SESSION['auth'] == 'admin'){
									 echo "
										<li>Content Management</li>
										<li><a id='pageEditor' href='#'>Page Editor</a></li>
										";
									}
								?>
							</ul>
						</div> <!-- .col-md-2 -->
						
						<div class="col-md-10" id="content">
							
							
						<?
							renderEmployeePageContent($_GET['pageName']);
							
						?>

<!-- End Fresh Tilled Soil Video Chat Embed Code -->
							
							<?	/*if(isset($_GET['action'])){
									if($_GET['action'] == 'display'){
										echo "display " . $_GET['page'];
									}else if($_GET['action'] == 'editor'){
										$_POST['displayPageNames'] = "home";
										echo "post has been set";
									}
								} else{
									//display the home page....
									
								}
								*/
							?>
							
							
							
						</div> <!-- .col-md-10 -->
						
					</div> <!-- .row -->
				</div> <!-- .container-fluid -->			
			</main>
			<div class="push"></div> <!-- .push -->
		</div>  <!-- #wrapper -->
	
		<footer>
			footer;
		</footer>
		
	<script src="/libraries/jquery/jquery-1.11.3.min.js"></script>
	<script src="/employee/resources/js/employeeMain.js"></script>
	<script src="/libraries/bootstrap-3.3.5/js/bootstrap.min.js"></script>

	<!--  DON'T LOAD THIS RESOURCE IF THE USER IS NOT AN EDITOR!!!!!!  -->
	<script src="/employee/resources/js/pageEditor.js"></script>
	
	
	</body>
	
</html>