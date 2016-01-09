<?php
include dirname(__FILE__).'/meta.php'; 
?>
<title>zaiktam</title>
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="css/component.css" />
<!--瀑布流-->

<link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet" type="text/css">
<link href="css/style-normal.css" rel="stylesheet" type="text/css" >
<link href="css/style.css" rel="stylesheet" type="text/css"  />
<!--背景滚动-->
<link href="css/style-normal.css" rel="stylesheet" type="text/css"  />
<!--背景滚动-->

</head>
<body>
<div style="height:400px; overflow:hidden; position:relative;" id="wrap">
<?php
include dirname(__FILE__).'/header.php'; 
?>
  <div style="height:400px; overflow:hidden;" id="bg"></div>
  <div style="height:400px; overflow:hidden;" id="overlay"></div>
  <div style="height:400px; overflow:hidden;" id="main"> 
    <!-- Header -->
    <header id="header">
      <h1>Zakitam</h1>
      <nav>
        <ul>
          <li>
            <div class="fa ">
              <h1>商</h1>
            </div>
          </li>
          <li>
            <div class="fa ">
              <h1>城</h1>
            </div>
          </li>
          <li>
            <div class="fa ">
              <h1>精</h1>
            </div>
          </li>
          <li>
            <div class="fa ">
              <h1>选</h1>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    <!-- Footer --> 
  </div>
</div>
<div class="container navbar-wrapper" style=" display:none; ">
  <div  id="tabs-268565">
    <ul class="nav nav-tabs" style=" margin:0 auto; text-align:center; ">
      <li class="menuItem active"> <a id="ld-on">Gopo相机</a> </li>
      <li class="menuItem "> <a id="nr-on">摄像机</a> </li>
      <li class="menuItem "> <a id="tj-on">相机配件</a> </li>
      <li class="menuItem "> <a id="sj-on">其他</a> </li>
    </ul>
  </div>
</div>
<div class="container" >
  <ul class="grid effect-6" id="grid">
    <li> <a href="shop/travel.php"> <img src="images/produt/travel/header.jpg"> </a> </li>
    <li> <a href="shop/life.php"> <img src="images/produt/life/header.jpg"> </a> </li>
    <li> <a href="shop/fish.php"> <img src="images/produt/fish/header.jpg"> </a></li>
     <li> <a href="shop/swim.php"> <img src="images/produt/swim/header.jpg"> </a> </li>
    <li> <a href="shop/professional.php"> <img src="images/produt/professional/header.jpg"> </a> </li>
    <li> <a href="shop/sport.php"> <img src="images/produt/sport/header.jpg"> </a></li>
  </ul>
  
</div>
<?php
include dirname(__FILE__).'/footer.php'; 
?>

<script src="js/modernizr.custom.js"></script><!--瀑布流--> 
<script src="js/skel.min.js"></script><!--背景滚动--> 
<script src="js/masonry.pkgd.min.js"></script> 
<script src="js/imagesloaded.js"></script> 
<script src="js/classie.js"></script> 
<script src="js/AnimOnScroll.js"></script> 
<script>
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
		</script> 

<script type="text/javascript"> 
$(window).load(function() { 
  $('img').each(function() {
    if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) { 
      this.src = '/images/loading.jpg'; 
      } 
   });
});
$(document).ready(function(){ 
	$(".navbar-toggle").click(function(){
$(".navbar").toggleClass("navblue-on");
});
});
</script> 

</body>
</html>