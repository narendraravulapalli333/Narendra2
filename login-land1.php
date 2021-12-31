<?php
session_start();
$uname=$_POST['uname'];
$password=$_POST['password'];
//print_r($_POST);
$con=mysqli_connect("localhost","root","","login");

$q="SELECT * FROM login WHERE username='$uname' AND pwd='$password'";

$result=mysqli_query($con,$q);

if(mysqli_num_rows($result)>0)
{
//echo"Login Success";
$row=mysqli_fetch_assoc($result);
$_SESSION['id']=$row['id'];
header('location: admin/index.php');
//echo"<script> window.location.href='admin/index.php';</script>";
}
else
{
echo"Login Failed";
}
?>