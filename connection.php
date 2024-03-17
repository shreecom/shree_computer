<?php
    $servername="localhost";
    $username ="root";
    $password="";
    $dbname= "register";
    $con=mysqli_connect($servername,$username,$password,$dbname) or die(mysql_error());
    if($con){

    }
    else{
        echo"not connected";
    }
    ?>
   