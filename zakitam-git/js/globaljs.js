//全球电藏

var timer=null;
var i=0;
$(function(){
	$(".import-collection div.bd li.t").mouseover(function(){
		clearInterval(timer);
       $(this).addClass("current");
		$(this).stop().animate({width:"715px"},200).siblings().stop().animate({width:"237px"},200)
	});
	$(".import-collection div.bd li.t").mouseout(function(){
       $(this).removeClass("current");
		timer=setInterval("startMove()",2000)
	});
})
function startMove(){
  i++;
  if(i>$(".import-collection div.bd li.t").length-1){i=0}
  $(".import-collection div.bd li.t").stop().eq(i).addClass("current").animate({width:"715px"},300).siblings().stop().removeClass("current").animate({width:"237px"},300)

};
timer=setInterval("startMove()",4000)
