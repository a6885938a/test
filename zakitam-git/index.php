<!DOCTYPE HTML>
<head>
<meta charset="utf-8">
<title>zaiktam</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content=""/>
<meta name="author" content=""/>
<title>zaiktam</title>
<link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include dirname(__FILE__).'/header.php'; 
?>
<?php
include dirname(__FILE__).'/cont.php'; 
?>
<?php
include dirname(__FILE__).'/footer.php'; 
?>

<script src="js/globaljs.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){ 
$(document).on("scroll",function(){
    if($(document).scrollTop()>50){
		  $(".navbar-blue").addClass("large");
		    $(".dropdown-menu").addClass("large");
        } else {
             $(".navbar-blue").removeClass("large");
			 $(".dropdown-menu").removeClass("large");
        }
});
	$('#scene').parallax();//轻量化
	$(".navbar").addClass("navbar-fixed-top");
	$(".navbar-toggle").click(function(){
$(".navbar").toggleClass("navblue-on");
});
});
</script>


<script src="js/jquery.parallax.js"></script> <!--轻量化-->


</body>
</html>