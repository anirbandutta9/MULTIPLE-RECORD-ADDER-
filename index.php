<?php
include("connection.php");
?>
<html>
<head>
<title>ADD RECORDS </title>
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>
</head>
<body>
<a href="generate.php" > ADD RECORD </a>
<br><br>
<form method="post" name="frm">
<table >
<tr>
<th># </th>
<th>Name</th>
<th>Phone</th>
</tr>
<?php
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
$count = mysqli_num_rows($result);
if($count > 0) {
	while ($num = mysqli_fetch_array($result)) {
		echo '<tr>
	<td><input type="checkbox" name="chk[]" class="chk-box" value="' . $num["id"]. ' "/> </td>
	<td>'.$num["name"].' </td>
	<td>'.$num["phone"].'</td>
	</tr>' ; 
}
}
else {
	echo "no records found";
}
?>

<?php
if($count > 0) 
	{
     echo '<tr>
    <td colspan="3">
    <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>
    <label style="margin-left:100px;">
    <span style="word-spacing:normal;"> with selected :</span>
    <span><img src="images/edit.png" onClick="edit_records();" alt="edit" />edit</span> 
    <span><img src="images/delete.png" onClick="delete_records();" alt="delete" />delete</span>
    </label>
    </td>
	</tr>';
}
?>

</table>
</form>
</body>
</html>
