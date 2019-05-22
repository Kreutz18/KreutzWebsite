<?php
    
    include 'dbconnect.php';

    $count = 1;
    $userInfo = "drop table userInfo";
    $companyInfo = "drop table companyInfo";
    
    $tables = [$userInfo, $companyInfo];
    
    foreach($tables as $x => $sql){
        if(mysqli_query($connection, $sql)){
            echo "Dropped Table $count!";
            echo "<br>";
        } else {
            echo "Error Dropping Table $count!";
            echo "<br>";
        }
        
        $count++;
    }

    mysqli_close($connection);
?>