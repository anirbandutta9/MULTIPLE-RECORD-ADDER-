<?php
include("connection.php");
if(isset($_POST['update'])) {
$id= $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$countid = count($id);
for ($i=0 ; $i < $countid ; $i++) 
{
	$totid = $id[$i];
	$totname = $name[$i];
	$totphone = $phone[$i];
	$query = "UPDATE users SET name='" . $totname . "' , phone ='".$totphone."' WHERE  id = " . $totid ;
	$result =  mysqli_query($conn,$query) or die  (mysqli_error($conn));
	if ($result )  
	{
      echo "<script>alert('update success'); 
      window.location.href = 'index.php'; </script>";

	}
	else 
	{
		 "<script>alert('error'); 
      window.location.href = 'index.php'; </script>";
	}
}
}
?>