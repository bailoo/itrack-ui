<?php session_start(); ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta name="description" content="Track your Vehicle anywhere in the world">
		
		<title>Dashboard</title>
		
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="searchbox.css">
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="zebra_default.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="mmenus.min.js"></script>
		<script src="main.js"></script>
		
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<noscript>This page cannot run without JavaScript. Turn JavaScript on in your browser and refresh to continue.</noscript>
		<div id="nav">
			<div id="links">
				<a href="index.php" id="home">Home</a>
				<a href="?a=live" id="live">Live</a>
				<a href="?a=manage" id="manage">Manage</a>
				<a href="?a=report" id="report">Report</a>
				<a href="?a=setting" id="setting">Setting</a>
				<a href="?a=help" id="help">Help</a>
				<div id="navcenter">
					
				</div>
			</div>
			<?php if(isset($_SESSION['username'])) {
				echo '<div id="username" onclick="ShowMenu(event, this, \'<a href=\\\'logout.php\\\'>Logout</a>\', \'username_menu\');">Welcome: '.$_SESSION['username'].' <img src="img/downarr.png" width="10" height="5"></div>';
			}
			else {
				echo '<div id="username">Not logged in</div>';
			}
			?>
		    
			<div style="clear:both"></div>
		</div>
		
		<?php
			if(isset($_SESSION['username'])) {
				if(!isset($_GET["a"])) include("home.php");
				else switch ($_GET['a']) {
					case "manage": include("manage.php");break;
					case "live": include("live.php");break;
					case "report": include("report.php");break;
					case "setting": include("setting.php");break;
					case "help": include("help.php");break;
					default: include("home.php");
				}
			}
			else include("login.php");
		?>
	</body>
</html>