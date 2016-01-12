<?php
include dirname(__FILE__).'/meta.php'; 
?>
<title>zaiktam</title>
<meta name="description" content="">
<meta name="author" content="">
<link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<div style="position:relative;overflow:hidden; height:100%;" id="wrap">
  <?php
include dirname(__FILE__).'/header.php'; 
?>
  <!-- Header
  style="max-width:1920px;  width:100%; margin:0 auto; position:absolute; top:0;"
   -->
  <div >
    <div class="p-header">
      <video id="video1" loop="loop" muted="muted" poster="/images/Splacer_banner.jpg" >
        <source src="/images/Splacer_Dancer_VIDEO_1280x720.webm" type="video/webm" />
        <source src="/images/Splacer_Dancer_VIDEO_1280x720.mp4" type="video/mp4" />
        <source src="/images/Splacer_Dancer_VIDEO_1280x720.ogv" type="video/ogg" />
   </video>
      <div class="home-title">
        <div class="sp-home-big-head sp-bold">zakitam 工作室:佛山市禅城区建新路莺岗街621号火山滑板店</div>
        <div class="sp-home-big-head sp-bold"><span>zakitam studio:Volcano Skate Shop, Ying Gang Street, Jian Xin Road, Chan Cheng District, Foshan, China.</span></div>
        <img alt="Video pause" height="40" id="main-video-pause"  src="images/pause.png" style="display:none ;">
        <img alt="Video play" height="40" id="main-video-play"  src="images/play.png" style="display:inline ;">
        <h2><span class="sp-home-head-1 sp-pointer">微信号:zakitamm</span></h2>
    </div>
  </div>
  <!-- Footer --> 
</div>
</div>
<div class="about-footer">
<?php
include dirname(__FILE__).'/footer.php'; 
?>
</div>
<!--
<script src="https://www.splacer.co/assets/application-305bb38705e313cbef2dbaea3c9ffd0a.js"></script>
-->
<script type="text/javascript"> 
$(document).ready(function(){ 
	$(".navbar-toggle").click(function(){
$(".navbar").toggleClass("navblue-on");
});
$(".footer").css("background","none");

var myVideo=document.getElementById("video1");
$("#main-video-pause").click(function(){
	$(this).hide();
	$("#main-video-play").show();
    myVideo.pause();
	});
$("#main-video-play").click(function(){
	$(this).hide();
	$("#main-video-pause").show();
    myVideo.play();
	});
	});
</script>
</body>
</html>