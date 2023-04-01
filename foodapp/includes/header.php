
<div class = "header  sticky-top" >
        <div class = "logo">
            hfgh
            

        </div>
        <div class = "index-container">
           
            <div class = "index-item">
                <i class = "fas fa-home" id = "icon">
                </i>
                <a href = "index.php" class = "item">
                Home
                </a>
            </div>
            <div class = "index-item">
              <i class = "fas fa-cheese" id = "icon"></i>
              <a href = "dish.php" class = "item">
                Food
                </a>
            </div>
            <div class = "index-item">
                <i class ="fa fa-shopping-cart" id = "icon"></i>
                <a href = "resturant.php" class = "item">
                Cart
                </a>
            </div>
            <div class = "wallet-item">
                <i class = "fas fa-wallet" id = "icon"></i>
                <a href = "#" class = "item">
                wallet
                </a>
            </div>
            </div>
            <div class = "user-conatiner ">
                <div class = "user-icon">
                <i class = "fas fa-user-circle" id = "user-icon"></i>
                </div>
                <?php
                if(!isset($_SESSION['user_id'])) {
                    ?>
                    <span id = "user-name">Hi</span>

                    
               
                <?php
                } else { 

                    ?>

                    <span id = "user-name">
                        <?php echo  $_SESSION["name"] ?>

                   
                    </span>
                
                
                <?php

                }
                ?>
               


            </div>
           
       
       </div>
     


    </div>
     
