$(document).ready(function()
{
	var btnInvite = $("#btnInvite");
	$("#btnInvite").click(function()
	{
		btnInvite.fadeOut(120, function()
		{
			$("#spanInvited").fadeIn(120);
		});
		
		return false;
	});
});