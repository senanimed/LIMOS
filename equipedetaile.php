<?php

require 'connection.php';
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Free University Website Template | Smarteyeapps.com</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body>
    <?php
$query_get_team = "SELECT * FROM equipe WHERE id= '{$_SESSION['id_equipe']}'";
$resu = mysqli_query($conn,$query_get_team);
$team=mysqli_fetch_array($resu);
?>
<?php
if(isset($_POST['inscrit'])){
    if(empty($_SESSION["email"])){
        echo '<script type="text/javascript">';
        echo 'alert("login first!");';
        echo 'window.location.href = "login.php";'; 
        echo '</script>';
    }else{
        $query_utili= "SELECT * FROM utilisateur_ins WHERE email = '{$_SESSION['email']}' ";
        $result = mysqli_query($conn,$query_utili);
        $row = mysqli_fetch_array($result);
        if($row['work']=='student'){
            echo '<script type="text/javascript">';
            echo 'alert("errure! not allow for studients");';
            echo 'window.location.href = "index.php";'; 
            echo '</script>';
        }else{
            header("location:demandet.php");
            

        }
    }
}
        ?>
<header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 left-item">
                        <ul>
                            <li><i class="fas fa-envelope-square"></i> Limoselaboratory@smartypes.com</li>
                            <li><i class="fas fa-phone-square"></i> +213 982308080</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block right-item">
                        <ul>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li> <a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 nav-img">
                        <img src="assets\images\photo_2024-04-02_23-11-52.jpg" alt="">
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about_us.php">About Us</a></li>
                            <li><a href="cources.php">Cources</a></li>
                            <li><a href="event.php">Event</a></li>
                            <li><a href="team.php">teams</a></li>
                            <li><a href="contact_us.php">Contact Us</a></li>
                            <div>
                                <p><a href="singup.php">SIGN UP</a>&nbsp;</p>
                                &nbsp;<p><a href="login.php">SIGN IN</a></p>
                            </div>
                            
                                
            
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </header>
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2><?php echo $team['nom'] ?></h2>
            </div>
        </div>
    </div>
    <div class= "container">
        <h6><?php echo $team['description']?></h6>
    </div>
    <form method="post">
    
    
    <div  style="text-align: center;">
    <input type="submit" name="inscrit" value="joining">
</div>

    </form>
    <?php
    $query_team = "SELECT * FROM membre WHERE id_equipe='" . $_SESSION['id_equipe'] . "'";    
    $res = mysqli_query($conn,$query_team);
    ?>
    <div class="our-blog bb3 pc2">
    <div class="container">
    <div class="session-title row">
            <h3>team membres</h3>
        </div>
        <div class="row-blog row">
            <div class="col-md-10 vbf mx-auto">
            <?php while ($ligne = mysqli_fetch_array($res)) {?> 
            <form method="post">
                
                <div class="blog-card row">
                        <input type="hidden" name="id" value ="<?php echo $ligne['id'] ?>">
                        <div class="col-2">
                           <img src="assets\images\profil.png" alt="">
                           
                        </div>
                        <div class="col-7 setv">
                            <ul>
                            <p><?php echo $ligne['nom'];?></p>
                            <p><?php echo $ligne['prenom'];?></p>
                            <p><?php echo $ligne['date_naissance'];?></p>
                            <p><?php echo $ligne['genre'];?></p>
                            <p><?php echo $ligne['Email'];?></p>
                            <p><?php echo $ligne['grade'];?></p>

                            </ul>
            </div>
                    </div>
                    
                    </form>
                    <?php  }  ?>
</body>

