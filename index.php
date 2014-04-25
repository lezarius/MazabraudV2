<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="BootStrap/css/bootstrap.css">
	<link rel="stylesheet" href="BootStrap/css/sidebar.css" />
	<link rel="stylesheet" href="BootStrap/css/menu.css" />
	<script src="js/jquery.js"></script>
	<script src="js/sidebar.js"></script> 
	<title>SweetHome</title>
</head>
<body>
<nav>
		<a href="#" class="icon-menu link-menu jsc-sidebar-trigger"></a>
	</nav>
	<nav class="jsc-sidebar" id="side-nav">
<ul>
<li><a href="#" class="current">Download</a></li>
<li><a href="http://www.jqueryscript.net">Back to article</a></li>
<li><a href="http://www.jqueryscript.net">More jQuery Plugins</a></li>
</ul>
</nav>

<section class="main-content">
Your content goes here
</section>

<script>
$('#side-nav').sidebar({
trigger: '.jsc-sidebar-trigger',
});
</script>



</body>
</html>