var weekdays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var calculateHours = function(){
	var totalHours = 0;
	for(var i = 0; i < 7; i++){
	    var workHours = prompt("How many hours did you work on "+ weekdays[i]+"?");
	    var hours = parseInt(workHours);
		totalHours += hours;
	 }
	alert("You worked a total of " +totalHours+" hours!");
	return totalHours;
};

var calcPaycheck = function(weekHours){
	var rate = prompt("What is your hourly rate?"),
	hourlyRate = parseInt(rate),
	overtimeHours = weekHours - 40,
	otPay,
	pay = 0;


	if (weekHours <= 40){
		pay = weekHours * hourlyRate;
		alert("You're making a total of " + pay +" this week!");
	}

	else{
		pay = 40 * hourlyRate;
		otPay = overtimeHours * (hourlyRate + (hourlyRate * .5));
		alert("You're making a total of $" + pay +" base and $"+ otPay +" overtime this week!");
	}

}
