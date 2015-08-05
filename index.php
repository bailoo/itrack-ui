<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="zebra_default.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script src="zebra.js"></script>
		<script src="mmenus.min.js"></script>
		<script src="main.js"></script>
	</head>
	<body>
		<div id="nav">
			<div id="links">
				<a class="selected" href="index.php">Home</a>
				<a href="?a=live">Live</a>
				<a href="?a=manage">Manage</a>
				<a href="?a=report">Report</a>
				<a href="?a=setting">Setting</a>
				<a href="?a=help">Help</a>
			</div>
		    <div id="username">Welcome: mumbai <img src="img/downarr.png" width="10" height="5"></div>
			<div style="clear:both"></div>
		</div>
		<?php
			if(!isset($_GET["a"])) include("home.php");
			else switch ($_GET['a']) {
				case "manage": include("manage.php");break;
				case "live": include("live.php");break;
				case "report": include("report.php");break;
				case "setting": include("setting.php");break;
				case "help": include("help.php");break;
				default: include("home.php");
			}
		?>
	</body>
</html>