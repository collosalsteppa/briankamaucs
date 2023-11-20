<?php
session_start ();

include("connections.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //SOMETHING WAS POSTED
    $user_email = $_POST['user_email'];
    $user_name = $_POST['user_name'];
    $password =  $_POST['password'];


    if(!empty($user_name) && !is_numeric($user_name) && !empty($password))
    {
        //save to database
        $userid = random_num(20);
        $query = "insert into users(user_id,user_email,user_name,password) values ('$user_id','$user_email','$user_name','$password')";
    
        mysqli_query($con, $query);

        header("Location:login.php");
        die;
    }else{
        echo "Dont play with me ffs!";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <style type="text/css">
#text{

height: 25px;
border-radius: 5px;
padding: 4px;
border: solid thin #aaa;
}
#button{
padding: 10px;
width: 100px;
color: white;
background-color: lightblue;
border: none;
}
#box{
background-color: rga(3,240,240);
opacity: 70%;
margin: auto;
width: 300px;
padding: 20px;
box-shadow: 0 0 1rem 0 rgba(0,0,0.2);
}
body{
    background-image: url(yourname.jpg);
    background-size: cover;
}
a{
    color: white;
}
#box.p{
    margin: 0px;
    padding: 0px;
    font-weight: bold;
}
    </style>
        
<div id="box">


<form method="post">
     <p>
    <div style="font-style:arial; font: size 20px; margin: 10px;color:white ">signup</div><br><br>
    <input id="text" type="user_email" name="user_email"  placeholder="Enter email.."><br><br>
    <input id="text" type="User_name" name="user_name"  placeholder="Enter username.."><br><br>
    <input id="text" type="password" name="password"  placeholder="Enter password..."><br><br>
    <input id="button"  type="submit" value="signup"><br><br>

    <br><br>
    <a href="login.php">Already have an account?</a>
    </p>
</form>






    </div>
</body>
</html>