<?php

function connect(){
    $host="localhost";
    $user="root";
    $password="mariadatabase";

    $db="student";

    $con = mysqli_connect($host,$user,$password);

    mysqli_select_db($con,$db);
    return $con;
}


?>