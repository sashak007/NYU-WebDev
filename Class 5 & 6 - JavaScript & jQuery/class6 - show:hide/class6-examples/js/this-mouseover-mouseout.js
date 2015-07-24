$(function (){
	$("img").mouseover(function(){
		//swap the image src
		$(this).attr("src","images/monster_logo.jpg");
	});
	$("img").mouseout(function(){
		//swap the image src
		$(this).attr("src","images/full_throttle_logo.png");
	});
});