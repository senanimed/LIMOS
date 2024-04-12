
<?php 
require 'connection.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style1.css">
    <title>Sing Up</title>
</head>
<body>
    <?php
    if(isset($_POST['add_user'])){
        $username = $_POST['username'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $date = $_POST['datenai'];
        $ph = $_POST['ph'];
        $lang = $_POST['lang'];
        $mail = $_POST['mail'];
        $password = $_POST['pass'];
       
        $query_add_user = "INSERT INTO utilisateur_ins VALUES ('','$fname','$lname','$date','$ph','$lang','$mail','$username','$password')";

        mysqli_query($conn , $query_add_user);
        
       header('location:index.php');

    }
    
    
    
    
    ?>
      
    <div class="container">
<form  method="post">
       <div class="box">
        <div class="header">
            <header><img src="assets\images\limos.jpg" alt=""></header>
            <p>Sing Up to LIMOSE</p>
        </div>
        <div class="input-box">
            <label for=user>Username</label>
            <input type="text" name= "username" >
            
        </div>
        <div class="input-box">
            <label for="fname">First Name</label>
            <input type="text"  name="fname">
            
        </div>
        <div class="input-box">
            <label for="lname">Last Name</label>
            <input type="text"  name="lname" >
            
        </div>
        <div class="input-box">
            <label for="ph">Phone Number</label>
            <input type="tel" name="ph" >
            
        </div>
        <div class="input-box">
            <label for="date">birth date</label>
            <input type="date" name="datenai" >
            
        </div>
        <div>
            <label for="bn">Who Are You ?</label>
        </div>
       
        <div>
            
            <input id="box" type="radio" value="student" name="lang">
            <label for="student">Student</label>
        
            <input id="box" type="radio" value="extern" name="lang">
            <label for="extern">extern</label>
        
        
            <input id="box" type="radio" value="teacher" name="lang">
            <label for="teacher">Teacher</label>
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
        <div>
            <input id="bo" type="checkbox" value="bo" name="lan">
            <label for="bo">I Accept The <a href="#">Terms and Condition</a></label> 
        </div>
        <div class="input-box">
            <input type="submit" name="add_user" value="SIGN UP">
        </div>
    </form>
       <p>Already Have an Account ? <a href="login.php">Login Here</a></p>
    </div>

</body>
</html>