<?php
    include 'connection.php';
    
    $title = $_POST['title'];
    $note = $_POST['note'];  
    saveToDatabase($title, $note);
    saveToFile($title, $note);
    header('Location:save.php');

    function saveToFile($title, $note) {   
        $fileHandler = fopen('entries.txt', 'a');   
        $string = $title . ',' . $note . "\n";   
        fwrite($fileHandler, $string);   
        fclose($fileHandler); 
    }

    function saveToDatabase($title, $note) {   
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

        $net= $_POST['id'];

        $sql = "UPDATE notes SET title ='$title', note = '$note', created_at = NOW() WHERE id=".$net;
    
       
        $result = mysqli_query($conn, $sql);

        //Check for errors   
        if ($row = mysqli_fetch_assoc($result)) {
            echo $row['id'];
        } else {
            echo "Error:" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>