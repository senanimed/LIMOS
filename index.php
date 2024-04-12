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

    <link rel="shortcut icon" href="assets\images\Limose-removebg-preview.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    
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
                            <?php if(empty($_SESSION["id"])){?>
                            <div>
                                <p><a href="singup.php">SIGN UP</a>&nbsp;</p>
                                &nbsp;<p><a href="login.php">SIGN IN</a></p>
                            </div>

                            <?php }else{?>
                                <div>
                                <p><a href="logout.php">log out</a>&nbsp;</p>
                                &nbsp;<p><a href="updateinformation.php">Update</a></p>
                               
                            </div>
                            <?php } ?>
            
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </header>
    
    
    <!-- ################# Slider Starts Here#######################--->
     <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="assets/images/slider/se.jpg" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="slider-captions">
                                    <h1 class="slider-title">Limose Laboratory</h1>
                                    <p class="slider-text hidden-xs">We can help you conquer a wide range many problems and get the solutions</p>
                                    <a href="#" class="btn btn-success hidden-xs">View All Cources</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/event.png" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">Education Learning Course</h1>
                                <p class="slider-text hidden-xs">Ww make many events of searching </p>
                                <a href="#" class="btn btn-success hidden-xs">Schedule A Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"> <img src="assets/images/slider/lk.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;teams working</h1>
                                <p class="slider-text hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We working on teams to learn a lot of things .</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="gallery.html" class="btn btn-success hidden-xs">see teams</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
        <!-- ################# Key Features Starts Here#######################--->
    <div class="key-features">
        <div class="container">
            <div class="row key-row no-margin">
                <div class="box c1">
                   <i class="fas fa-project-diagram"></i>
                    <p>Graphic Design</p>
                </div>
                <div class="box c2">
                     <i class="fas fa-space-shuttle"></i>
                    <p>Marketing Online</p>
                </div>
                <div class="box c1">
                    <i class="fas fa-globe-americas"></i>
                    <p>Website Design</p>
                </div>
                <div class="box c2">
                    <i class="fas fa-feather-alt"></i>
                    <p>Animation</p>
                </div>
                <div class="box c1">
                     <i class="fab fa-app-store-ios"></i>
                    <p>App Programing</p>
                </div>
            </div>
        </div>
    </div>
    
<!-- ################# popular Cources Starts Here#######################--->
<div class="popular-cources">
    <div class="container">
        <div class="session-title row">
            <h2>Our Instructors</h2>
        </div>
        <div class="row courc-ro">
            <div class="col-md-4">
                <div class="courc-card">
                    <img src="assets/images/cources/cource-1.jpg" alt="">
                    <div class="cource-det">
                        <h6>Graphic Design</h6>
                        <ul>
                            <li><i class="fas fa-graduation-cap"></i> Adam Jhon <span>Free</span></li>
                            <li><i class="far fa-calendar-plus"></i> June 23- Nov23</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="courc-card">
                    <img src="assets/images/cources/cource-2.jpg" alt="">
                    <div class="cource-det">
                        <h6>Online Marketing</h6>
                        <ul>
                            <li><i class="fas fa-graduation-cap"></i> Adam Jhon <span>Free</span></li>
                            <li><i class="far fa-calendar-plus"></i> June 23- Nov23</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="courc-card">
                    <img src="assets/images/cources/cource-3.jpg" alt="">
                    <div class="cource-det">
                        <h6>App Programing</h6>
                        <ul>
                            <li><i class="fas fa-graduation-cap"></i> Adam Jhon <span>Free</span></li>
                            <li><i class="far fa-calendar-plus"></i> June 23- Nov23</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
         

        
  <!-- ################# University Number Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
               <div class="row session-title">
                   <h2>Limose Laboratory in numbers</h2>
                   <p>We can talk for a long time about advantages of our Dental clinic before other medical treatment facilities.
