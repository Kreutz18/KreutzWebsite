<?php

    include 'dbconnect.php';
    
    session_start();
    
    function alert($msg){
        echo "
            <script type = 'text/javascript'>
                alert('$msg'); 
                window.history.back();
            </script>";
    }
    
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        
        $username = mysqli_real_escape_string($connection,$_POST['username']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        
        $sql = "select adminID from adminInfo where adminUsername = '$username' and adminPassword = '$password'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result);
        
        if($count == 1){
            //session_register("username");
            $_SESSION['username'] = $username;
            
            header("location: adminHome.php");
        } else {
           alert("Incorrect Login!");
        }
    
    }
    
    mysqli_close($connection);
?>