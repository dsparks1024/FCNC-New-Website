<?	
	session_start();	
	// set the authorizations required to view this page.
	unset($_POST['acceptableAuths']);
	$_POST['acceptableAuths'] = array('user','admin');
	include_once($_SERVER['DOCUMENT_ROOT'].'/globalConfig.php');
	include_once($_SERVER['DOCUMENT_ROOT'].'/employee/resources/php/accounts/restrictAccess.php');

	?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="/libraries/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<link href="/employee/resources/css/employeeDefault.css" rel="stylesheet">
	</head>
	
	<body>
		
		<header>
			<h1>Forest City Nursing & Rehab Center</h1>
			<h3> Employee Website</h3>
		</header>
	
		<div id="wrapper">
			<main>	
				<div class="container-fluid">
					<div class="row">
						
						<div class="col-md-2 well">
							<ul class="nav nav-pills nav-stacked">
								<li class="dropdown-header">Useful Pages</li>
								<li><a href="index.php?action=display&page=home">Home</a></li>
								<li class="dropdown-header">Content Management</li>
								<li><a id="pageEditor" href="index.php?action=editor&editor=page">Page Editor</a></li>
							</ul>
						</div> <!-- .col-md-2 -->
						
						<div class="col-md-10" id="content">
							
							<?	if(isset($_GET['action'])){
									if($_GET['action'] == 'display'){
										echo "display " . $_GET['page'];
									}else if($_GET['action'] == 'editor'){
										$_POST['displayPageNames'] = "home";
										echo "post has been set";
									}
								} else{
									//display the home page....
									
								}
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
	<script src="/employee/resources/js/pageEditor.js"></script>
	</body>
	
</html>