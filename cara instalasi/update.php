<?php
mysqli_connect("localhost","root","");
mysqli_select_db("students") or die("Unable to select database");
 
$size = count($_POST['address']);
 
$i = 0;
while ($i < $size) {
	$address= $_POST['address'][$i];
	$id = $_POST['id'][$i];
 
	$query = "UPDATE students SET address = '$address' WHERE id = '$id' LIMIT 1";
	mysqli_query($query) or die ("Error in query: $query");
	echo "$address<br /><br /><em>Updated!</em><br /><br />";
	++$i;
}
?>