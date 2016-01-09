<?php
include dirname(__FILE__).'/meta.php'; 
?>
<title>zaiktam</title>
<meta name="description" content="">
<meta name="author" content="">


<link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet" type="text/css">
<link href="css/style-normal.css" rel="stylesheet" type="text/css" >
<link href="css/style.css" rel="stylesheet" type="text/css"  />
<!--背景滚动-->
<link href="css/style-normal.css" rel="stylesheet" type="text/css"  />
<!--背景滚动-->
<link rel="stylesheet" type="text/css" href="css/component.css" />
<!--瀑布流-->
</head>
<body>
<div style="height:400px; overflow:hidden; position:relative;" id="wrap">
<?php
include("header.php");
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
              <h1>视</h1>
            </div>
          </li>
          <li>
            <div class="fa ">
              <h1>频</h1>
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
<div class="container navbar-wrapper" style=" ">
  <div  id="tabs-268565">
    <ul class="nav nav-tabs" style=" margin:0 auto; text-align:center; ">
      <li class="menuItem active"> <a id="ld-on">Gopo技巧</a> </li>
      <li class="menuItem "> <a id="nr-on">视频日志</a> </li>
      <li class="menuItem "> <a id="tj-on">原创视频</a> </li>
      <li class="menuItem "> <a id="sj-on">其他</a> </li>
    </ul>
  </div>
</div>
<div class="container" style="margin-top:-40px;">
  <ul class="grid effect-6" id="grid">
  <!--gopro技巧-->
    <li id="ld"> <a href="media/skill/skill-1.php"> <img src="/images/media/skill/1.jpg"> </a> </li>
    <li><a href="media/skill/skill-2.php"> <img src="images/media/skill/12.jpg"> </a> </li>
    <li><a href="media/skill/skill-3.php"> <img src="images/media/skill/3.jpg"> </a> </li>
    <li><a href="media/skill/skill-4.php"> <img src="images/media/skill/4.jpg"> </a> </li>
    <li><a href="media/skill/skill-5.php"> <img src="images/media/skill/5.jpg"> </a> </li>
    <li style="display:none;"><a href="media/skill/skill-6.php"> <img src="images/media/skill/6.jpg"> </a> </li>
    <li  style="display:none;"><a href="media/skill/skill-8.php"> <img src="images/media/skill/7.jpg"> </a> </li>
    <li><a href="media/skill/skill-7.php"> <img src="images/media/skill/8.jpg"> </a> </li>
      <!--视频日志-->
    <li id="nr"> <a href="media/log/log-1.php"> <img src="/images/media/log/1.jpg"> </a> </li>
    <li><a href="media/log/log-2.php"> <img src="/images/media/log/2.jpg"> </a> </li>
    <li><a href="media/log/log-3.php"> <img src="/images/media/log/3.jpg"> </a> </li>
    <li><a href="media/log/log-4.php"> <img src="/images/media/log/4.jpg"> </a> </li>
    <li><a href="media/log/log-5.php"> <img src="/images/media/log/5.jpg"> </a> </li>
    <li><a href="media/log/log-6.php"> <img src="/images/media/log/6.jpg"> </a> </li>
      <!--原创视频-->
    <li id="tj"><a href="media/origin/origin-1.php"> <img src="/images/media/origin/1.jpg"> </a></li>
    <li><a href="media/origin/origin-2.php"> <img src="/images/media/origin/2.jpg"> </a></li>
    <li><a href="media/origin/origin-3.php"> <img src="/images/media/origin/3.jpg"> </a></li>
    <li><a href="media/origin/origin-4.php"> <img src="/images/media/origin/4.jpg"> </a></li>
    <li><a href="media/origin/origin-5.php"> <img src="/images/media/origin/5.jpg"> </a></li>
    <li><a href="media/origin/origin-6.php"> <img src="/images/media/origin/6.jpg"> </a></li>
    <li><a href="media/origin/origin-7.php"> <img src="/images/media/origin/7.jpg"> </a></li>
    <li><a href="media/origin/origin-8.php"> <img src="/images/media/origin/8.jpg"> </a></li>
    <li><a href="media/origin/origin-9.php"> <img src="/images/media/origin/9.jpg"> </a></li>
    <li><a href="media/origin/origin-10.php"> <img src="/images/media/origin/10.jpg"> </a></li>
    <li><a href="media/origin/origin-11.php"> <img src="/images/media/origin/11.jpg"> </a></li>
    <li><a href="media/origin/origin-12.php"> <img src="/images/media/origin/12.jpg"> </a></li>
    <li><a href="media/origin/origin-13.php"> <img src="/images/media/origin/13.jpg"> </a></li>
    <li><a href="media/origin/origin-14.php"> <img src="/images/media/origin/14.jpg"> </a></li>
    <li><a href="media/origin/origin-15.php"> <img src="/images/media/origin/15.jpg"> </a></li>
    <li><a href="media/origin/origin-16.php"> <img src="/images/media/origin/16.jpg"> </a></li>
    <li><a href="media/origin/origin-17.php"> <img src="/images/media/origin/17.jpg"> </a></li>
    <li><a href="media/origin/origin-18.php"> <img src="/images/media/origin/18.jpg"> </a></li>
    <li id="sj"> <li><a href="media/origin/origin-18.php"> <img src="/images/media/origin/18.jpg"> </a></li></li>
  </ul>
  <div class="modal fade" style=" " id="modal-container-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="close-on"  data-dismiss="modal" aria-hidden="true">×</div>
    <div class="modal-content" style="  display:block;margin-left:auto;margin-right:auto; width:100%; max-width:800px; ">
      <div style=" width:100%; height:320px; margin-top:-15px;">
        <iframe width="100%" height="100%" src="http://player.youku.com/embed/XMTM5MzQ2OTE0MA==" frameborder=0 allowfullscreen></iframe>
      </div>
    </div>
    <div class="modal-content" style="  display:block;margin-left:auto;margin-right:auto; width:100%;  max-width:1080px; ">
      <div class="modal-header-on " style=" height:38px; line-height:38px;"  >
        <h4 class="modal-title" id="myModalLabel"> 相关产品 </h4>
      </div>
      <div class="modal-body" style=" width:100%;  margin-top:-15px;">
        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail"> <img src="http://imgs.windmsn.com/zakitam/uploads/151126/4-151126214ZXW.jpg" /> </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail"> <img src="http://imgs.windmsn.com/zakitam/uploads/151126/4-151126214ZXW.jpg" /> </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail"> <img src="http://imgs.windmsn.com/zakitam/uploads/151126/4-151126214ZXW.jpg" /> </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail"> <img src="http://imgs.windmsn.com/zakitam/uploads/151126/4-151126214ZXW.jpg" /> </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail"> <img src="http://imgs.windmsn.com/zakitam/uploads/151126/4-151126214ZXW.jpg" /> </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail"> <img src="http://imgs.windmsn.com/zakitam/uploads/151126/4-151126214ZXW.jpg" /> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/skel.min.js"></script><!--背景滚动--> 
