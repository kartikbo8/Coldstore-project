<?php
include '2Webpage.php';
if(isset($_post['Submit']))
{
	$name=$_POST['username'];
	$pass=$_POST['Enter Password'];
	$confirm_pass=$_POST['Enter Password'];
	
	
	$sql="insert into Forgot password(name,Enter Password,Confirm Password)
	values('$username','$EnterPassword , $ConfirmPassword);
	if (mysqli_query($con,$sql))
	{

	}
	else
	{
		echo"error:".mysql_error($con);
	}
	mysqli_close($con);
}

?>
	