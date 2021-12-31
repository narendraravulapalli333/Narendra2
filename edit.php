<html>
    <head>
        <style>
            table{
                text-align:center;
                align:center;
                margin-left:auto;
                margin-right:auto;
            }
        </style>
    </head>
    <body>
<?php
include 'auth.php';
include 'menu.php';

$id=$_SESSION['id'];
$con=mysqli_connect("localhost","root","","login");

$q="SELECT * FROM cards WHERE id='$id'";
$res=mysqli_query($con,$q);

echo"<table border=1>";
echo"<th>Name</th><th> Roll no</th><th> Email</th><th> Mobile</th><th> Branch</th><th> Attendance</th><th> Feestatus</th>";
while($k=mysqli_fetch_assoc($res))
{
$slno=$k['slno'];
echo"<tr>";
echo"<td>".$k['name']."</td>";
echo"<td>".$k['rollno']."</td>";
echo"<td>".$k['email']."</td>";
echo"<td>".$k['mobile']."</td>";
echo"<td>".$k['branch']."</td>";
echo"<td>".$k['attendance']."</td>";
echo"<td>".$k['feestatus']."</td>";
echo"<td><a href=\"update.php?slno=$slno\">Edit</a></td>";
echo"</tr>";
}

?>

</body>
</html>