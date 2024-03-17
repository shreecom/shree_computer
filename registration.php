
 <?php
 session_start();
 include("connection.php");
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
    $n= $_POST['name'];
    $p= $_POST['pass'];
    if(!empty($n) && !empty($p))
    {
        $QUERY= "insert into userdata (name,pass) values ('$n','$p')";
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
    <title>registration</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #registrationBox{
            text-align: center;
            align-items: center;
            padding: 30px;
            height: 593px;
            background-image: url(https://i.pinimg.com/736x/87/b6/02/87b6028d4a2eea522501577ff65b38d6.jpg);   
            background-size: contain;
        }
        .registration form{
            background: rgb(4, 109, 122);
            align-items: center;
            height: 300px;
            width:300px;
            margin-top: 50px;
            padding: 15px;sapi_windows_cp_conv
        }
        h2{
            font-size: 33px;
            color: rgb(112, 14, 14);
        }
        .registration form input{
          padding:4px;
            width: 255px;
            height: 35px;
            border:none;
        }
        .registration #submit{
            background: orange;
            font-size: 25px;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            transition:1s ease;  
        }
        .registration #submit:hover{
            background:cyan;
            cursor: pointer;
        }
        .registration #cancel{
            background: rgb(250, 106, 195);
            font-size: 25px;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            transition:1s ease; 
        }
        .registration #cancel:hover{
            background:cyan;
            cursor: pointer;
        }
        .design{
            background: rgb(68, 154, 175);
            height: 70px;
            width: 310px;
            border-top-left-radius: 95%;
            position: relative;
            bottom: 75px;
        }
    </style>
</head>
<body>
<div id="registrationBox">
    <div class="rname"><h2>REGISTRATION</h2></div>
    
    <center>
    <div class="registration">
    <form action="" method="post" autocomplete="off">
    <input type="text" name="name" id="name" placeholder="name or gmail"><br><br>
    <input type="text" name="pass" id="pass" placeholder="password"><br><br>
    <input type="submit" value="submit" id="submit"><br><br>
    <input type="button" value="cancel" id="cancel">
    </form>
</div>
<div class="design"></div>
</head>
    </body>
    <!-- <form action="" method="POST">
    username <input type="text" name="name" id="">
    pass <input type="password" name="pass" id="">
    <input type="submit" value="submit">
    </form>
</body> -->
</html>
