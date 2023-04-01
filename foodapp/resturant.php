<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
    <?php
    include "includes/headlinks.php";
    ?>
    <link href = "css/resturant.css" rel = "stylesheet"/>
    <link href = "css/index.css" rel = "stylesheet"/>
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

.profile{
    
    background-color: chocolate;
    width: 200px;

    
}
#carouselExampleControls{
    margin: auto;
    max-width: 800px;
    
    height: 70px;
    
    border-radius: 20px 20px;
    
    }
    .offer-cursol{
    padding: 20px;
    
    }
    .carousel-control-prev{
    border-radius: 20px 20px;
    border: hidden;
    }
    .carousel-control-next{
    border-radius: 20px 20px;
    border: hidden;
    
    }
    #offer{
    height: 70px;
    object-fit: cover;
    border-radius: 20px 20px;
    display: flex;
    justify-content: center;
    border: solid 2px;
    border-color: gold;
    }
    .cursol{
        padding: 20px;
    }
</style>


<body>
    
    <?php
    include "includes/header.php";
    ?>
    <!--resturant-name-deatil or rating card -->
    <div class = "main-page">
    <div class = "page">
        <div class = "resturant-card row">
            <div class = "name-container col-md-3">
                <div class = "name" id = "retustrant-content">
                    sjsjshjs
                </div>
                <div class = "rating" id = "retustrant-content">
                    5(10k + ratings)
                </div>
                
                <div class = "adress"id = "retustrant-content">
                    Outlet   skjkdj
                </div>
                
            </div>
            <div class = "interested-container col-md-9">
                <i class = "fas fa-heart"></i>
            </div>
        </div>
    </div>
    </div>

    <!-- offer cursol-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/3swiigr.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/WhatsApp Image 2022-01-26 at 11.26.51.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <div class = "menu">
                                    
        <i class = "fa fa-diamond" id = "menu-icon"></i>
        MENU
        <i class = "fa fa-diamond" id = "menu-icon"></i>
    </div>
     <!--dish search form -->
    <div id = "menu-search">
    
        <form class = "menu-form">
            <input type = "text" class = "menu-search" name = "dish" placeholder = "Search for dishes"/>
            <label><button type = "submit" id = "search-button"><i class = "fas fa-search"></i></button></label>
        </form>

    
    </div>
    <div class = "menu-list-container sticky" id = "menu-list">
        <div class = "wallet-icon">
        <i class  ="fas fa-wallet"></i>
    </div>
        <div class = "menu-name">
            MENU
        </div>
        
     </div>
    
     <!-- menu cards -->
     <div class ="menu-page">
        <div class = "total-menu">
            Recommended (20)
        </div>
        <div class = "menu-container">
            <div class = "item-cards row">
                <div class = "item-image col-md-4">
                    <img src = "img/item.png"  id = "item-img"/>
                    <span class = "add-item stack-top ">
                        <button class = "btn btn-primary " >ADD</button>
                   </span>
                    

                </div>
                <div class = "item-name col-md-8">
                   
                    <div class = "item-description row no-gutters justify-content-between">
                        <div  id = "item-name" >
                        Regular Thali
                        </div>
                        <div class = "rating-conatiner ">
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>

                    </div>
                    </div>
                    
                    <div class = "item-description" id = "item-description">
                        Medium/spicy|sesonalveg(Sabji)[100 ml]
                        +dal[100ml] + 5 tawa butter roti + salad
                        +pickle + gulab Jamun +mouth freshner
                    </div>
                    <div class = "item-description" id = "price">
                        <i class = "fa fa-inr"></i> 500
                    </div>
                   

                </div>


            </div>

            <div class = "item-cards row">
                <div class = "item-image col-md-4">
                    <img src = "img/item.png"  id = "item-img"/>
                    <span class = "add-item stack-top ">
                        <button class = "btn btn-primary " >ADD</button>
                   </span>
                    

                </div>
                <div class = "item-name col-md-8">
                   
                    <div class = "item-description row no-gutters justify-content-between">
                        <div  id = "item-name" >
                        Regular Thali
                        </div>
                        <div class = "rating-conatiner ">
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>

                    </div>
                    </div>
                    
                    <div class = "item-description" id = "item-description">
                        Medium/spicy|sesonalveg(Sabji)[100 ml]
                        +dal[100ml] + 5 tawa butter roti + salad
                        +pickle + gulab Jamun +mouth freshner
                    </div>
                    <div class = "item-description" id = "price">
                        <i class = "fa fa-inr"></i> 500
                    </div>
                   

                </div>


            </div>


            <div class = "item-cards row">
                <div class = "item-image col-md-4">
                    <img src = "img/item.png"  id = "item-img"/>
                    <span class = "add-item stack-top ">
                        <button class = "btn btn-primary " >ADD</button>
                   </span>
                    

                </div>
                <div class = "item-name col-md-8">
                   
                    <div class = "item-description row no-gutters justify-content-between">
                        <div  id = "item-name" >
                        Regular Thali
                        </div>
                        <div class = "rating-conatiner ">
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>

                    </div>
                    </div>
                    
                    <div class = "item-description" id = "item-description">
                        Medium/spicy|sesonalveg(Sabji)[100 ml]
                        +dal[100ml] + 5 tawa butter roti + salad
                        +pickle + gulab Jamun +mouth freshner
                    </div>
                    <div class = "item-description" id = "price">
                        <i class = "fa fa-inr"></i> 500
                    </div>
                   

                </div>


            </div>
            <div class = "item-cards row">
                <div class = "item-image col-md-4">
                    <img src = "img/item.png"  id = "item-img"/>
                    <span class = "add-item stack-top ">
                        <button class = "btn btn-primary " >ADD</button>
                   </span>
                    

                </div>
                <div class = "item-name col-md-8">
                   
                    <div class = "item-description row no-gutters justify-content-between">
                        <div  id = "item-name" >
                        Regular Thali
                        </div>
                        <div class = "rating-conatiner ">
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>

                    </div>
                    </div>
                    
                    <div class = "item-description" id = "item-description">
                        Medium/spicy|sesonalveg(Sabji)[100 ml]
                        +dal[100ml] + 5 tawa butter roti + salad
                        +pickle + gulab Jamun +mouth freshner
                    </div>
                    <div class = "item-description" id = "price">
                        <i class = "fa fa-inr"></i> 500
                    </div>
                  

                   

                </div>


            </div>
            




        </div>
     </div>
     <!--menu card list -->
     <div class = "card-List modal " id = "cardList">
     <div class = "card-list">
     <div id= "close-modal-list">
                
                <i class = "fas fa-window-close" id = "close-icon"></i>
            </div>
        <div class = "list-item">
            <a href = "#" id = "list">ghags</a></div>
        <div class = "list-item"><a  href = "#" id = "list">hbajbs</a></div>
        <div class = "list-item"><a href = "#" id = "list">bsba</a></div>
        <div class = "list-item"><a href = "#"id = "list">absbsa</a></div>
        <div class = "list-item"><a href = "#" id = "list">ajjshjs</a></div>
        <div class = "list-item"><a href = "#" id = "list">shjsh</a></div>
     </div>
     </div>

    
   
    <?php
    include "includes/signup_modal.php";
    include "includes/signin_modal.php";
    include "includes/profile.php";
    ?>
    <script>
        let list = document.getElementById("menu-list");
        let list_open = document.getElementById("cardList");
        let close = document.getElementById("close-modal-list");

        list.onclick = function(){
            list_open.style.display = "block";
        }
      
        close.onclick = function(){
            list_open.style.display = "none";
        }
        
    </script>

   <?php
   include "includes/footer.php";
   ?>
    <script type = "text/javascript" src = "js/allform.js"></script>
    <script type = "text/javascript" src="js/bootstrap.min.js"></script>
    <script type = "text/javascript" src = "js/jquery.js"></script>

  
   </body>
</html>
