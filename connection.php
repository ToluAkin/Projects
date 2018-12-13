<?php
    $serverName = "localhost";   
    $database = "scrapbook";   
    $dbusername = "root";   
    $dbpassword = "mysql";

    //Open database connection   
    $conn = mysqli_connect($serverName, $dbusername, $dbpassword, $database);

    // Check that connection exists   
    if (!$conn) {       
        die("Connection failed: " . mysqli_connect_error());  
    }
?>