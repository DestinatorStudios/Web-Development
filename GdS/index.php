<html>
<head>
<link rel="styleSheet" href="style.css" type="text/css">
<title>GdS Unterfranken</title>
</head>

<body>

	<div id="wrapper" class="shadow">
		<header class="shadow"></header>

		<nav>
	<?php
	include 'menu.php';
	?>
	</nav>
		<div id="content">
	
	<?php
	
	if (isset ( $_GET ["page"] )) {
		$page = $_GET ["page"];
		include $page . ".php";
	} else {
		include 'home.php';
	}
	
	?>
	
	</div>
		<footer>&copy; 2013 Nicolas &amp; Tobias Fella</footer>
	</div> 


</body>

</html>