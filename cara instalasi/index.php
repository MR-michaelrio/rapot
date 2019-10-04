<?php
mysqli_connect("localhost","root","");
mysqli_select_db("students") or die("Unable to select database");
 
$sql = "SELECT * FROM students ORDER BY id";
 
$result = mysqli_query($sql) or die($sql."<br/><br/>".mysqli_error());
 
$i = 0;
 
echo '<table width="50%">';
echo '<tr>';
echo '<td>ID</td>';
echo '<td>Name</td>';
echo '<td>Address</td>';
echo '</tr>';
 
echo "<form name='form_update' method='post' action='update.php'>\n";
while ($students = mysqli_fetch_array($result)) {
	echo '<tr>';
	echo "<td>{$students['id']}<input type='hidden' name='id[$i]' value='{$students['id']}' /></td>";
	echo "<td>{$students['name']}</td>";
	echo "<td><input type='text' size='40' name='address[$i]' value='{$students['address']}' /></td>";
	echo '</tr>';
	++$i;
}
echo '<tr>';
echo "<td><input type='submit' value='submit' /></td>";
echo '</tr>';
echo "</form>";
echo '</table>';
?>