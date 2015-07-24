$(function (){
	$("img#image1").mouseover(function(){
		//swap the image src
		$("img#image1").attr("src","images/monster_logo.jpg");
	});
	$("img#image1").mouseout(function(){
		//swap the image src
		$("img#image1").attr("src","images/full_throttle_logo.png");
	});
});