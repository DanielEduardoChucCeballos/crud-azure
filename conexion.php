<?php

function connect(){
    $host="utpservidor123456789.mysql.database.azure.com";
    $user="root_admin";
    $password="Daniel141516";

    $db="students";

    $con = mysqli_connect($host,$user,$password);

    mysqli_select_db($con,$db);
    return $con;
}


?>