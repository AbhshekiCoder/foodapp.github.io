let user = document.getElementById("user-icon");
let profile = document.getElementById("profile");
let close_modal = document.getElementById("close-modal-icon");
let closemodal = document.getElementById("closemodal")
let signup_modal = document.getElementById("signupmodal");
let signinmodal = document.getElementById("signinmodal");


let num = 1;
user.onclick= function(){

num++
if(num%2 == 0){
profile.style.display = "block";

}
else{
    profile.style.display = "none";
}

}
let modal = document.getElementById("signup-modal");
let signup = document.getElementById("sign-up");
let sign_up = document.getElementById("signup-form");
let sign_in = document.getElementById("signin-modal");
let signin = document.getElementById("sign-in");
let signin_modal= document.getElementById("signin-form");

signup.onclick = function(){
    modal.style.display = "block";
    profile.style.display = "none";
    sign_up.style.transform = "translateY(100px)";
   
   
    

 
}
close_modal.onclick = function(){
    modal.style.display = "none";
    sign_in.style.display = "none";
}

window.onclick = function(event){

   
    if(event.target == modal){
        modal.style.display = "none";
        profile.style.display = "none";

    }
    if(event.target == sign_in){
        sign_in.style.display = "none";
    }
   
    
}
signin.onclick = function(){
    sign_in.style.display = "block";
    profile.style.display = "none";
    modal.style.display = "none";
    signin_modal.style.transform = "translateY(100px)";
}
closemodal.onclick = function(){
    sign_in.style.display = "none";
}
signup_modal.onclick = function(){
    sign_in.style.display = "none";
    modal.style.display = "block";
    

}
signinmodal.onclick = function(){
    modal.style.display = "none";
    sign_in.style.display = "block";
    
}



