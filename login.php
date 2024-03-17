<?php
session_start();
error_reporting(0);
include("connection.php");
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    if(!empty($name && $pass))
    {
        $query="select * from userdata where name = '$name' limit 1";
        $result=mysqli_query($con,$query);
        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $udata=mysqli_fetch_assoc($result);
               
                if($udata['pass']==$pass)
                {
                    $fetch_id="select name from userdata where name='$name'";
                    $r=mysqli_query($con,$fetch_id);
                  $row= mysqli_fetch_assoc($r);
                  $_SESSION['myuser'] =$row['name'];
                    header("location:dashboard.php");
                    die;
                }
            }
            
        }
        echo "<script type='text/javascript'> alert('wrong user')</script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('wrong')</script>";
    }
 }
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
#login-box{
  height: 600px;
  width: 100%;

  }
.login-form{
  padding: 20px;

}
form{
    background: #d2dee9;
  height: 300px;
  width: 300px;
  margin: 50px;
  text-align: center;
  padding-top: 50px;
  border-radius: 30px;
  margin: 50px;
  margin-left: 500px;
}   
input{
  height: 30px;
  width: 240px;
  padding: 1px;
  background: #faecec;
  border: none;
}
#login-box .login-form .regitration a {
  font-size: 20px;
  background: orange;
  /* border-radius: 15px; */
  text-decoration: none;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  padding: 10px;
  /* margin-top: 100px; */
  transition: 1s ease;
  color: black;
}
#login-box .login-form .regitration a:hover{
  background-color: #d681c8;
}
#login-btn{
  height: 40px;
  width: 200px;
  background:teal;
  color: white;
  border:none;
  font-size: 23px;
  font-family:cursive;
  /* border-radius: 15px; */
  transition: 1s ease;
  margin-bottom: 30px;
}
#login-btn:hover
{
  background: orange;
}
#cancel{
    height: 40px;
  width: 200px;
  color: white;
  border:none;
  font-size: 23px;
  font-family:cursive;
    background-color: brown;
}
    </style>
</head>
<body>
    <section id="login-box">
    <div class="login-form">
        <form action="" method="post" autocomplete="off">
            <input type="text" name="name" id="name" placeholder="username" ><br><br>
            <input type="password" name="pass" id="pass" placeholder="password"><br><br><br>
            <input type="submit" value="Login" id="login-btn"><br>
            <input type="reset" value="cancel" id="cancel">
    
        </form>
    </div>   
    </section>
</body>
</html>