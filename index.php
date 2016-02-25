<?php 

include "db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple Chat</title>
	<link rel="stylesheet" href="style.css" media="all">
</head>
<body>
	<div id="container">
		<div id="chat_box">
		<?php 
			$query = "SELECT * FROM chat ORDER BY id DESC";
			$run = $con->query($query);

			while($row = $run->fetch_array()) :
		?>
			<div id="chat_data">
				<span style="color:green;"><?=$row['name'];?></span> : 
				<span style="color:brown;"><?=$row['msg'];?></span>
				<span style="float:right;"><?=$row['date'];?></span>
			</div>
		<?php endwhile; ?>
		</div>
		
		<form action="index.php" method="post">
			<input type="text" name="name" placeholder="Enter name" />
			<textarea name="message" placeholder="Enter message"></textarea>
			<input type="submit" name="submit" value="Send it" />
		</form>
		
	</div>
</body>
</html>