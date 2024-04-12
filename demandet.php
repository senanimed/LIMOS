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


 
    if(isset($_POST['selectgrade'])){
        $id_util=$_SESSION['id'];
        $id_equipe=$_SESSION['id_equipe'];
        $grade=$_POST['grade'];
        //save in table of utilisateur demande de etre un mombre de team
        $query_add_utilequipe= "INSERT INTO demande_participation_equipe  VALUES ('', '$id_util', '$id_equipe','$grade');";
        mysqli_query($conn, $query_add_utilequipe);
        echo '<script type="text/javascript">';
        echo 'alert("Votre demande a été enregistrée avec succès!");';
        echo 'window.location.href = "team.php";'; // Notez le point-virgule à la fin
        echo '</script>';
        
      
    }
   ?>




    <div class="container">

       <div class="box">
        <div class="header">
            <header><img src="assets\images\limos.jpg" alt=""></header>
            <p>Choisissez votre grade :</p>
        </div>
        <div class="input-box">
        <form  method="post" >
       
        <select name="grade">
    <option value="Maître Assistant Classe B">Maître Assistant Classe B</option>
    <option value="Maître Assistant Classe A">Maître Assistant Classe A</option>
    <option value="Maître de Conférences Classe B">Maître de Conférences Classe B</option>
    <option value="Maître de Conférences Classe A">Maître de Conférences Classe A</option>
    <option value="Professeur">Professeur</option>
</select>

        </div>
        <input type="submit" name="selectgrade" value="Sélectionner " >
        </div>
    </form>
    </div>
    

</body>





</html>
