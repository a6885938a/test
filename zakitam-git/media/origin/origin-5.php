<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>旅行记忆 - 德庆郊游 Ⅲ</title>
<meta name="description" content="">
<meta name="author" content="">


<link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="../../css/index.css" rel="stylesheet" type="text/css">


</head>
<body>
<?php
include dirname(__FILE__).'/../../header.php'; 
?>


<div class="b-wrap"> 
<div class="container li-wrap" >
<div class="row clearfix">
		<div class="col-md-12 column">
			<ul class="breadcrumb">
				<li>
					 <a href="/index.php">首页</a>
				</li>
				<li>
					 <a href="/media.php#tj">原创视频</a>
				</li>
				<li class="active">
					<h1>旅行记忆 - 德庆郊游 Ⅲ</h1>
				</li>
          <div class="qrcode  visible-md visible-lg">
                    <div class="mob-s" >手机扫码分享</div>
                    <div id="output"></div>
                    </div>
			</ul>

		</div>
	</div>
<div class="row clearfix">
		<div class="col-md-8 column">
        <div class="li-media-wrap">
<iframe height=100% width=100% src="http://player.youku.com/embed/XNjUzNjAyODQw==" frameborder=0 allowfullscreen></iframe>      </div>
		</div>
		<div class="col-md-4 column li-header-wrap">
           <div class="li-header-on" >
        <div class="li-title" id="myModalLabel"> <p>相关产品</p></div>
    
      </div>
      <div class="li-header-con">
      
		</div>
        </div>
	</div>
</div>
</div>
<?php
include dirname(__FILE__).'/../../footer.php'; 
?>
   

<script type="text/javascript" src="../../js/jquery.qrcode.min.js"></script><!--二维码-->

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

</body>
</html>