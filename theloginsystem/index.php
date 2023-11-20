<?php
session_start();
 
   $_SESSION;

include("connections.php");
include("functions.php");
 

    $user_data = check_login($con);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-image:url(eren.jpg);
            margin: 0;
            background-size: cover;
            text-align:center;
        }
        p{
            color:"white";
        }
        h1{
            font-family:'Georgia, 'Times New Roman', 'Times, serif;
        color: black;
        }
        h2{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
            color: black;
            font-weight: lighter;

        }
        a{
            color:white;
            height: 15px;
            float:left;

            border: solid thin #aaa;
            display:block;
            text-align: center;
            padding: 14px 16px;
            text-decoration:none;
            background:black;
            overflow: hidden;
            border-radius: 10px;
        }
        h3{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
            color: white;}
        ul{
            list-style-type: none;
            margin:0;
            padding: 0;
            position: fixed;
            top: 0;
            width: 100%;
         }
         li{
            float: left;
         }
         a{
           display: inline;
         }
         .active{
            background-color: black;
         }
         a:hover{
            background-color: rgb(96,96,221);
         }
         .info{
            border: solid thin #aaaaaa;
             border-radius:30px;
             background-color: grey;
             opacity: 60%;
             position: relative;
             padding: 50px;
             object-position:center;
    
         }

    </style>
   <br><br><br><br>
    <div class="info">
       <h1 >Welcome.</h1>
       <h2>
       fellow weeb,</h2>
       <h2 >
       After his hometown is destroyed and his mother is killed, young Eren Jaeger vows to cleanse the earth of the giant humanoid Titans that have brought humanity to the brink of extinction.
       <<br> Humans are nearly exterminated by giant creatures called Titans.
    </h2>
        <br><br>
        
    </div>


    <nav>
        <div class="wrapper">
            <ul>
              <li> <a class="active" href="index.php">Home</a></li>
             <li> <a href="blogs.html">About us</a></li>
             <li>  <a href="contactus.html">Reach out</a></li>
             <li><a href="logout.php">Logout</a> </li>
    </ul>
    </div>
    </nav>


    <br><br><br>
</body>
</html>