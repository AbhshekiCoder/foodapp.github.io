<div class = "profile-container modal" id = "profile" >
    
        <div class = "profile-items">
            <?Php
            if(!isset($_SESSION['user_id'])){
                ?>
                <p class = "profilename"  id ="profileitem">Hi</p>
                

            <?php
            } else {
                ?>
                <p class = "profilename"  id ="profileitem">
                    <?php echo $_SESSION['name'] ?>
                </p>
                <?php

            }
            ?>
        
        </div>
        <div class = "signup">
            <i class = "fas fa-user" id = "signup-icon"></i>
            <div id = "signup">
            <a href = "#" id = "sign-up">
            Signup
            </a>
            </div>
        </div>
        <div class = "signup">
            <i class = "fas fa-sign-in-alt" id = "signup-icon"></i>
            <?php
            if(!isset($_SESSION['user_id'])){
                ?>
                
                <div id = "signup">
                <a href = "#" id = "sign-in">
                Signin
                </a>
                </div>
                
            <?php
            }
            else{
                ?>
                <div id = "signup">
               
                </div>
                
            <?php
            }

            ?>
           
        </div>
       
        <div class = "profile-item">
            <a class = "myprofile"  id ="profileitem" href = "#">My Account</a>
        </div>
        <div class = "profile-item">
            <a class = "Adress" href = "#"  id ="profileitem">Adresses</a>
        </div>
        <div class = "signup">
            <i class = "fas fa-wallet" id = "wallet-icon"></i>
            <a href = "#" class = " wallet" id ="profileitem">
            wallet
            </a>
        </div>
        <div class = "profile-item">
            <a class = "help" href = "#"  id ="profileitem" >
                Help
            </a>
        </div>
        <div class = "logout">
            <a class = "logout-button"  id ="profileitem" href = "api/logout.php">
                logout 
            </a>
        </div>
    
    </div>