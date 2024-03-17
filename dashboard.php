 <?php
include("connection.php");
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="style.css"> 

    <style>
        body{
            background-image:url("https://th.bing.com/th/id/R.c734d16472409df22ecfca97d99d6691?rik=GkINbMARksKu7w&riu=http%3a%2f%2fwww.pixelstalk.net%2fwp-content%2fuploads%2f2016%2f08%2fDesktop-Best-And-Website-background-2560x1600.jpg&ehk=PRvGxoU3%2f8bAVsH7JxbdDMfS8ui%2byLZy1wPVmNY2Rzs%3d&risl=&pid=ImgRaw&r=0");
            background-size: cover;
            background-repeat: initial;
        }
        #dashName{
        display: flex;
        justify-content: space-between; 
        padding: 13px;
        color:yellow;
        }
        
        #dashName h2{
            padding: 10px;
            color: yellow;
            font-family: verdana;
        }
       #displayForm h1{
        color: pink;
        font-family: verdana;
        }
       
       #displayForm table{
        border: 1px solid black;
        background-color: #f3e8e8;
        }
        a{
            text-decoration: none;
            font-size: 24px;
            background:aquamarine;
            width: 70px;
            text-align:center;
            padding: 10px;
        }
        a:hover{
            color:black;
            background:pink;
        }
    </style>
</head>
<body>
    <div id="dashName"><h2>SHREE COMPUTERS ACADEMY </h2> <a href="index.php">logout</a></div>
    <div id="displayForm">
        <center>
    <h1>WELCOME
    <?php
        $query= "select * from admision where uname='$_SESSION[myuser]'";
        echo " $_SESSION[myuser]";
    ?>
    </h1>
    <br>
    <table>
        <tr><td>username</td>
         <?php
          $query= "select * from admision where uname='$_SESSION[myuser]'";
             $alldata=mysqli_query($con,$query)or die("failed");
             $row=mysqli_fetch_assoc($alldata);      
                echo "<td> $row[uname] </td>";
            ?>
        </tr>
        <tr><td>Full name</td>
         <?php
          $query= "select * from admision where uname='$_SESSION[myuser]'";
             $alldata=mysqli_query($con,$query)or die("failed");
             $row=mysqli_fetch_assoc($alldata);      
                echo "<td> $row[fname] </td>";
            ?>
        </tr>
        <tr><td>Date Of Birth</td>
         <?php
          $query= "select * from admision where uname='$_SESSION[myuser]'";
             $alldata=mysqli_query($con,$query)or die("failed");
             $row=mysqli_fetch_assoc($alldata);      
                echo "<td> $row[dob] </td>";
            ?>
        </tr>
        <tr><td>Gender</td>
         <?php
          $query= "select * from admision where uname='$_SESSION[myuser]'";
             $alldata=mysqli_query($con,$query)or die("failed");
             $row=mysqli_fetch_assoc($alldata);      
                echo "<td> $row[gender] </td>";
            ?>
        </tr>
        <tr><td>Address</td>
         <?php
          $query= "select * from admision where uname='$_SESSION[myuser]'";
             $alldata=mysqli_query($con,$query)or die("failed");
             $row=mysqli_fetch_assoc($alldata);      
                echo "<td> $row[address] </td>";
            ?>
        </tr>
        <tr><td>Mob</td>
         <?php
          $query= "select * from admision where uname='$_SESSION[myuser]'";
             $alldata=mysqli_query($con,$query)or die("failed");
             $row=mysqli_fetch_assoc($alldata);      
                echo "<td> $row[mob] </td>";
            ?>
        </tr>
        
        <tr><td>courses</td>
         <?php
         $query= "select * from admision where uname='$_SESSION[myuser]'";
    
     $result=mysqli_query($con,$query);

     if($result && mysqli_num_rows($result)>0)
     {
        while($row=mysqli_fetch_assoc($result))
        {
            echo "<td> $row[courses] </td>";
           
        }     
     }
    
?>
</table>
</center>
</div>
   
</body>
</html>