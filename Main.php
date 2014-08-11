<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="chat.css">
<html>
	<head>
		<title>Only war campaign</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</head>
	<body>

<div class="chat" id="chatbox" style="overflow-y: hidden; height:400px; width:800px"></div>

<script>
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
		success: function(){
			
			}


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
			success: function(data)
			{
				$("#message").val("");
			}

});
return false;
});
});
</script>


<form id="watid"  method="post">
Name: <input type="text" id="user" value="Anon">
Message: <textarea type="text" id="message" value=""></textarea>
<input type="submit" target="_self">
</form>


<button id="butt" type="button">Clear chat!</button>

	</body>
</html>
