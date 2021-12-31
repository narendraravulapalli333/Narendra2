<?php
include 'auth.php';
include 'menu.php';
$slno=$_POST['slno'];
$name=$_POST['nam'];
$rollno=$_POST['rollno'];
$branch=$_POST['branch'];
$attendance=$_POST['attendance'];
$feestatus=$_POST['feestatus'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$id=$_SESSION['id'];
$con=mysqli_connect("localhost","root","","login");
$sql="UPDATE  cards SET name='$name',mobile='$mobile',email='$email',rollno='$rollno',branch='$branch',attendance='$attendance',feestatus='$feestatus' WHERE id='$id' AND slno='$slno'";

if(mysqli_query($con,$sql))
{
echo " Contact Updated successfully";
}
else
{
echo "Something Went wrong";
}

?>