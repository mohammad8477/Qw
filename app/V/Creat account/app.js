let phoneBtn=document.querySelector(".phone-btn");
let emailBtn=document.querySelector(".email-btn");
let emailInput=document.querySelector("#email-input");
let phoneInput=document.querySelector("#phone-input");

const toggleBtn= (x)=>{
    x.classList.add("active");
    x.classList.remove("zindex-52");
    if( x== phoneBtn){
        emailBtn.classList.remove("active");
        emailBtn.classList.add("zindex-52");
        emailInput.classList.add("d-none");
        phoneInput.classList.remove("d-none");
    }else if(x== emailBtn){
        phoneBtn.classList.remove("active");
        phoneBtn.classList.add("zindex-52");
        emailInput.classList.remove("d-none");
        phoneInput.classList.add("d-none");
    }
}


// For Password input
let passBg= document.querySelector(".pass-bg");
let passLabel=document.querySelector(".pass-label");
let password = document.querySelector("#YourPassword");

function togglePassword() {
    var passwordInput = document.getElementById("YourPassword");
    var eyeIcon = document.querySelector(".eye-icon i");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
        passBg.classList.add("pass-bg-full");
        passBg.classList.remove("pass-bg-min");
        password.classList.add("black");
        passLabel.classList.add("black");
    } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
        passBg.classList.remove("pass-bg-full");
        passBg.classList.add("pass-bg-min");
        password.classList.remove("black");
        passLabel.classList.remove("black");
    }
}

// For if(password === repeat)
let errorRepeat= document.querySelector(".error-div");

const repeatComparator=()=>{
    let repeatPasswordInput=document.querySelector("#repeat-password");
    let repeatVal=repeatPasswordInput.value;
    console.log(repeatVal);
    if(password.value==""){
        errorRepeat.classList.add("d-none");
    } else if(repeatVal === password.value){
        errorRepeat.classList.add("d-none");
    }else if(repeatVal !== password.value){
        errorRepeat.classList.remove("d-none")
    }
}