<?php
include dirname(__FILE__).'/../meta.php'; 
?>
<title>SP系列产品</title>
<meta name="description" content="">
<?php
include dirname(__FILE__).'/shop-li-header.php'; 
?>
</head>
<body>
<?php
include dirname(__FILE__).'/../header.php'; 
?>
<div class="b-wrap">
  <div class="container li-wrap" >
    <div class="row clearfix">
      <div class="col-md-12 column">
        <ul class="breadcrumb">
          <li> <a href="/index.php">首页</a> </li>
          <li> <a href="/shop.php">商城</a> </li>
          <li class="active">
            <h1>SP系列产品</h1>
          </li>
          <div class="qrcode  visible-md visible-lg">
            <div class="mob-s" >手机扫码分享</div>
            <div id="output"></div>
          </div>
        </ul>
      </div>
    </div>
    <div class="container supply_style">
      <div class="row col-md-12 proWrapper">
        <div class="col-md-3 pd0" >
          <div id="myCarousel" class="carousel slide" style="overflow: hidden;">
            <div class="carousel-inner">
              <div class="item active">
                <div class="inner-item"> <img src="../images/produt/sp/header.jpg" alt="" class="img-responsive center-block img-rounded" /> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 product-price-wrapper">
          <h1><span>sp系列产品</span></h1>
          <div class="form-group hidden-xs"> <a class="btn btn-primary" href="https://shop125086752.taobao.com/category-1099752083.htm?spm=a1z10.3-c.w4010-11335972127.11.bPzO57&search=y&catName=%810%858%810%861%A8%B2+SP#bd" target="_blank"> 去淘宝购买 </a> </div>
          <div class="form-group visible-xs navbar-fixed-bottom"> <a class="btn btn-primary btn-block" href="https://shop125086752.taobao.com/category-1099752083.htm?spm=a1z10.3-c.w4010-11335972127.11.bPzO57&search=y&catName=%810%858%810%861%A8%B2+SP#bd" target="_blank"> 去淘宝购买 </a> </div>
        </div>
      </div>
      <div class="row">
        <?php
include dirname(__FILE__).'/shop-group-li.php'; 
?>
        <div class="col-md-9 column">
          <div class="proWrapper ">
            <div class="supply">
              <div class="sup ply_tit">
                <p>商品详情</p>
              </div>
              <div class="supplyContent" >
                <div id="myTab1Content" class="tab-content">
                  <div class="tab-pane fade in active" id="home">
                    <p> <img class="lazy" src="http://www.zakitam.com/images/loading.jpg" data-original="../images/produt/sp/1.jpg"> <img class="lazy" src="http://www.zakitam.com/images/loading.jpg" data-original="../images/produt/sp/2.jpg"> <img class="lazy" src="http://www.zakitam.com/images/loading.jpg" data-original="../images/produt/sp/3.jpg"> <img class="lazy" src="http://www.zakitam.com/images/loading.jpg" data-original="../images/produt/sp/4.jpg"> <img class="lazy" src="http://www.zakitam.com/images/loading.jpg" data-original="../images/produt/sp/5.jpg"> <img class="lazy" src="http://www.zakitam.com/images/loading.jpg" data-original="../images/produt/sp/6.jpg">  </p>
                  </div>
                </div>
                <div class="cl" ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include dirname(__FILE__).'/../footer.php'; 
?>
<?php
include dirname(__FILE__).'/../delayload.php'; 
?>
<?php
include dirname(__FILE__).'/shop-li-footer.php'; 
?>
</body>
</html>