<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- SIGN IN CONTAINER -->
<div class="signincontainer" id="signIn" style="display: none;">
    <div class="signinleft">
        <h2>Don't have an account?</h2>
        <p>Create now to reserve</p>
        <button id="signUpButton">SIGN UP</button>
    </div>
  
    <div class="signinright">
        <h2>Sign in</h2>
        <form method="post" action="register.php">
            <div class="signinfield">
                <input type="text" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="signinfield">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <a class="signina" href="#">Forgot your password?</a>
            <button type="submit" class="login-btn" name="signIn">LOGIN</button>
        </form>
    </div>
</div>

<!-- SIGN UP CONTAINER -->
<div class="signupcontainer" id="signUp">
    <div class="signupform-container">
        <h2>Create Account</h2>
        <form action="register.php" method="post">
            <div class="signupinput-group">
                <input type="text" name="fName" placeholder="First name" required>
            </div>
            <div class="signupinput-group">
                <input type="text" name="lName" placeholder="Last name" required>
            </div>
            <div class="signupinput-group">
                <input type="text" name="email" placeholder="Email" required>
            </div>
            <div class="signupinput-group">
                <input type="password" name="password" id="signUppassword" placeholder="Password" required>
                <span class="signuptoggle" onclick="togglePassword()"style="cursor:pointer;">👁️</span>
            </div>

            <button type="submit" class="signupbtn" name="signUp">SIGN UP</button>
        </form>
    </div>

    <div class="signupside-container">
        <h3>Already have an account?</h3>
        <p>Log in now to reserve</p>
        <button class="signupbtn-outline" id="signInButton">SIGN IN</button>
    </div>
</div>
<script>function togglePassword() {
    const passwordInput = document.getElementById('signUppassword'); 
    const toggle = document.querySelector('.signUptoggle');
    
    if (passwordInput.type === "password") {
        passwordInput.type = "text";  
        toggle.textContent = "🙈";     
    } else {
        passwordInput.type = "password";
        toggle.textContent = "👁️";      
    }
}
</script>

<script src="script.js"></script>
</body>
</html>