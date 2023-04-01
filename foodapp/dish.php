<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
    <?php
    include "includes/headlinks.php";
    ?>
   
    <link href = "css/index.css" rel = "stylesheet"/>
    <link href = "css/dish.css" rel = "stylesheet"/>

</head>
<style>
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

.footer{


height: 200px;
background-color: #333333;




}
.footer-container{

max-width: 800px;
margin: auto;



}

.footer-item{

display: flex;
justify-content: space-around;
}
#footer-item{
text-decoration: none;
font-size: 40px;
color: gold;
}
@media(max-width: 768px){
#footer-item{
    font-size: 30px;
}
}
#footer-input{
margin-top: 20px;
display: flex;
justify-content: center;
font-size: 20px;
color: gold;
}
.copywrite{
display: flex;
justify-content: center;
color: gray;
}







    </style>
   
   <body>
    <?php
    include "includes/header.php";
    ?>

    <div class = "page">
        <div class = "container">
            <div class = "dish-container">
                <div class = "resturant-name">
                    <div id = "resturant-name">
                        Ssjkjsksj
                    </div>
                    <div class = "rating">
                        5.0
                    </div>

                </div>
                <div class = "dish-card-container">
                    <div class = "dish-card row">
                        <div class = "dish-image col-md">
                            <img src = "img/gulabjamun.png" id = "dish-image"/>
                            <span class = "add-item  ">
                                <button class = "btn btn-primary " >ADD</button>
                            </span>
                        </div>
                        <div class = "dish-name col-md">
                            <div id = "dish-name">
                                Gulab Jamun
                            </div>
                            <div class = "price">
                                <i class = "fa fa-inr">
                                    200
                                </i>
                            </div>
                            <div class = "dish-description">
                                Softy spongy and delicious Indian dessert served with a generous helping of sugar syruup
                            </div>
                            <div class = "dish-rating">
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                            </div>

                        </div>
                        

                    </div>


                    <div class = "dish-card row">
                        <div class = "dish-image col-md">
                            <img src = "img/gulabjamun.png" id = "dish-image"/>
                            <span class = "add-item  ">
                                <button class = "btn btn-primary " >ADD</button>
                            </span>
                        </div>
                        <div class = "dish-name col-md">
                            <div id = "dish-name">
                                Gulab Jamun
                            </div>
                            <div class = "price">
                                <i class = "fa fa-inr">
                                    200
                                </i>
                            </div>
                            <div class = "dish-description">
                                Softy spongy and delicious Indian dessert served with a generous helping of sugar syruup
                            </div>
                            <div class = "dish-rating">
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                            </div>

                        </div>
                        

                    </div>
                </div>
            </div>










            <div class = "dish-container">
                <div class = "resturant-name">
                    <div id = "resturant-name">
                        Ssjkjsksj
                    </div>
                    <div class = "rating">
                        5.0
                    </div>

                </div>
                <div class = "dish-card-container">
                    <div class = "dish-card row">
                        <div class = "dish-image col-md">
                            <img src = "img/gulabjamun.png" id = "dish-image"/>
                            <span class = "add-item  ">
                                <button class = "btn btn-primary " >ADD</button>
                            </span>
                        </div>
                        <div class = "dish-name col-md">
                            <div id = "dish-name">
                                Gulab Jamun
                            </div>
                            <div class = "price">
                                <i class = "fa fa-inr">
                                    200
                                </i>
                            </div>
                            <div class = "dish-description">
                                Softy spongy and delicious Indian dessert served with a generous helping of sugar syruup
                            </div>
                            <div class = "dish-rating">
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                            </div>

                        </div>
                        

                    </div>


                    <div class = "dish-card row">
                        <div class = "dish-image col-md">
                            <img src = "img/gulabjamun.png" id = "dish-image"/>
                            <span class = "add-item  ">
                                <button class = "btn btn-primary " >ADD</button>
                            </span>
                        </div>
                        <div class = "dish-name col-md">
                            <div id = "dish-name">
                                Gulab Jamun
                            </div>
                            <div class = "price">
                                <i class = "fa fa-inr">
                                    200
                                </i>
                            </div>
                            <div class = "dish-description">
                                Softy spongy and delicious Indian dessert served with a generous helping of sugar syruup
                            </div>
                            <div class = "dish-rating">
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                                <i class = "fas fa-star"></i>
                            </div>

                        </div>
                        

                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <?php
    include "includes/profile.php";
    include "includes/signup_modal.php";
    include "includes/signin_modal.php";
    ?>

    <?php
    include "includes/footer.php";
    
    
    ?>
    <script type = "text/javascript" src = "js/allform.js"></script>
    <script type = "text/javascript" src="js/bootstrap.min.js"></script>
    <script type = "text/javascript" src = "js/jquery.js"></script>
   
   </body>
 </html>