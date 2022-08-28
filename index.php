<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  
error_reporting(0);  
session_start(); 

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2.css">

</head>

<body class="home">

        <!-- header section start -->
        <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>food</a>

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <ul class="nav navbar-nav">
                             <a href="index.php">Home</a>
                             <a href="restaurants.php">Restaurants</a>
                            
                           
							<?php
                                if(empty($_SESSION["user_id"])) // if user is not login
                                {
                                    echo '<a href="login.php">Login</a>
                                  <a href="registration.php">Register</a>';
                                }
                                else
                                {

                                    echo  '<a href="your_orders.php">My Orders</a>';
                                    echo  '<a href="logout.php">Logout</a>';
                                }

                            ?>
							 
                        </ul>
        </nav>

        </header>

        <!-- header section ends -->

        <!-- home section starts  -->

        <section class="home" id="home">

        <div class="content">
            <h3>food made with love</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas accusamus tempore temporibus rem amet laudantium animi optio voluptatum!</p>
            <!-- <a href="dishes.php" class="btn">order now</a> -->
            <?php 					
            $query_res= mysqli_query($db,"SELECT * from dishes LIMIT 1");  
                while($r=mysqli_fetch_array($query_res))
                {                           
                echo '<a href="dishes.php?res_id='.$r['rs_id'].'" class="btn">order now</a>';  
                }
            ?>

        </div>

        <div class="image">
            <img src="images/home-img.png" alt="">
        </div>

        </section>

        <!-- home section ends -->

        <!-- speciality section starts  -->

    <section class="speciality" id="speciality">

    <h1 class="heading"> our <span>speciality</span> </h1>
    <div class="box-container">

        <div class="box">
            <img class="image" src="images/s-img-1.jpg" alt="">
            <div class="content">
                <img src="images/s-1.png" alt="">
                <h3>tasty burger</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-2.jpg" alt="">
            <div class="content">
                <img src="images/s-2.png" alt="">
                <h3>tasty pizza</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-3.jpg" alt="">
            <div class="content">
                <img src="images/s-3.png" alt="">
                <h3>cold ice-cream</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-4.jpg" alt="">
            <div class="content">
                <img src="images/s-4.png" alt="">
                <h3>cold drinks</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-5.jpg" alt="">
            <div class="content">
                <img src="images/s-5.png" alt="">
                <h3>tasty sweets</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-6.jpg" alt="">
            <div class="content">
                <img src="images/s-6.png" alt="">
                <h3>healty breakfast</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>

    </div>

    </section>

    <!-- speciality section ends -->

    <!-- popular section starts  -->

    <section class="popular" id="popular">

        <h1 class="heading"> most <span>popular</span> foods </h1>

        <div class="box-container">

        <?php 					
            $query_res= mysqli_query($db,"select * from dishes LIMIT 9"); 
                    while($r=mysqli_fetch_array($query_res))
                    {      
                        echo '
                        <div class="box">
                            <span class="price">₹'.$r['price'].'</span>
                            <img src="admin/Res_img/dishes/'.$r['img'].'">
                            <h3><a href="dishes.php?res_id='.$r['rs_id'].'">'.$r['title'].'</a></h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <a href="dishes.php?res_id='.$r['rs_id'].'" class="btn">order now</a>
                        </div>';                                 
                    }	
            ?>
        </div>

    </section>

    <!-- popular section ends -->

    <!-- steps section starts  -->

    <div class="step-container">

        <h1 class="heading">how it <span>works</span></h1>

        <section class="steps">

            <div class="box">
                <img src="images/step-1.jpg" alt="">
                <h3>choose your favorite food</h3>
            </div>
            <div class="box">
                <img src="images/step-2.jpg" alt="">
                <h3>free and fast delivery</h3>
            </div>
            <div class="box">
                <img src="images/step-3.jpg" alt="">
                <h3>easy payments methods</h3>
            </div>
            <div class="box">
                <img src="images/step-4.jpg" alt="">
                <h3>and finally, enjoy your food</h3>
            </div>
        
        </section>

    </div>

    <!-- steps section ends -->

    <!-- gallery section starts  -->

        <section class="gallery" id="gallery">

        <h1 class="heading"> our food <span> gallery </span> </h1>

        <div class="box-container">

        <?php 					
            $query_res= mysqli_query($db,"select * from dishes LIMIT 6"); 
                    while($r=mysqli_fetch_array($query_res))
                    {                           
                        echo '
                        <div class="box">
                        <img src="admin/Res_img/dishes/'.$r['img'].'">
                        <div class="content">
                            <h3><a href="dishes.php?res_id='.$r['rs_id'].'">'.$r['title'].'</a></h3>
                            <p>Lamb Patties Which Melt In Your Mouth, And Are Quick And Easy To Make. Served Hot With A Crisp Salad.</p>
                            <a href="dishes.php?res_id='.$r['rs_id'].'" class="btn">ordern now</a>
                            </div>
                        </div>';                                      
                    }	
            ?>

        </div>
        </section>

        <!-- gallery section ends -->

        <!-- review section starts  -->

        <section class="review" id="review">

        <h1 class="heading"> Designed <span>By</span> </h1>

        <div class="box-container">

        <div class="box">
            <img src="images/imgnitu.jpeg" alt="">
            <h3>Neetu Kushwaha</h3>
            <!-- <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div> -->
            <p>I am Neetu Kushwaha Student of BCA 3rd year in uttam institute of technology and management, Runakta ,Agra.
                I am recently working on a project of our college making a responsive  food website which will perfectly work.</p>
        </div>
        <div class="box">
            <img src="images/imgrohittt.jpeg" alt="">
            <h3>Rohit Kushwaha</h3>
            <!-- <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div> -->
            <p>I am Rohit Kushwaha Student of BCA 3rd year in uttam institute of technology and management, Runakta ,Agra.
                I am recently working on a project of our college making a responsive  food website which will perfectly work.</p>
        </div>
        <div class="box">
            <img src="images/imgakshat.jpeg" alt="">
            <h3>Akshat Sisodia</h3>
            <!-- <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div> -->
            <p>I am Akshat Sisodia Student of BCA 3rd year in uttam institute of technology and management, Runakta ,Agra.
                I am recently working on a project of our college making a responsive  food website which will perfectly work.</p>
        </div>

        </div>

        </section>

        <!-- review section ends -->       
        
        <!-- footer section  -->

        <section class="footer">
            <div class="share">
                <a href="https://www.facebook.com/" class="btn">facebook</a>
                <a href="https://twitter.com/i/flow/login" class="btn">twitter</a>
                <a href="https://www.instagram.com/?hl=en" class="btn">instagram</a>
                <a href="https://www.pinterest.com/" class="btn">pinterest</a>
                <a href="https://www.linkedin.com/" class="btn">linkedin</a>
            </div>
            <h1 class="credit"> Developed by <span>Rohit Kushwah, Neetu Kushwaha, Akshat Sisodia</span> | all rights reserved! </h1>
        </section>

        <!-- scroll top button  -->
        <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

        <!-- loader  -->
        <div class="loader-container">
            <img src="images/loader.gif" alt="">
        </div>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>

</body>

</html>