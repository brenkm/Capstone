$("#changeUnameInputs").hide();
$("#changePasswordInputs").hide();
$("#twitterInputs").hide();
$("#facebookInputs").hide();
	

$("#changeUsernameButton").on('click', function() {
	$("#changeUnameInputs").slideToggle(200);
});

$("#changePasswordButton").on('click', function() {
	$("#changePasswordInputs").slideToggle(200);
});

$("#twitterButton").on('click', function() {
	$("#twitterInputs").slideToggle(200);
});

$("#facebookButton").on('click', function() {
	$("#facebookInputs").slideToggle(200);
});