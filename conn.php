<?php
	$conn=new SQLite3('db/db_member') or die("Unable to open database!");
	$query="CREATE TABLE IF NOT EXISTS `member`(mem_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, firstname TEXT, lastname TEXT, address TEXT)";
	
	$conn->exec($query);
?>