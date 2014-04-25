<div id="slide-menu">

<ul class="navigation">
<li id="close"><a href="#">Close</a></li>
<li><a href="#">Link 1</a></li>
<li><a href="#">Link 2</a></li>
<li><a href="#">Link 3</a></li>
<li><a href="#">Link 4</a></li>
<li><a href="#">Link 5</a></li>
</ul>
</div>

<script>
$(document).ready(function () {
$('#push, #close').click(function () {
var $navigacia = $('body, #slide-menu'),
val = $navigacia.css('left') === '250px' ? '0px' : '250px';
$navigacia.animate({
left: val
}, 300)
});
});
</script>