$(function (){
	$(document).mousemove(function(e){

		var msg = e.pageX + ":" + e.pageY;
		console.log(msg)l //write the coords to the console

		//update the spaceship to be at the mouse position
		var imgWidth = $("img#spaceship").width();
		var imgHeight = $("img#spaceship").height();

		//calculate the new x and y position of the image
		var newX = e.pageX - (imgWidth / 2);
		var newY = e.pageY - (imgHeight / 2);

		//update the spaceship position to the new x and y coords
		$("img#spaceshipp").css("left", newX);
		$("img#spaceshipp").css("top", newY);
	});
	$(document).click(function(e){
		$("img#bullet").show();

		//detect the width and height
		var imgWidth = $("img#bullet").width();
		var imgHeight = $("img#bullet").height();

		//calc the new x and y position of the image
		var newX = e.pageX - (imgWidth /2);
		var newY = e.pageY - 80; //this is to get the bullet above the spaceship -- this is 80px but the px are dropped. why?

		//update the spaceship position to the new x and y coords
		$("img#spaceship").css("left",newX);
		$("img#spaceship").css("left",newY);

	});
	//'e' stands for event.
});