<?php

    include 'dbconnect.php';
    
    $dt = date("Y-m-d");
    
    function alert($msg){
        echo "<script type = 'text/javascript'>alert('$msg')</script>";
    }
    
    $userInfo = "insert into userInfo (userDate,fName, lName, email, message) values('$dt','$_POST[fName]','$_POST[lName]','$_POST[email]','$_POST[message]')";
                
    if(!mysqli_query($connection,$userInfo)){
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