<?php 

	include "db.php";

	$query = "SELECT * FROM chat ORDER BY id DESC";
	$run = $con->query($query);

	while($row = $run->fetch_array()) :
?>
<div id="chat_data">
	<span style="color:green;"><?=$row['name'];?></span> : 
	<span style="color:brown;"><?=$row['msg'];?></span>
	<span style="float:right;"><?=formatDate($row['date']);?></span>
</div>

<?php endwhile; ?>
