
<script type="text/javascript" src="../js/jquery.qrcode.min.js"></script><!--二维码--> 

<script type="text/javascript"> 
$(document).ready(function(){ 
	$(".navbar-toggle").click(function(){
$(".navbar").toggleClass("navblue-on");
});
$(".dropdown-toggle").click(function(){
$(".dropdown-menu").toggleClass("large");
});
$(".navbar-blue").addClass("large");
	$(".qrcode").hover(function(){
$(".qrcode").toggleClass("on-hover");
});
	$('#output').qrcode(window.location.href);
});

</script> 
