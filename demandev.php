<?php

require 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    
    <title>demande de participer d'evenement </title>
</head>

<body> 
 
   <?php  


 
    if(isset($_POST['select'])){
        $id_util=$_SESSION['id'];
        $id_event=$_SESSION['id_event'];
        //get university id
       $query_get_univid = "SELECT * FROM universites WHERE nom_universite	 = '{$_POST['universite']}'";

        $res = mysqli_query($conn, $query_get_univid);
        $row=mysqli_fetch_assoc($res);
        $id_univ=$row['id'];
        //save in table of utilisateur demande de participer
        $query_add_utilevent= "INSERT INTO demande_participation_event  VALUES ('', '$id_util', '$id_univ','$id_event');";
        mysqli_query($conn, $query_add_utilevent);
        echo '<script type="text/javascript">';
        echo 'alert("Votre demande a été enregistrée avec succès!");';
        echo 'window.location.href = "event.php";'; // Notez le point-virgule à la fin
        echo '</script>';
        
      
    }
   ?>




    <div class="container">

       <div class="box">
        <div class="header">
            <header><img src="assets\images\limos.jpg" alt=""></header>
            <p>Choisissez votre université :</p>
        </div>
        <div class="input-box">
        <form  method="post" >
       
        <select name="universite">
            <?php
            // Requête pour récupérer les noms des universités depuis la table
            $query = "SELECT nom_universite FROM universites";
            $result = mysqli_query($conn, $query);

            // Boucle pour afficher chaque nom d'université dans la liste déroulante
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['nom_universite'] . "'>" . $row['nom_universite'] . "</option>";
            }
            ?>
        </select>
        </div>
        <input type="submit" name="select" value="Sélectionner " >
        </div>
    </form>
    </div>
    

</body>





</html>