<script src="js/modernizr.custom.js"></script><!--瀑布流--> 

<script src="js/masonry.pkgd.min.js"></script> <!--瀑布流--> 



<?php
include("footer.php");
?>
<script src="js/imagesloaded.js"></script> <!--瀑布流--> 
<script src="js/classie.js"></script> <!--瀑布流--> 
<script src="js/AnimOnScroll.js"></script> <!--瀑布流--> 
<script>
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
		</script> 
<script src="js/stickUp.min.js"></script> 
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
<script type="text/javascript">
      jQuery(function($) {
        $(document).ready( function() {
          $('.navbar-wrapper').stickUp({
                        parts: {
                          0:'ld',
                          1:'nr',
                          2: 'tj',
                          3: 'sj',
                          4: 'sf',
                          5: 'fy',
                          6: 'sf',
                          7: 'sf'
                        },
                        itemClass: 'menuItem',
                        itemHover: 'active',
                        topMargin: 'auto'
                      });

	 $('#ld-on').click(function(){
    $("html,body").animate({scrollTop:$("#ld").offset().top},500);
});
$('#nr-on').click(function(){
    $("html,body").animate({scrollTop:$("#nr").offset().top},500);
});
$('#tj-on').click(function(){
    $("html,body").animate({scrollTop:$("#tj").offset().top},500);
});
$('#sj-on').click(function(){
    $("html,body").animate({scrollTop:$("#sj").offset().top},500);
});

        });
      });
    </script>
</body>
</html>