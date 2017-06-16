<?php
include("connection.php");
if (isset($_POST['insert']))
{
	$total = $_POST['total'];
	for ($i=1 ; $i<= $total ; $i ++)
	{
		$name = $_POST["name$i"];
		$phone = $_POST["phone$i"];
		$query = "INSERT INTO users(name , phone) VALUES ('" .$name. "' , ' " .$phone."')";
		$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	}
		if (mysqli_affected_rows($conn) > 0) {
			echo "<script>alert('$total RECORD/RECORDS ADDED');
			window.location.href='index.php';</script>";
		}
		else {
		echo "<script>alert('Error');</script>";
	}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD RECORDS</title>
</head>
<body>
<a href="generate.php" > ADD DATA </a>
<?php
if (isset($_POST['submit'])) {
	echo "<form method= 'POST' >
	<input type='hidden' name='total' value=' " . $_POST['no_of_rec'] . "'> 
	<table>
	<tr>
	<th> # </th>
	<th> Name </th>
	<th> Phone </th>
	</tr>";
	for ($i= 1;  $i <= $_POST['no_of_rec']  ; $i++)  
	{
		echo "
		<tr>
		<td> $i  </td>
		<td>
		<input type= 'text' name='name$i' placeholder= 'Name' required>
		</td><td>
        <input type= 'text' name='phone$i' placeholder= 'Phone' required></td>
        </tr>";
    }
    echo "
    <tr>
        <td>
        <input type='submit' name= 'insert' value='INSERT ALL DATA' > &nbsp; &nbsp;  <a href='index.php' > BACK TO INDEX </a>
        </td>
        </tr>
        </table></form>";
}
?>
</body>
</html>