$(document).ready(function(){
	$("#chatbox").load("getchat.php");
	$("#chatbox").scrollTop($("#chatbox")[0].scrollHeight);


	setInterval(function(){
		$("#chatbox").load("getchat.php");
		$("#chatbox").scrollTop($("#chatbox")[0].scrollHeight);
	}, 100);

	$("#butt").click(function(){
		$.ajax({
			url: "clear.php",
			success: function(){}
		});
	});

	$("#watid").submit(function(){
		var url = "insert.php";
		var user = $("#user").val().replace("'", "''");

		var message = $("#message").val();


		$.ajax({
			url: url,
			type: 'POST',
			data: {user: user, message: message},
			success: function(data) {
				$("#message").val("");
			}
		});
		return false;
	});
});