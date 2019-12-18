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
	$name=$_POST['n'];
	$subject=$_POST['sub'];
	$semester=$_POST['sem'];
	$comments=$_POST['com'];
	$sql="INSERT INTO feedback(name,subject,semester,comments)VALUES('$name','$subject','$semester','$comments')";
		if(!mysqli_query($connect,$sql))
	{
		echo"Not inserted";
	}
	else
	{
		echo"Updated";
	}
	header("refresh:2; url=f.html");
?>
