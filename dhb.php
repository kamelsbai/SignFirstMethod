<?php

/*this is going to be the file 
that handles connecting to the data base so we can
then later connect to any sort of data
inside the database, put out data etc we 
can then just refer to a variable inside this file
in order to get a connexion going to the DB
*/


$serverName = "localhost";
$dBUserName = "root";
$dBpassword="";
$dBName="emailConfirmation";


$connection = mysqli_connect($serverName,$dBPassword,$dBName);

if(!$connection){

    die("Connection error: ". my_sqli_connect_error());
}


?>