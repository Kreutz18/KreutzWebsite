<?php

    include 'dbconnect.php';
    
    $dt = date("Y-m-d");
    
    function alert($msg){
        echo "<script type = 'text/javascript'>alert('$msg')</script>";
    }
    
    $companyInfo = "insert into companyInfo (dateApplied,companyName, positionName, city, state, description) values('$dt','$_POST[companyName]','$_POST[positionName]','$_POST[city]','$_POST[state]','$_POST[description]')";
                
    if(!mysqli_query($connection,$companyInfo)){
        echo "Error: Something went wrong!";
    } else {
        alert("Thank you!");
    }

    
    
    mysqli_close($connection);

?>

<html>
    <head></head>
    <body>
        <a href = "home.html" >Return Home</a>
    </body>
</html>