

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to LNCT</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html,body{
            width: 100%;
            height: 100%;
        }
        .container{
            max-width: 50%;
            margin: auto;
            padding: 25px;
            
        }
        .container h1,p{
            text-align: center;
        }
        input{
            width: 80%;
            margin: 11px 0px;
            font-size: 15px;
            padding: 7px;
            border: 2px solid black;
            border-radius: 6px;
            outline: none;
        }
        .link{
            margin-left: 150px;
        }
        form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .btn{
            color: white;
            background-color: aqua;
            padding: 8px 12px;
            font-size: 20px;
            border: 2px solid white;
            border-radius: 14px;
            cursor: pointer;
        }
        .bg{
            width: 100%;
            position: absolute;
            z-index: -1;
            opacity: .8;
        }
        
    </style>
</head>
<body>
    <img class="bg" src="itimage.jpg" alt="LNCT">
    <div class="container">
        <h1>Welcome to LNCT</h1>
        <p>Enter your details</p>
        
        <form method="post">
            <input type="text" name="na" id="name" placeholder="Enter your name" required>
            <input type="text" name="ag" id="age" placeholder="Enter your age" required>
           
            <input type="text" name="ge" id="gender" placeholder="Enter your gender" required>
            <input type="email" name="em" id="email" placeholder="Enter your email" required>
            <input type="number" name="ph" id="phone" placeholder="Enter your number" required>
            <input type="password" name="pass" id="password" placeholder="Enter your password" required>
            <input type="password" name="conpass" id="conpasswprd" placeholder="Confirm your password" required>
            
            <input type="submit" value="REGISTER" name ="sb">
            <p>Already a user? <a href="login.php">Log in</a></p>
            
        </form>
    </div>
    
<?php
error_reporting(0);
$con=mysqli_connect('localhost','root','','record2');
if(isset($_POST['sb']))
{
    $name=$_POST['na'];
    $age=$_POST['ag'];
    $gender=$_POST['ge'];
    $email=$_POST['em'];
    $phone=$_POST['ph'];
    $password=$_POST['pass'];
    $conpassword=$_POST['conpass'];
    if($password == $conpassword){
        $query = "INSERT INTO register(NAME,AGE,GENDER,EMAIL,PHONE,PASSWORD,CONPASSWORD) VALUES('$name','$age','$gender','$email','$phone','$password','$conpassword')";
        $run = mysqli_query($con,$query);
        echo "<script> alert ('REGISTRATION SUCCESSFUL');</script>";
        header('location:login.php');
    }
    else if($password != $conpassword){
        
        echo "<script> alert ('PASSWORD DOES NOT MATCH');</script>";
        exit();
    }
    
    //$query = "INSERT INTO register(NAME,AGE,GENDER,EMAIL,PHONE,PASSWORD,CONPASSWORD) VALUES('$name','$age','$gender','$email','$phone','$password','$conpassword')";
    //$run=mysqli_query($con,$query);
    //header('location:login.php');
    
    
}
?>
   
</body>
</html>

