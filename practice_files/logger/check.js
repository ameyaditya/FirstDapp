function check()
{
	var pass1 = $("#passwd1").val();
	var pass2 = $("#passwd2").val();

	if(pass1 == pass2)
	{
		$("#error_log").html("Passwords Match");
		document.getElementById("submit_button").disabled = false;

	}
	else
	{
		$("#error_log").html("Passwords Dont Match");
		document.getElementById("submit_button").disabled = true;
	}
}
$(document).ready(function () {
   $("#passwd1, #passwd2").keyup(check);
});