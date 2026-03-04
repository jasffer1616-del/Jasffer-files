<?php
session_start();
include 'connect.php';

// ------------------- SIGN UP -------------------
if(isset($_POST['signUp'])){
    $firstName = $_POST['fName'];
    $lastName  = $_POST['lName'];
    $email     = $_POST['email'];
    $password  = md5($_POST['password']); // hash password

    // Check if email already exists
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if($result->num_rows > 0){
        echo "Email Address Already Exists!";
    } else {   
        $insertQuery = "INSERT INTO users(firstName,lastName,email,password)
                        VALUES ('$firstName','$lastName','$email','$password')";
        if($conn->query($insertQuery) === TRUE){
            header("Location: signin.php"); // Redirect to login page
            exit();
        } else {
            echo "Error: ".$conn->error;
        }
    }
}

// ------------------- SIGN IN -------------------
if(isset($_POST['signIn'])){
    $email    = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){ 
        $row = $result->fetch_assoc();

        // Store user ID and email in session for order.php
        $_SESSION['id']    = $row['id'];       // <--- important for orders
        $_SESSION['email'] = $row['email'];
         $_SESSION['fName']   = $row['firstName'];
        $_SESSION['lName']   = $row['lastName']; 

        header("Location: homepage.html");
        exit();
    } else {
        echo "Incorrect Email or Password";
    }
}

?>



