$(function (){

	$("p").click(function(){
		$("img").slideToggle(); //animation added to the hide
		$("p#intro").slideToggle();
		//Others include:
		//slideUp()
		//slideDown()
	});
});