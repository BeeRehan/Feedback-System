<?php
$connect=mysqli_connect("localhost","root","");
	if(!$connect)
	{
		echo 'Not connected to server';
	}
	if(!mysqli_select_db($connect,'feed'));
	{
		echo 'Database is connected';
	}
	$fna=$_POST['1'];
	$lna=$_POST['2'];
	$user=$_POST['3'];
	$ema=$_POST['4'];
	$pas=$_POST['5'];
	$sql="INSERT INTO reg(fna,lna,user,ema,pas)VALUES('$fna','$lna','$user','$ema','&pas')";
		if(!mysqli_query($connect,$sql))
	{
		echo"Not inserted";
	}
	else
	{
		echo"Updated";
	}
//header("refresh:2; url=Signup.html");
?>
