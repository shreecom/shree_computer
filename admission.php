
<?php
include("connection.php");
session_start();
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $n= $_POST['uname'];
   $fname= $_POST['fname'];
   $dob= $_POST['dob'];
   $gender= $_POST['gender'];
   $address= $_POST['address'];
   $tal= $_POST['tal'];
   $dist= $_POST['dist'];
   $state= $_POST['state'];
   $mob= $_POST['mob'];
   $education= $_POST['education'];
   $courses=$_POST['courses'];
   if(!empty($n) && !empty($fname))
   {
       $QUERY= "insert into admision values ('$n','$fname','$dob','$gender','$address','$tal','$dist','$state','$mob','$education','$courses')";
       mysqli_query($con,$QUERY);
       echo "<script type='text/javascript'> alert('successfully registration')</script>";
   }
   else{
       echo "<script type='text/javascript'> alert('please enterd valid details')</script>";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <style>
    
  </style>
</head>
<body>
    <div id="formBox">
    <h2>ADMISSION FORM</h2>
    <div class="admision">
        <center>
        <form action="" method="POST" autocomplete="off">
        <table>
        <tr>
                <td> User Name</td>
                <td><input type="text" name="uname" id="uname"></td>
            </tr>
            <tr>
                <td> Full Name</td>
                <td><input type="text" name="fname" id="fname"></td>
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
        <input type="reset" value="Cancel" id="cancel">
    </form>
</center>
</div>
</div>
</body>
</html>