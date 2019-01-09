<?php
    include 'connection.php';
    session_start();
    
    if (isset($_POST['submit'])){
        $username = mysqli_escape_string($conn,$_POST['username']);
        $pswd = mysqli_escape_string($conn,sha1($_POST['pswd']));
                    
       if(empty($username) || empty($pswd)){
            echo "All fields are required";
        }  else{
            $sql = "SELECT * FROM  users WHERE username = '$username' and pswd ='$pswd' LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
        }
        
        if ($resultCheck > 0)  { 
            echo $resultCheck;
            $row = mysqli_fetch_assoc($result);
            echo $row['id'];
            echo $row['username'];
            echo $row['email'];
            echo $row['pswd'];

            $id = $row['id'];
            $username = $row['username'];
            $email = $row['email'];
            $pswd = $row['pswd'];
            
            $_SESSION['userid'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['pswd'] = $pswd;
            // send them back
            $_SESSION['frommedium'] = "true";
            header("Location:saved.php");
        } else{
            die("Error: User does not exist " . $sql . "<br>" . mysqli_error($conn));   
            header("Location:signin.php");
        } 
        
        //Close the connection   
        mysqli_close($conn); 
    
    }
?>