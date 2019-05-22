<?php

    include 'dbconnect.php';
    
    $userInfo = "create table userInfo (userID int not null auto_increment, userDate date not null default '0000-00-00',
                    fName varchar(20) not null,
                    lName varchar(25) not null,
                    email varchar(30) not null,
                    message text,
                    primary key(userID))";
                    
    $companyInfo = "create table companyInfo (companyID int not null auto_increment, dateApplied date not null default '0000-00-00',
                    companyName varchar(30) not null,
                    positionName varchar(20),
                    city varchar(20),
                    state varchar(2),
                    description text,
                    primary key(companyID))";
                    
    $tables = [$userInfo, $companyInfo];
    
    $count = 1;
    
    foreach($tables as $x =>$sql){
        if(mysqli_query($connection, $sql)){
            echo "Table $count created!";
            echo "<br>";
        } else {
            echo "Error creating table $count!";
            echo "<br>";
        }
        $count++;
        
    }

    mysqli_close($connection);
    
?>

