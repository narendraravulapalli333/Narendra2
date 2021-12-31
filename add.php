<?php
include 'auth.php';
include 'menu.php';

?>
<html><head>
    <style>
        body{
            background-image:url("1.JPG");
            background-repeat: no-repeat;
            background-size:cover;
        }
        form{
            margin:70px;
            text-align:center;
            align:center;
        }
        .col{
            width: 30%;
            padding:8px;
            margin:5px;
            box-sizing:border-box;
        }
    </style>
</head>
<body><center>
<form method="POST" action="add-contact.php">

<input class="col" type="text" placeholder="Enter Name" name="name" /><br/>
<input class="col" type="text" placeholder="Enter Roll No." name="rollno" /><br/>
<input class="col" type="email" placeholder="Enter Email" name="email" /><br/>
<input class="col" type="text" placeholder="Enter Mobile No." name="mobile" /><br/>
<input class="col" type="text" placeholder="Enter Branch Name" name="branch" /><br/>
<input class="col" type="text" placeholder="Enter Attendance" name="attendance" /><br/>
<input class="col" type="text" placeholder="Enter feepaid status" name="feestatus" /><br/>
<input class="col" type="Submit" />


</form></center></body></html>