<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MMO</title>
	<link rel="stylesheet" href="data/css/layout.css" />
	<link rel="stylesheet" href="data/css/map.css" />
	<link rel="stylesheet" href="data/css/dashboard.css" />

	<script type="text/javascript" src="data/js/jquery.js"></script>
	<script type="text/javascript" src="data/js/main.js"></script>
	<script type="text/javascript" src="data/js/map.js"></script>
</head>

<body>
	<div class="dashboard">
		<div class="profile">
			<img src="data/img/users/alurosu/profile.png" alt="username picture" class="picture" />
			<div class="username">alurosu</div>
			<div class="title">The Explorer</div>
			<div class="rank">~rank~</div>
		</div>
		<div class="stats">
			<div class="hp" data-hover="on">
				<div class="data-hover-content">Health: 43 of 100</div>
				<div class="text" data-hover="on">
					<div class="data-hover-content">Max Health</div>
					<span>10</span>
				</div>
				<div class="bar"></div>
			</div>
			<div class="energy" data-hover="on">
				<div class="data-hover-content">Energy: 3 of 10</div>
				<div class="text" data-hover="on">
					<div class="data-hover-content">Max Energy</div>
					<span>3</span>
				</div>
				<div class="bar"></div>
			</div>
		</div>
	</div>
	<div style="text-align: center;">
		Press m or M to open map.
	</div>

	<?PHP //require_once("data/php/map.php"); ?>
	<div class="data-hover"></div>
</body>
</html>