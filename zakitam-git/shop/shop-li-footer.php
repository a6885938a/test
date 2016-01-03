
<script type="text/javascript" src="../js/jquery.qrcode.min.js"></script><!--二维码--> 
<script type="text/javascript" src="../js/stickUp.min.js"></script> 
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
<script type="text/javascript">
      jQuery(function($) {
        $(document).ready( function() {
          $('.stick-wrapper').stickUp({
                     
                        itemClass: 'menuItem',
                        itemHover: 'active',
                        topMargin: 'auto'
                      });

        });
      });
    </script>