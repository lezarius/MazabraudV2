<div id="slide-menu">

<ul class="navigation">
<li id="close"><a href="#">Cacher le menu</a></li>
<li><a href="index.php">Accueil</a></li>
<li><a href="portfolio.php">Portfolio</a></li>
<li><a href="changelog.php">ChangeLog</a></li>
<li><a href="sociaux.php">Résseaux Sociaux</a></li>
<li><a href="contact.php">Me contacter</a></li>
</ul>
</div>

<script>
$(document).ready(function () {
$('#push, #close').click(function () {
var $navigacia = $('body, #slide-menu'),
val = $navigacia.css('left') === '300px' ? '0px' : '300px';
$navigacia.animate({
left: val
}, 300)
});
});
</script>