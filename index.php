<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="BootStrap/css/bootstrap.css">
	<link rel="stylesheet" href="BootStrap/css/menu.css" />
	<script src="js/jquery.js"></script>
	<script src="js/navigation.js"></script> 
	<script src="js/typed.js" type="text/javascript"></script>
	<title>SweetHome</title>
</head>
<body>

<?php include 'menu.php'; ?>
<div align="left" >
<div id="push"> <a href="#" class="btn btn btn-info btn-lg">Afficher le Menu</a> </div>
</div>
<div class="container">

<div class="row"> 
<div align="center">
<h1>Hello World</h1>
<img src="img/logotype_remy_mazabraud_v2.png" alt="">
	
</div>
</div>


<div class="row">
<div align="center">



	<script>
	$(function(){

		$("#typed").typed({
			strings: ["Bienvenue sur mon site Pro , je m'appelle Rémy Mazabraud et sur mon site vous pouvez :" , "trouver mes traveaux dans la partie portfolio.", "trouver un moyen de me contacter.", "Trouver mes different compte sur les réseaux sociaux." , "Trouver l'amour ?" ,"Et trouver votre futur employé du mois !" ,"Bonne visite à vous :3"],
			typeSpeed: 30,
			backDelay: 3000,
			loop: false,
			// defaults to false for infinite loop
			loopCount: false,
			callback: function(){ foo(); }
		});

		function foo(){ console.log("Callback"); }

	});
	</script>
	
<span id="typed"></span>





</div>
</div>


</div>
</body>
</html>