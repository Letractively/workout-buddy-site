function notification()
{
	setTimeout(function()
	{
		var notificationTable = $("#notificationTable");
		var newRow = 
		[
			"<tr>",
			"<td width=\"69%\"><a href=\"under-construction.html\">Oski</a> says you went to the gym together 4 days ago</td>",
			"<td align=\"left\"><span class=\"textSmall\">Right Now</span></td>",
			"<td align=\"right\"><a href=\"under-construction.html\" id=\"btnConfirm\" class=\"button small\">Confirm</a></td>",
			"</tr>"
		];
		
		notificationTable.fadeOut(120, function()
		{
			notificationTable.find("tbody").html(newRow.join(""));
			notificationTable.fadeIn(120);
			
			var notificationHeader = $("#notificationHeader");
			notificationHeader.text("Notifications (1)");
			
			$("#btnConfirm").click(function()
			{
				notificationTable.fadeOut(120, function()
				{
					notificationTable.find("tbody").html("<tr><td><span class=\"textSmall\">You have no notifications</span></td></tr>");
					notificationTable.fadeIn(120);
					
					notificationHeader.text("Notifications");
				});
				
				return false;
			});
		});
	}, 2000);
}
