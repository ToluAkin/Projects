<?php
    $serverName = "localhost";   
    $database = "scrapbook";   
    $username = "root";   
    $dbpassword = "mysql";

    //Open database connection   
    $conn = mysqli_connect($serverName, $username, $dbpassword, $database);

    // Check that connection exists   
    if (!$conn) {       
        die("Connection failed: " . mysqli_connect_error());  
    }
?>