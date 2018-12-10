<?php 
    include 'connection.php';

    $username = $_POST['username'];
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname'];
    $email = $_POST['email']; 
    $pswd = $_POST['pswd'];
    $cpswd = $_POST['cpswd']; 
    saveToDatabase($username, $firstname, $lastname, $email, $pswd, $cpswd, $conn);
    saveToFile($username, $firstname, $lastname, $email, $pswd, $cpswd);
    header('Location:signin.php');

    function saveToFile($username, $firstname, $lastname, $email, $pswd, $cpswd) {   
        $fileHandler = fopen('record.txt', 'a');   
        $string = $username . ',' . $firstname . ',' . $lastname . ',' . $email . ',' . $pswd . ',' . $cpswd . "\n";   
        fwrite($fileHandler, $string);   
        fclose($fileHandler); 
    }

    function saveToDatabase($username, $firstname, $lastname, $email, $pswd, $cpswd, $conn) { 
        $sql = "INSERT INTO users (username, firstname, lastname, email, pswd, cpswd, created_at)  
        VALUES ('$username','$firstname', '$lastname', '$email', '$pswd', '$cpswd', NOW())";

        $result = mysqli_query($conn, $sql);

        //Check for errors   
        if (!$result) {     
            die("Error: " . $sql . "<br>" . mysqli_error($conn));  
        }  

        //Close the connection   
        mysqli_close($conn); 
    }
?>