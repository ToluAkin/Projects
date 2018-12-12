<?php
    include 'connection.php';
    
    $title = $_POST['title'];
    $note = $_POST['note'];  
    saveToDatabase($title, $note, $conn);
    header('Location:save.php');

    function saveToDatabase($title, $note, $conn) {
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