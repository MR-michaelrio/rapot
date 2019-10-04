<?php
	$conn = new mysqli('localhost', 'root', '', 'dbrapot');
	
	if(!$conn){
		die("Error: Can't connect to the database!");
	}
?>