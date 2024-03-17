<?php
session_start();
include("connection.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $n= $_POST['name'];
   $sname= $_POST['sname'];
   $std= $_POST['std'];
   $course=$_POST['course'];
   if(!empty($n) && !empty($sname))
   {
       $QUERY= "insert into admision values ('$n','$sname','$std','$course')";
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
    <title>admision form</title>
</head>
<body>
    <div id="admision-form">
        <h2>ADMISION</h2>
        <form action="" method="POST">
            username <input type="text" name="name" id="">
            student name <input type="text" name="sname" id="">
            std <input type="text" name="std" id="">
            course : <select name="course" id="">
                <option value="c">c</option>
                <option value="cpp">c++</option>
            </select>
            <input type="submit" value="submit">
        </form>
    </div>


</body>
</html>