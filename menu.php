<div id="slide-menu">

<ul class="navigation">
<li id="close"><a href="">Cacher</a></li>
<li><a href="#">Portfolio</a></li>
<li><a href="#">Services & Prestations</a></li>
<li><a href="#">ChangeLog</a></li>
<li><a href="#">Résseaux Sociaux</a></li>
<li><a href="#">Me contactez</a></li>
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