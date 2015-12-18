  <div class="zt-f">
    <div class="footer visible-md visible-lg">
      <div class="footer-wrap">
        <div class="col-sm-4 column" style="text-align:left;"> <a  href="/index.php" style="line-height:70px;"><img class="logo" src="/images/logo_w.png" height="38" style=" vertical-align:middle;" /></a> </div>
        <div class="col-sm-4 column">
          <ul style="line-height:70px;">
            <li><img src="/images/ico/weixin.png"/></li>
            <li><img src="/images/ico/weibo.png"/></li>
            <li><img src="/images/ico/youku.png"/></li>
            <li><img src="/images/ico/taobao.png"/></li>
          </ul>
        </div>
        <div class="col-sm-4 column">
          <p>Copyright @  Zaiktam Team 2015</p>
        </div>
      </div>
    </div>
    <div class="v-wrap visible-xs">
      <div class="col-sm-12 column" style=" margin:0 auto;">
        <p>Copyright @  Zaiktam Team 2015</p>
      </div>
    </div>
  </div>
  <!--回到顶部-->

   <style>
    #rocket-to-top div {
        left:0;
        margin:0;
        overflow:hidden;
        padding:0;
        position:absolute;
        top:0;
        width:88px;
        background: red;
    }
    #rocket-to-top .level-2 {
        background:url("../images/rocket_button_up.png") no-repeat scroll -88px 0 transparent;
        display:none;
        height:200px;
        opacity:0;
        z-index:1;
    }
    #rocket-to-top .level-3 {
        background:none repeat scroll 0 0 transparent;
        cursor:pointer;
        display:block;
        height:150px;
        z-index:2;
    }
    #rocket-to-top {
        background:url("../images/rocket_button_up.png") no-repeat scroll 0 0 transparent;
        cursor:default;
        display:block;
        height:200px;
        margin:-25px 0 0;
        overflow:hidden;
        padding:0;
        position:fixed;
        right:0;
        top:70%;
        width:88px;
        z-index:11;
    }
		#rocket-wrap-lit{}
	 #rocket-lit{ display:none; background:url("../images/to-top.png") no-repeat; width:40px; height:40px;  position:fixed;  right:4px;
        bottom:10%;}
    @media (max-width: 768px) {
        .returntop {
            display: none;
        }
	
    }
</style>
<div class="returntop">
    <div style="" id="rocket-to-top">
        <div style="opacity:0;display:block;" class="level-2"></div>
        <div class="level-3"></div>
    </div>
    </div>
    <div id="rocket-wrap-lit">
  <div id="rocket-lit"></div>
  </div>
 <script  src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script> 

 <script src="/js/lyz.delayLoading.min.js" type="text/javascript"></script>
<script type="text/javascript">
            $(function () {
                $("img").delayLoading({
                    defaultImg: "/images/loading.jpg",           // 预加载前显示的图片
                    errorImg: "",                        // 读取图片错误时替换图片(默认：与defaultImg一样)
                    imgSrcAttr: "src",                  // 读取图片的src
                    setImg: "originalSrc",              //记录图片路径的属性(默认：originalSrc，把页面img的src属性值传给originalSrc属性)
                    beforehand: 0,                       // 预先提前多少像素加载图片(默认：0)
                    event: "scroll",                     // 触发加载图片事件(默认：scroll)
                    duration: "normal",                  // 三种预定淡出(入)速度之一的字符串("slow", "normal", or "fast")或表示动画时长的毫秒数值(如：1000),默认:"normal"
                    container: window,                   // 对象加载的位置容器(默认：window)
                    success: function (imgObj) { },      // 加载图片成功后的回调函数(默认：不执行任何操作)
                    error: function (imgObj) { }         // 加载图片失败后的回调函数(默认：不执行任何操作)
                });
            });
        </script>
        <script>
        $(function() {
            var e = $("#rocket-to-top"),
            t = $(document).scrollTop(),
            n,
            r,
            i = !0;
            $(window).scroll(function() {
                var t = $(document).scrollTop();
                t == 0 ? e.css("background-position") == "0px 0px" ? e.fadeOut("slow") : i && (i = !1, $(".level-2").css("opacity", 1), e.delay(100).animate({
                    marginTop: "-1000px"
                },
                "normal",
                function() {
                    e.css({
                        "margin-top": "-25px",
                        display: "none"
                    }),
                    i = !0
                })) : e.fadeIn("slow")
            }),
            e.hover(function() {
                $(".level-2").stop(!0).animate({
                    opacity: 1
                })
            },
            function() {
                $(".level-2").stop(!0).animate({
                    opacity: 0
                })
            }),
            $(".level-3").click(function() {
                function t() {
                    var t = e.css("background-position");
                    if (e.css("display") == "none" || i == 0) {
                        clearInterval(n),
                        e.css("background-position", "0px 0px");
                        e.css("height", "200px;");
                        return
                    }
                    switch (t){
                    case "0px 0px":
                        e.css("background-position", "-176px 0px");
                        break;
                    case "-176px 0px":
                        e.css("background-position", "-264px 0px");
                        break;
                    case "-264px 0px":
                        e.css("background-position", "-352px 0px");
                        break;
                    case "-352px 0px":
                        e.css("background-position", "-440px 0px");
                        break;
                    case "-440px 0px":
                        e.css("background-position", "-176px 0px");
                    }
                }
                if (!i) return;
                n = setInterval(t, 50),
                $("html,body").animate({scrollTop: 0},"slow");
            });
			
			  $(window).scroll(function(){
         // 获得div的高度

         if($(window).scrollTop()> 200){
            // 滚动到指定位置
            $("#rocket-lit").fadeIn();
        } else {
            $("#rocket-lit").fadeOut();
        }
    });
	
			$('#rocket-lit').click(function(){
    $("html,body").animate({scrollTop:$(".navbar").offset().top},500);
});
        });
    </script>