<?php




function emptyInput($name, $email){
    $result;

    if( empty($name) || empty($email) ){

        $result = true;
    }

    else{

        $result = false;

    }

    return $result;

}

function invalideName($name){

    $result;

    if(!preg_match("/^[a-zA-Z0-9]*$/", $name)){
        $result = true;
    }

    else{

        $result = false;

    }

    return $result;

}

function invalidEmail(){
    $result;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $result = true;

    }

    else{

    $result = false;
    }

    return $result;
}


function createUser($name, $email){

    $sql = "INSET INTO utilisateurs(userName,userEmail) VALUES (?,?);";
    $stmt = mysqli_stmt_init($connection);
    if(!mysql_stmt_prepare($stmt,$sql)){

        header("location: signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$name,$email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: signup.php?error=none");

}

?>