<script type="text/javascript" src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script> 
<script type="text/javascript" src="../js/jquery.qrcode.min.js"></script><!--二维码--> 
<script type="text/javascript" src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){ 
	$(".navbar-toggle").click(function(){
$(".navbar").toggleClass("navblue-on");
});
$(".dropdown-toggle").click(function(){
$(".dropdown-menu").toggleClass("large");
});
$(".navbar-blue").addClass("large");
});
<!--标题获取-->

</script> 
<script>
$(function(){
	$(".qrcode").hover(function(){
$(".qrcode").toggleClass("on-hover");
});
	$('#output').qrcode(window.location.href);
})
</script>