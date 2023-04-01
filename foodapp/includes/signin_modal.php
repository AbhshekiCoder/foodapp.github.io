<div class = "modal" id = "signin-modal">
        <div id  = "signin-form">
        <form id = "signupform" method = "post" action = "api/login_submit.php">
            <div id = "close-modal">
                
                <i class = "fas fa-window-close" id = "closemodal"></i>
            </div>
            <div class = "form-group">
            <label><i class="fas fa-envelope"></i></label>
            <input type = "email"  name = "email" id = "input-group" placeholder = "Enter your email"/>
            </div>
            <div class = "form-group">
            <label><i class="fas fa-lock"></i></label>
            <input type = "password"  name = "password" id = "input-group" placeholder = "Enter your password"/>
            </div>
            <div class = "submit">
                <button type = "submit" class = "btn btn-block btn-primary"id = "button" > Login</button>
            </div>
            <div class = "form-group">
                <a href = "#" class = "input-group" id = "signupmodal">Create An Account</a>
            </div>

        </form>
    </div>
    </div>