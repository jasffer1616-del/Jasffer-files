const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signUp');



signUpButton.addEventListener('click', function(){
    signInForm.style.display="none";
    signUpForm.style.display="flex";
})

signInButton.addEventListener('click', function(){
    signInForm.style.display="flex";
    signUpForm.style.display="none";
})


function togglePassword() {
    const passwordInput = document.getElementById('signUppassword'); 
    const toggle = document.querySelector('.signuptoggle');
    
    if (passwordInput.type === "password") {
        passwordInput.type = "text";  
        toggle.textContent = "🙈";     
    } else {
        passwordInput.type = "password";
        toggle.textContent = "👁️";      
    }
}


