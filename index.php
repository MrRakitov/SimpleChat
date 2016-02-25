<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple Chat</title>
</head>
<body>
	<div id="container">
		<div id="chat_box">
			<div id="chat_data">
				<span style="color:green;">Vasya: </span>
				<span style="color:brown;">Hello world</span>
				<span style="float:right;">12:13</span>
			</div>
		</div>
		
		<form action="index.php" method="post">
			<input type="text" name="name" placeholder="Enter name" />
			<textarea name="message" placeholder="Enter message"></textarea>
			<input type="submit" name="submit" value="Send it" />
		</form>
		
	</div>
</body>
</html>