<!DOCTYPE html>

<html>

<head>

<style>

body {
	margin: 0;
}

.nav {
	width: 100%;
	background-color: white;
	font-size: 20px;
	height: 60px;
}

a {
	color: black;
	float: right;
	padding: 20px;	
	text-decoration: none;
}

img {
	width: 100px;
	padding-left: 100px;
}

</style>

</head>

<body>

<div class="nav">

	<a style="float:left;" href=" "><img src="https://belbo.com/wp-content/themes/responsive/core/images/belbo.png" alt="Belbo Logo"></a>
	<a href=" ">Blog</a>
	<a href=" ">FAQ</a>
	<a href=" ">Preise</a>
	<a href=" ">Produkt</a>
	<a href=" ">Start</a>
  
</div>

</body>

<?php echo $this->fetch('content'); ?>

</html>

<!-- Pfad /src/Template/Layout/belbo_navigation.ctp -->
