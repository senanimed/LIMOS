<?php 
session_start();
require 'connection.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

   <?php
   if(isset($_POST['input-submit'])){
    $mail = $_POST['mail'];
    $password = $_POST['pass'];

    $query_login= "SELECT * FROM utilisateur_ins WHERE email = '$mail' AND password = '$password'";
    $result = mysqli_query($conn,$query_login);
    $row = mysqli_fetch_array($result);
    if(is_array($row)){
        $_SESSION["email"]=$row['email'];
        $_SESSION["password"]=$row['password'];
        $_SESSION["id"]=$row['id'];

    }else{
        echo '<script type="text/javascript">';
        echo 'alert("Invalid email or password!");';
        echo 'window.location.href = "login.php";'; // Notez le point-virgule à la fin
        echo '</script>';
    }        
   }
    if(isset($_SESSION["email"])){
        header("location:index.php");

    }
   
   
   ?>
      
    <div class="container">
<form  method="post">
       <div class="box">
        <div class="header">
            <header><img src="assets\images\limos.jpg" alt=""></header>
            <p>Log In to LIMOSE</p>
        </div>
        <div class="input-box">
            <label for="mail">E-Mail</label>
            <input type="email"  name="mail" >
            <i class="bx bx-envelope"></i>
        </div>
        <div class="input-box">
            <label for="pass">Password</label>
            <input type="password" name="pass" >
            <i class="bx bx-lock"></i>
        </div>
        <div class="input-box">
            <input type="submit" name="input-submit" value="log in">
        </div>
        <div class="bottom">
            <span><a href="singup.php">Sign Up</a></span>
            <span><a href="#">Forgot Password?</a></span>
        </div>
    

       </div>
       <div class="wrapper"></div>
    </div>
    </form>
</body>
</html>