But you can read the following facts in order to make sure of all pluses of our clinic:</p>
               </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>12+</h3>
                        <span>YEARS OF EXPEREANCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>100+</h3>
                        <span>Cources</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>52+</h3>
                        <span>QUALIFIED STUFF</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>18+</h3>
                        <span>MASTER CERTIFICATIONS</span>
                    </div>
                </div>
            </div>

        </div>

    </div>     
         
         
         
          
<!-- ################# Our Instructors Starts Here#######################--->    

<div class="our-instructor">
    <div class="container">
         <div class="session-title row">
            <h2>Our professors</h2>
        </div>
        <div class="instruct-row row">
            <div class="col-md-3">
                <div class="instruct-card">
                    <img src="assets/images/team/avatar-2.jpg" alt="">
                <h6>Khlifati Sadek</h6>
                <p>Mathematics Professor</p>
                
                <ul>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-linkedin-in"></i></li>
                    <li><i class="fab fa-pinterest-p"></i></li>
                </ul>
                </div>
            </div>
             <div class="col-md-3">
                <div class="instruct-card">
                    <img src="assets/images/team/avatar-8.jpg" alt="">
                <h6>Ben zennati Tayeb </h6>
                <p>Data base Professor</p>
                
                <ul>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-linkedin-in"></i></li>
                    <li><i class="fab fa-pinterest-p"></i></li>
                </ul>
                </div>
            </div>
             <div class="col-md-3">
                <div class="instruct-card">
                    <img src="assets/images/team/avatar-9.jpg" alt="">
                <h6>Boulif Menouar</h6>
                <p>Algorithmes Professor</p>
                
                <ul>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-linkedin-in"></i></li>
                    <li><i class="fab fa-pinterest-p"></i></li>
                </ul>
                </div>
            </div>
             <div class="col-md-3">
                <div class="instruct-card">
                    <img src="assets/images/team/avatar-7.jpg" alt="">
                <h6>Ben Abderazak Youcef</h6>
                <p>Ordinator Architector Professor</p>
                
                <ul>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-linkedin-in"></i></li>
                    <li><i class="fab fa-pinterest-p"></i></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div> 
          
 <!-- ################# Our event Starts Here#######################---> 
 <?php
    $query_event="SELECT * FROM evenement LIMIT 2 ";
    $result = mysqli_query($conn,$query_event);

?>
                   
 <div class="our-blog bb3 pc2">
    <div class="container">
    <div class="session-title row">
            <h2>Our events</h2>
        </div>
         
        
        <div class="row-blog row">
            <div class="col-md-10 vbf mx-auto">
            <?php while ($ligne = mysqli_fetch_array($result)) {?> 
          
                
                <div class="blog-card row">
                        <input type="hidden" name="id" value ="<?php echo $ligne['id'] ?>">
                        <div class="col-2">
                           <div class="date-box">
                            <?php $datedebut=$ligne['date_debut'];?>
                                <span> <?php echo date("F", strtotime($datedebut));?></span>
                                <p><?php echo date("d", strtotime($datedebut));?></p>
                                <small><?php echo date("y", strtotime($datedebut));?></small>
                           </div>
                           
                        </div>
                        <div class="col-7 setv">
                            <h4><?php echo $ligne['titre'];?></h4>
                            <ul>
                                <p><?php echo $ligne['description'];?></p>
                            </ul>
                        </div>
                        <div class="col-3">
                        <div class="date-box">
                        <?php $datefin=$ligne['date_fin'];?>
                                <span> <?php echo date("F", strtotime($datefin));?></span>
                                <p><?php echo date("d", strtotime($datefin));?></p>
                                <small><?php echo date("y", strtotime($datefin));?></small>
                        </div>
                        </div>
                       
                    
                    </div>
                    
                   
                    <div class="col-7 setv" >
                    <li><a href="event.php"><i class="fas fa-angle-double-right"></i>More events</a></li>
                    </div>
            <?php   }    ?>
                
          
  <!-- ################# Our Footer Starts Here#######################---> 
  
                  
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
