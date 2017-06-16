<?php
include ("connection.php");
$chk = $_POST['chk'];
if (!isset($chk)) {
	echo "<script>alert('select atleast one item');
	window.location.href = 'index.php';
	</script>";
}
else {
	$chkcount = count($chk);
}
?>
<html>
<head>
	<title> Edit</title>
	</head>
	<body>
	<a href="generate.php" > Add Record </a>
	<form method= "POST" action = "update_mul.php" >
	<table>
	<tr>
	<th>NAME </th>
	<th>PHONE </th>
	</tr>
	<?php
	for ($i=0;$i<$chkcount;$i++)
	{
		$id = $chk[$i];
		$query = "SELECT * FROM users WHERE id= " . $id . " ";
		$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
		if (mysqli_num_rows($result) > 0 )
		{
			while ($num = mysqli_fetch_array($result)) 
			{
				echo "<tr><td>
				<input type='hidden' name='id[]' value = '" . $num['id'] ."' />    
				<input type='text'   name= 'name[]' value= '" .$num['name']."' />
				</td>
				<td>
				<input type='text' name='phone[]' value = '" .$num['phone']."' / >
				</td>
				</tr>";

 			}
		}
	 }
	 ?>
	 <tr>
	 <td>
	 	 <input type = "submit" name="update" value="UPDATE ALL" > &nbsp; &nbsp; <a href="index.php"> CANCEL </a>
	 	 </td>
	 	 </tr>
	 	 </table>
	 	 </form>

</body>
</head>
</html>
