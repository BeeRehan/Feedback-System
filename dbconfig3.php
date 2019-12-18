<html>
<head>
<link href="style.css" rel="stylesheet">
<style>
header {
  background:url('heder1.png');
  background-size:cover;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}
  float: left;{
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}
center{
  background: url('headerbg.jpg');
  background-color: none;
  padding: 200px;
  text-align: center;
  color: black;
}
footer{
  background-color: skyblue;
  padding: 40px;
  text-align: center;
  color: white;
}
        .summary {
    font-size: 18:
    
}
</style>
<title>Admin</title>
</head>
<body>
  <header>
    <ul>     
        <li><a href="Mysite.html">Home</a></li>
    <li><a>Feedback</a>
        <ul>
            <li><a href="Login.html">IT</a></li>
            <li><a href="elogin.html">ECE</a></li>
            <li><a href="cslogin.html">CSE</a></li>
            <li><a href="eelogin.html">EEE</a></li>
            <li><a href="clogin.html">Civil</a></li>
            <li><a href="mlogin.html">Mech</a></li>
        </ul>
     </li>
    <li><a href="ad.html">Admin</a></li>
    <li><a href="fac.html">Faculty</a></li>
    <li><a href="Signup.html">Registration</a></li>
    <li><a href="About.html">About us</a></li>
    </ul>
    </header>
<center>
<?php
$connect=mysqli_connect("localhost","root","","feed");
	if(!$connect)
	{
		echo 'Not connected to server';
	}
	
	$sql="SELECT * FROM feedback ";
	$res=mysqli_query($connect,$sql);
	if(mysqli_num_rows($res)>0)
	{
		while($row=mysqli_fetch_array($res))
		{
			
			echo $row[1]," | ",$row[2]," | ",$row[3]," | ",$row[4];
			echo "<br>";
			
			echo "<br>";
		}
	}
	mysqli_close($connect);	
?>
</center>
<footer>
        <p> All rights are reserved by Bee Rehan&COPY;</p>
    </footer>

</body>
</html>