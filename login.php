<?php
$con=mysqli_connect('localhost','root','','record2');

if(isset($_POST['submit'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from register where EMAIL ='".$uname."' AND PASSWORD='".$password."' limit 1";

    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)==1){
        echo "<script>alert ('You Have Succesfully Logged In');</script>";
        header('location:frontpage.html');
    }
    else{
        echo "<script>alert ('You Have Entered Wrong Credentials')</script>";
        exit();
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <style>
        body{
        margin: 0 auto;
        background-image: url("itimage.jpg");
        background-repeat: no-repeat;
        background-size: cover;

        }
        .container{
        width: 300px;
        height: 150px;
        
        margin: 0 auto;
        background-color: orange;
        border-radius: 5px;
        margin-top: 160px;
        }

        .bg{
        width: 100%;
        position: absolute;
        z-index: -1;
        opacity: .8;
        }
        #inner1{
            margin-left: 20px;
            max-width: 80%;
            margin-top: 20px;
        }
        #inner2{
            margin-left: 20px;
            max-width: 80%;
            margin-top: 20px;
        }
        #inner3{
            margin-top: 20px;
            text-align: center;
        }
        

    </style>
</head>
<body>
    
    <div class="container">
        
        <form method="POST">
            <div id="inner1">
                <h3>Please fill your details</h3>
                <label for="email">Email:</label>
                <input type="email" name="username" id="email" placeholder="Enter your email">
            </div>
            <div id="inner2">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter your password">
                
            </div>
            <div id="inner3">
                <input type="submit" name="submit" value="Login">
            </div>
        </form>

    </div>
    <script>
    alert ('You have succesfully registered');
    </script>
    
</body>
</html>