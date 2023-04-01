<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
   <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href = "css/bootstrap.min.css" rel = "stylesheet"/>
    <link href = "css/home.css" rel = "stylesheet"/>
    <link href = "css/index.css" rel = "stylesheet"/>


   
   </head>

   <style>


 .carousel img {
height: 300px;
object-fit: cover;
}
#carouselExampleIndicators{

margin-top: 100px;
}

    
 .cursol{

background-size: 80% 80%;

height: 300px;
background-image: url("img/channel\ photo.jpeg");

animation: slider 10s infinite linear;
margin-top: 100px;
}
    @keyframes slider{
    30%{ 
        background-image: url("img/channel\ photo.jpeg");
    }
    70%{
        background-image: url("img/pexels-waldemar-brandt-2541239.jpg");
     }
    40%{ background-image: url("img/WhatsApp\ Image\ 2022-01-26\ at\ 11.26.51.jpeg");}
    }
    .profile-container{
    
    width: 200px;
    
    display: none;
    background-color: chocolate;
    margin-left: 87%;
    margin-top: 100px;
    
  
    

}
@media(max-width: 768px){
    .profile-container{
        margin-left: 50%;
        margin-top: 100px;
    }
}

.carousel img {
    height: 400px;
    object-fit: cover;
    
}

  
   
   
    
    
   </style>
   
   <body>
    <?php
    include "includes/header.php";

    ?>
    <?php
    include "includes/profile.php";
    ?>
    
    
   
    
    <div class = "search-form">
        <form class = "search">
            <input type = "search" id = "search" placeholder="Search for restaurant item or more"/>
            <label>
               <button type = "submit" id = "submit">
                <i class = "fas fa-search"></i>
               </button>
            </label>

        </form>
    </div>
    <div class = "item-container">
        <div class = "items">
            <a href = "#" id = "img-item">
                <img src = "img/2.jpg" class = "img-item"/>
            </a>
            <div id = "items">
                ajsn
            </div>

        </div>
        <div class = "items">
            <a href = "#" id = "img-item">
                <img src = "img/3swiigr.jpg" class = "img-item"/>

            </a>
            <div id = "items">
                asjns
            </div>

        </div>
        <div class = "items">
            <a href = "#" id = "img-item">
                <img src = "img/4.jpg" class = "img-item"/>

            </a>
            <div id = "items">
                sbsj
            </div>

        </div>
        <div class = "items">
            <a href = "#" id = "img-item">
                <img src = "img/2.jpg" class = "img-item"/>
              
            </a>
            <div id = "items">
                sjja
            </div>

        </div>

       
       
    </div>
    <div class = "cursol">

    </div>
    <div class = "newitem">
        <img src = "img/Screenshot_20230316-233540_Swiggy.jpg" id = "newitem"/>

    </div>
    <div id = "footer">

    <div class = "footer">
        <div class = "footer-words">
            <p id = "words">Always </p>
            <p id = "words"> Like</p>
            <p id = words> A</p>
            <P id = "words">Foodie</P>
        </div>
       
        <div class = "footer-hearts">
            <i class = "fas fa-heart" id = "footer-hearts"></i>
        </div>
    </div>

 
  
    <?php
    include "includes/signup_modal.php";
    include "includes/signin_modal.php";

    ?>
 
      


<script type = "text/javascript" src = "js/allform.js"></script>
<script type = "text/javascript" src="js/bootstrap.min.js"></script>
<script type = "text/javascript" src = "js/jquery.js"></script>

  
   </body>
</html>