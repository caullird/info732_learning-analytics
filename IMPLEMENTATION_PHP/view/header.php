<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/style.css"/>
	<?php echo file_exists('./css/'.strtolower($model).'.css') ? "<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/".strtolower($model).".css\"/>" : ""; ?>
	<?php echo file_exists('./js/'.strtolower($model).'.js') ? "<script src=\"./js/".strtolower($model).".js\"></script>" : ""; ?>
</head>
<body>
	<main>
	<header>

		<h1> HEADER </h1>
	</header>
	<section class="background">