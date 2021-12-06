<?php
	require'conn.php';
	
	$query=$conn->query("SELECT * FROM `member`") or die("Failed to fetch row!");
	while($fetch=$query->fetchArray()){
		echo"<tr><td>".$fetch['firstname']."</td><td>".$fetch['lastname']."</td><td>".$fetch['address']."</td></tr>";
	}
?>