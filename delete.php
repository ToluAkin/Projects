<?php
if (!isset($_SESSION['username'])){
    header("Location: signin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Green Scrapbook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-4.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top ">  
        <a class="navbar-brand" href="index.html">Green Scrapbook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">     
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="signup.html">Sign up</a>        
                </li>  
                <li class="nav-item">
                    <a class="nav-link " data-value="portfolio" href="signin.html">Log in</a>    
                </li>
            </ul>
        </div>
    </nav>
    <br><br><br><br>
    <div class="container">
        <?php
            include 'connection.php';
            $net= $_GET['id'];

            // sql to delete a record
            $sql = "DELETE FROM notes WHERE id=".$net;

            if (mysqli_query($conn, $sql)) {
                echo "<p>Note has been deleted.<a href='saved.php'> Back to notes.</a></p>";
            } else {
                echo "Error deleting entry: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        ?>
    </div>
    <br>
    <footer>
        <p>CONTACT US</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="www.twitter.com"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
        <p>All rights reserved. &copy; 2018 Green Scrapbook</p>
    </footer>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script> 
</body>
</html>
