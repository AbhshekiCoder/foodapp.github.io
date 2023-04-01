let user = document.getElementById("user-icon");
let profile = document.getElementById("profile");
let profile1 = document.getElementsByClassName("profile");

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