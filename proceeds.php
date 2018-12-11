<?php 
    include 'connection.php';
    session_start();
    
    $userid = $_SESSION['userid'];
    $title = $_POST['title'];
    $note = $_POST['note'];  
    saveToDatabase($userid, $title, $note, $conn);
    header('Location:save.php');

    function saveToDatabase($userid, $title, $note, $conn) {
        $sql = "INSERT INTO notes (userid, title, note, created_at)  VALUES ('$userid','$title','$note', NOW())";  
        $result = mysqli_query($conn, $sql);

        
        //Check for errors   
        if (!$result) {     
            die("Error: " . $sql . "<br>" . mysqli_error($conn));  
        }  

        //Close the connection   
        mysqli_close($conn); 
    }
?>