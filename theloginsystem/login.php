<?php
session_start();

include("connections.php");
include("functions.php");
 

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //SOMETHING WAS POSTED
    
    $user_name = $_POST['user_name'];
    $password =  $_POST['password'];


    if(!empty($user_name) && !is_numeric($user_name) && !empty($password))
    {
        //read from database
        $query = "select * from users where user_name  = '$user_name' limit 1";
    
       $result =  mysqli_query($con, $query);

       if($result)
       {
        if($result && mysqli_num_rows($result) > 0)
           {
              $user_data = mysqli_fetch_assoc($result);
              
              if($user_data['password'] == $password)
              {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
              }
              else
              {
                  echo "enter the right password";
                  
              }
           }

       }
    }
    else{
        echo "<p class=\"mycssquote\">Enter correct username or password.</p>";
    }
    
}
?>
<html lang="en">
<head>y
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            order: none;
        }
       #box{
            background-color: rga(3,240,240);
            opacity: 50%;
             margin: auto;
             width: 300px;
             padding: 20px;
             box-shadow: 0 0 1rem 0 rgba(0,0,0.2);
       }
       #box.p{
        margin: 0px;
       padding: 0px;
       font-weight: bold;
       }
       body{
        background-image: url(yourname.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
        text="white";
       }
       #echo{
                color:white;
                text-align: center;
                size: 50x;
            }
      .mycssquote{
        text-size: 50px;
        color: white;
      }
    


    </style>



    <div id="box">


<form method="post">
    <p>
    <div>Login</div><br><br>
    <input id="text" type="user_name" name="user_name"  placeholder="Enter username.... " ><br><br>
    <input id="text" type="password" name="password"     placeholder="Enter password.... "  ><br><br>
    <input id="button" type="submit" value="login" ><br><br>


    <a href="signup.php">click to Signup</a><br>
    </p>
    


</form>






    </div>
</body>
</html>