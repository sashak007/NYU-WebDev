function hoursPerDay(n) {
	var id = "day" + n;
	var workDay = document.getElementById(id);


	if (workDay.value) {
		hours = parseInt(workDay.value);
	} else {
		hours = 0;
	}
	return hours;
}

function calcRegHours(hours) {
	if (hours > 40) {
		return 40;
	} else {
		return hours;
	}
}

function calcOTHours(hours) {
	if (hours > 40) {
		return hours - 40;
	} else {
		return 0;
	}
}

function message(regHours, OTHours, totalHours, regPay, OTPay, totalPay) {
	var msg = "<p>You worked a total of <span class='number'>" + totalHours + "</span>, with <span class='number'>" + OTHours + "</span> hours of overtime.</p>";
	msg += "\n\n<p>You earned a total of <span class='total_number'>$" + totalPay + "</span> with  <span class='number'>$" + OTPay + " of overtime and <span class='number'>$" + regPay + "</span> of regular pay. </p>";

	var workDay = document.getElementById("total");
	workDay.innerHTML = msg;

}

function calculatePay() {
	var regRate = 10;
	var OTRate = regRate * 1.5;

	var totalHours = 0;

	for (var i=1; i<=7; i++) {
		totalHours += hoursPerDay(i);
	}

	var regHours = calcRegHours(totalHours);
	var OTHours = calcOTHours(totalHours);

	var regPay = regHours * regRate;
	var OTPay = OTHours * OTRate;
	var totalPay = regPay + OTPay;

	message(regHours, OTHours, totalHours, regPay, OTPay, totalPay);

}

