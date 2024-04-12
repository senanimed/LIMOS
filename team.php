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
 if(isset($_POST['to_detail'])){
    
            $_SESSION['id_equipe']=$_POST['id'];
            header("location:equipedetaile.php");
            

        }
    
  ?>

    <!-- ################# Header Starts Here#######################--->
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
    

    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>teams of  Limose Laboratory</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> teams</li>
                </ul>
            </div>
        </div>
    </div>

     <!--  ************************* teams Starts Here ************************** -->
     <?php
    $query_equipe="SELECT * FROM equipe ";
    $resul = mysqli_query($conn,$query_equipe);

?>   
     
     
     
     <div class="gallery">    
           <div class="container">
              <div class="row">
                
              <?php while ($ligne = mysqli_fetch_array($resul)){?> 

            
                <form method="post">
                <input type="hidden" name="id" value ="<?php echo $ligne['id']; ?>">
                <label for="equipe">
    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="display: flex; align-items: center;">
        <img src="assets\images\team\le-travail-de-l-informatique-d-université-de-recherches-d-étude-d-éducation-d-apprentissage-automatique-team-ensemble-le-90699474.webp" class="img-responsive" style="flex-shrink: 0; width: 1000px; height: auto; margin-right: 10px;">
       
        <div>
            <h4 style="position: absolute; top: 0;"><?php echo $ligne['nom'] ;?> </h4>
            <p style="position: absolute; top: 10%;"><?php echo $ligne['description'] ;?></p>
        </div>
    </div>
    </label>
    <input id="equipe" type="submit" name="to_detail" style="display:none">
</form>
<?php  } ?>
  </div>
  </div>            
       
       </div>
       
        <!-- ######## Gallery End ####### -->

   


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 about">
                        <h2>About Us</h2>
                        <p>Limose Laboratory is a company which is helps persones and groupes to make a searches and participates in many events  </p>
    
                        <div class="foot-address">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="addet">
                                Boumerdes Street
                                55 Road - Boumerdes (35000)
                                ALGERIA
                            </div>
                        </div>
                        <div class="foot-address">
                            <div class="icon">
                                <i class="far fa-envelope-open"></i>
                            </div>
                            <div class="addet">
                                infolimose@entreprisw.com <br>
                                Limoselaboratory@smartypes.com
                            </div>
                        </div>
                        <div class="foot-address">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="addet">
                                +213 982308080 <br>
                                +213 108946310
                            </div>
                        </div>
                    </div>
                    
    
                    <div class="col-md-3 glink">
                        <ul>
                        <li><a href="index.php"><i class="fas fa-angle-double-right"></i>Home</a></li>
                    <li><a href="about_us.php"><i class="fas fa-angle-double-right"></i>About Us</a></li>
                    <li><a href="cources.php"><i class="fas fa-angle-double-right"></i>Cources</a></li>
                    <li><a href="event.php"><i class="fas fa-angle-double-right"></i>Event</a></li>
                    <li><a href="team.php"><i class="fas fa-angle-double-right"></i>Teams</a></li>
                    <li><a href="contact_us.php"><i class="fas fa-angle-double-right"></i>Contact Us</a></li>
                 </ul>
                    </div>
                    
                </div>
            </div>
        </footer>
    
        <div class="copy">
            <div class="container">
                <a href="https://www.limoselaboratory.com/">2024 &copy; All Rights Reserved by LIMOSE LABORATORY</a>
    
                <span>
                    
                    <a><i class="fab fa-twitter"></i></a>
                    <a><i class="fab fa-facebook-f"></i></a>
                </span>
            </div>
    
        </div>
    
    </body>
    
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>


</html>