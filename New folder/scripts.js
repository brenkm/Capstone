$(document).ready(function() {

	$("#createAccountInputs").hide();
	$("#powerOffButton").hide();
	$("#signInInputs").hide();
	

	$("#signInButton").on('click', function() {
		$("#createAccountInputs").hide();
		$("#signInInputs").slideToggle(200);
	});


	$("#createAccountButton").on('click', function() {
		$("#signInInputs").hide();
		$("#createAccountInputs").slideToggle(200);
	});

	$("#signInButton2").on('click', function() {
		window.location.replace("http://www.google.com");
	});

	$("#completeButton").on('click', function() {
		window.location.replace("http://www.google.com");
	});

	$("#powerOnButton").on('click', function() {
		$("powerOnButton").hide();
		$("powerOffButton").toggle();
	});




	

	
});



