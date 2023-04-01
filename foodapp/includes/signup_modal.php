<div class = "modal" id = "signup-modal">
        <div id = "signup-form" >
        <form id = "signupform" method = "post" action ="api/signup_submit.php ">
            <div id = "close-modal">
                
                <i class = "fas fa-window-close" id = "close-modal-icon"></i>
            </div>
            <div class = "form-group">
            <label><i class="fas fa-user"></i></label>
            <input type = "text"  name = "name" id = "input-group" placeholder = "Enter your name"/>
            </div>
            <div class = "form-group">
            <label><i class="fas fa-envelope"></i></label>
            <input type = "email"  name = "email" id = "input-group" placeholder = "Enter your email"/>
            </div>
            <div class = "form-group">
            <label><i class="fas fa-phone-alt"></i></label>
            <input type = "text"  name = "phone" id = "input-group" placeholder = "Enter your phone "/>
            </div>
            <div class = "form-group">
            <label><i class="fas fa-lock"></i></label>
            <input type = "password"  name = "password" id = "input-group" placeholder = "Enter your password"/>
            </div>
            <div class = "gender">
                <label id = "genders">I am</label >
                <input type = "radio" name = "gender"  value = "male" id = "gender"/><label id = genders-name>Male</label>
                <input type = "radio" name = "gender"  value = "female" id = "gender"/><label id = genders-name>Female</label>
            </div>
            <div class = "submit">
                <button type = "submit" class = "btn btn-block btn-primary"id = "button" > Create An Account</button>
            </div>
            <div class = "form-group">
                <a href = "#" class = "input-group" id = "signinmodal">if you have already registered</a>
            </div>

        </form>
        </div>
    

    </div>