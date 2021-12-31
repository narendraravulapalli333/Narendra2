<?php
include 'auth.php';
include 'menu.php';

$slno=$_GET['slno'];
$con=mysqli_connect("localhost","root","","login");

$q="SELECT * FROM cards WHERE slno='$slno'";
$res=mysqli_query($con,$q);
$k=mysqli_fetch_assoc($res);
?>
<form method="POST" action="update-contact.php">
<input type="hidden" name="slno" value="<?php echo"".$k['slno'];?>"/>
<input type="text" placeholder="Enter Name" name="nam" value="<?php echo"".$k['name'];?>" /><br/>
<input type="text" placeholder="Enter Roll No." name="rollno" value="<?php echo"".$k['rollno'];?>"/><br/>
<input type="email" placeholder="Enter Email" name="email" value="<?php echo"".$k['email'];?>"/><br/>
<input type="text" placeholder="Enter Mobile No." name="mobile" value="<?php echo"".$k['mobile'];?>"/><br/>
<input type="text" placeholder="Enter Branch" name="branch" value="<?php echo"".$k['branch'];?>"/><br/>
<input type="text" placeholder="Enter Attendance " name="attendance" value="<?php echo"".$k['attendance'];?>"/><br/>
<input type="text" placeholder="Enter Feestatus" name="feestatus" value="<?php echo"".$k['feestatus'];?>"/><br/>
<input type="Submit" />


</form>