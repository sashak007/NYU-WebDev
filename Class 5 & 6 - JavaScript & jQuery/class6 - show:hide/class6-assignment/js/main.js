//wait for the page to load
$(function(){

	$(".thumb").mouseover(function(){
		$(this).find("img").hide();
		$(this).find("article").show();
	});

	$(".thumb").mouseout(function(){
		$(this).find("article").hide();
		$(this).find("img").show();

		//alternatively, it could be writen like this:
			// $("img", this).hide();
			// $("article", this).show();
		});


//Could this also be a possible solution?

	// $("img.ducks").mouseover(function(){
	// 	$(this).attr("src","article.moreInfo");
	// });
	// $("article.moreInfo").mouseout(function(){
	// 	$(this).attr("src","img.ducks");
	// });
});