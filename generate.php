<!DOCTYPE html>
<html>
<head>
	<title>GENERATE</title>
</head>
<body>
<a href="index.php"> view data </a>
<br>
<br>
<form method =  "POST" action = "adddata.php" >
<table>
	<tr>
	<td>How many rows you want to insert? </td>
	<br>
	<br>
	</tr>
	<tr>
	<td>
	<input type="text" name="no_of_rec" placeholder="Enter no of record you want to GENERATE, ex 1,2,3,4" maxlength="2" pattern="[0-9]+" required>
	<br>
	<br>
	</td>
	</tr>
	<tr>
	<td>
	<input type="submit" name="submit" value="GENERATE" /> &nbsp; &nbsp; <a href="index.php" > back to index </a>
	</td>
	</tr>


</table>
</form>

</body>
</html>