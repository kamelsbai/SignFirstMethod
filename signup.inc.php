<?php



if(isset($_POST["submit"])){

    

    $name = $_POST["name"];
    $email = $_POST["email"];



    require 'dbh.php';

    require_once 'functions.php';


    if (emptyInputSignup($name,$email) !==false ){
        header('location : signup.php?error=emptyinput');
        exit();
    } 

    if(invalidName($name) !== false){
        header('location: signup.php?error=invalidname');
        exit();
    } 
    if (invalidEmail($email) !== false){
        header('location: signup.php?error=invalidemail');
        exit();
    }
}

else{

    header('location : signup.php');
    exit();
}

