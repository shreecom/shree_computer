<?php
include("connection.php");
error_reporting(0);
session_start();

$query= "select * from admision where uname='$_SESSION[myuser]'";
$alldata=mysqli_query($con,$query)or die("failed");
$row=mysqli_fetch_assoc($alldata);      

 $fname= $_GET['fname'];
$dob= $_GET['dob'];
$gender= $_GET['gender'];
$address= $_GET['address'];
$tal= $_GET['tal'];
$dist= $_GET['dist'];
$state= $_GET['state'];
$mob= $_GET['mob'];
$education=$_GET['education'];
$courses=$_GET['courses'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div id="formBox">
    <h2>ADMISSION FORM</h2>
    <div class="admision">
        <center>
        <form action="" method="GET">
        <table>
        
            <tr>
                <td> Full Name</td>
                <td><input type="text" value= "<?php  $query= "select * from admision where uname='$_SESSION[myuser]'";
             $alldata=mysqli_query($con,$query)or die("failed");
             $row=mysqli_fetch_assoc($alldata) ;
             echo " $row[fname]" ?>
             " name="fname" id="fname"></td>
            </tr>
            <tr>
                <td>Date Of Birth  </td>
                <td><input type="date" name="dob" id="dob"> </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td> Male <input type="radio" name="gender" value="male" id="gender">
                    Female <input type="radio" name="gender" value="female" id="gender">
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" id="add" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Tal</td>
                <td><input type="text" name="tal" id="tal"></td>
            </tr>
            <tr>
                <td>Dist</td>
                <td> <input type="text" name="dist" id="dist"></td>
            </tr>
            <tr>
                <td>State</td>
                <td><input type="text" name="state" id="state"></td>
            </tr>
            <tr>
                <td>Mob</td>
                <td><input type="number" name="mob" id="mob"></td>
            </tr>
            <tr>
                <td>Education </td>
                <td><input type="text" name="education" id="edu"></td>
            </tr>
            <tr>
                <td>courses</td>
                <td><select name="courses" id="cours">
                    <option value="MSCIT">MSCIT</option>
                    <option value="c">C</option>
                    <option value="c++">C++</option>
                    <option value="java">Java</option>
                    <option value="java Adv">Java Adv.</option>
                    <option value="python">Python</option>
                    <option value="web">Web Designing</option>
                    <option value="graphics">Graphics Designing</option>
                    <option value="excel">Adv. Excel</option>
                    <option value="tally">Tally ERP 9 with GST</option>
                    <option value="tallyp">Tally Prime with GST </option>
                    <option value="autocad">Autocad 2D</option>
                    <option value="autocad3d">Autocad 2D & 3D</option>
                </select</td>
            </tr>
        </table>
        <input type="submit" value="Submit" id="submit">
</body>
</html>