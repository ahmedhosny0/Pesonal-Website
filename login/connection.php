<?php      
    $host = "localhost";  
    $user = "id15049113_com";  
    $password = "Aa@123456789";  
    $db_name = "id15049113_comments";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
