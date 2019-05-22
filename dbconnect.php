<?php

    $username = "root";
    $db = "website";
    $password = "";
    $servername = "localhost";


    $connection = new mysqli($servername, $username, $password, $db);
    
    if (!$connection) {
        die("connectionection Failed: Aborting..." . mysqli_connect_error());
    } 
    
 ?>