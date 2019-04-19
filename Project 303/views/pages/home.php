<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adontrack</title>
	<style>
		body { background-color: #f1f1f1; }
		.home_container { background-color: #fff; width: 100%; max-width: 1200px; margin: 0 auto; margin-top: 50px; }
		.home_container h2 { padding: 10px 20px; font-size: 48px; margin-bottom: 20px; }

		.session_container { float: left; width: 53%; }
		.session { background-color: #fff; height: 300px; margin-bottom: 20px; }
		.calendar_container { background-color: #fff; float: right; width: 45%; height: 400px; }
	</style>
</head>
<body>
<header>
	<?php include '../partials/header.html'; ?>
</header>
<div class = "home_container">
	<h2>My Home</h2>
	<div class = "session_container">
		<div class = "session"></div>
		<div class = "session"></div>
	</div> 

	<div class = "calendar_container">

	</div>
</div>
</body>
<script>
</script>
</html>