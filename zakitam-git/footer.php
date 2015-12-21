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
<div class="returntop">
    <div style="" id="rocket-to-top">
        <div style="opacity:0;display:block;" class="level-2"></div>
        <div class="level-3"></div>
    </div>
    </div>
    <div id="rocket-wrap-lit" class="visible-xs">
  <div id="rocket-lit"></div>
  </div>
 <script  src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
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