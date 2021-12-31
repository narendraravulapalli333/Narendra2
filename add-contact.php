<?php
include 'auth.php';
include 'menu.php';
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$branch=$_POST['branch'];
$attendance=$_POST['attendance'];
$feestatus=$_POST['feestatus'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$id=$_SESSION['id'];
$con=mysqli_connect("localhost","root","","login");
$sql="INSERT INTO cards (id,name,rollno,email,mobile,branch,attendance,feestatus) VALUES ('$id','$name','$rollno','$email','$mobile','$branch','$attendance','$feestatus')";

if(mysqli_query($con,$sql))
{
echo "<h1><center> Contact added successfully </center> </h1>";
}
else
{
echo "<h1> Something Went wrong </h1>";
}

?>
<html>
    <head>
        <style>
            #id1{
                background-image:url('5.jpg');
            }
        </style>
    </head>
</html>