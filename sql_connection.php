<?php
    $host="localhost";
    $User="root";
    $password="";
    $DBname="ITE_project";
    $connect= mysqli_connect($host,$User,$password);
    if($connect==false){
        die("ERROR cannot connect".mysqli_connect_error());
    }
    
?>