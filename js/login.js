		$("#enter_pass").hide();
$("#submit_details").click(function(){
	$("#submit_details").html("Please wait..");
	$("#submit_details").attr('disabled','disabled');
	setTimeout(function(){
		$("#submit_details").html("Login");
		$("#submit_details").removeAttr('disabled','disabled');
	},3000);
	$("#enter_email").fadeOut();
	$("#enter_pass").show();
})