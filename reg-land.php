<html><head>
    <style>
        body{
            background-image:url("3.JPG");
            background-repeat: no-repeat;
            background-size:cover;
            
        }
		h1{
			color:red;
		}
	</style>
	<body>
<?php
$con=mysqli_connect("localhost","root","","login");

$username=$_POST['uname'];
$password=$_POST['password'];

$sql="INSERT INTO login (username,pwd) VALUES ('$username','$password')";
if(mysqli_query($con,$sql))
	{
	echo"<h1><center>Successfully Registered</center><h1>";
	
	
}
else
{
	
	echo"Something went wrong";
}
?>

</body>
</html>