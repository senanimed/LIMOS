<?php
session_start();
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>update</title>
</head>
<body>
<?php
if(empty($_SESSION["email"])){
        echo '<script type="text/javascript">';
        echo 'alert("login first!");';
        echo 'window.location.href = "login.php";'; 
        echo '</script>';
    }else{
    $mail = $_SESSION['email'];
    $query_get= "SELECT * FROM utilisateur_ins where email = '$mail'" ;
    $result = mysqli_query($conn,$query_get);
    $old_data = mysqli_fetch_array($result);
    
    if(isset($_POST['up_user'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $date = $_POST['datenai'];
        $ph = $_POST['ph'];
        $mail = $_POST['mail'];
        $password = $_POST['pass'];
       
        $query_update_user = "UPDATE utilisateur_ins 
        SET fname = '$fname', 
            lname = '$lname', 
            `date de naissance` = '$date', 
            ph = '$ph', 
            email = '$mail', 
            username = '$username', 
            password = '$password' 
        WHERE id = '$id'";

        mysqli_query($conn , $query_update_user);
        
       header('location:logout.php');

    }
    

    
}
    
    ?>
 <div class="container">
<form  method="post">
       <div class="boxi">
        <div class="header">
            <header><img src="assets\images\limos.jpg" alt=""></header>
            <p>UPDATE YOUR INFORMATIONS</p>
        </div>
        <input type="hidden" name= "id" value ="<?php echo $old_data['id'] ?>">
        <div class="input-box">
            <label for=user>Username</label>
            <input type="text" name= "username" value ="<?php echo $old_data['username'] ?>">
            
        </div>
        <div class="input-box">
            <label for="fname">First Name</label>
            <input type="text"  name="fname" value ="<?php echo $old_data['fname'] ?>">
            
        </div>
        <div class="input-box">
            <label for="lname">Last Name</label>
            <input type="text"  name="lname"  value ="<?php echo $old_data['lname'] ?>" >
            
        </div>
        <div class="input-box">
            <label for="ph">Phone Number</label>
            <input type="tel" name="ph" value ="<?php echo $old_data['ph'] ?>" >
            
        </div>
        <div class="input-box">
            <label for="date">birth date</label>
            <input type="date" name="datenai"value ="<?php echo $old_data['date de naissance'] ?>" >
            
        </div>
        <div>
            <label for="bn">Who Are You ?</label>
        </div>
       
      

        <div class="input-box">
            <label for="mail">E-Mail</label>
            <input type="email"  name="mail" value ="<?php echo $old_data['email'] ?>" >
            <i class="bx bx-envelope"></i>
        </div>
        <div class="input-box">
            <label for="pass">Password</label>
            <input type="password" name="pass" value ="<?php echo $old_data['password'] ?>">
            <i class="bx bx-lock"></i>
        </div>
        
        <div class="input-box">
            <input type="submit" name="up_user" value="UPDATE">
        </div>
    </form>
    </div>




</body>
