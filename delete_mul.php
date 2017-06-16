<?php
include ("connection.php");
$chk = $_POST['chk'];
$chkcount = count($chk);
if(!isset($chk)) 
{
	echo "<script>alert('select atleast one item');
	window.location.href = 'index.php';
	</script>";
}
else {
for ($i=0; $i<$chkcount; $i++)
{
	$del = $chk[$i];
	$query = "DELETE FROM users WHERE id = ". $del ."" ;
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	if ($result && $chkcount==1) {
		echo " <script> alert('record deleted successfully'); 
		window.location.href = 'index.php';</script>";
	}
	else if ($result && $chkcount > 1) {
		echo "<script> alert('$chkcount records were deleted');
		window.location.href = 'index.php'; </script>";
	}
	else {
		echo  " <script> alert('error'); </script>";
	}
}
}
?>
