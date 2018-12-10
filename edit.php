<?php
    
    session_start();
    include 'medium.php';
    include 'connection.php';
?>

<?php
    
    $net= $_GET['id'];

    $sql = "SELECT title, note FROM notes WHERE id=".$net;
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        echo $row['id'];
    } else {
        echo "Error:" . mysqli_error($conn);
    }

    mysqli_close($conn);
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
        <a class="nav-link" data-value="save" href="saved.php">Saved notes</a>  
        <a class="nav-link" data-value="add" href="add.html">Add note</a>        
        <div class="collapse navbar-collapse " id="navbarSupportedContent">     
            <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="nav-item">
                    <a class="nav-link" data-value="signin" href="#"><?php echo "Welcome" . " " .$_SESSION["email"]. " "; ?></a>       
                </li>  
                <li class="nav-item">
                    <a class="nav-link " data-value="logout" href="logout.php">Log out</a>    
                </li>
            </ul>
        </div>
    </nav>
    <br><br><br>
    <div class="container">
        <form style="width: 100%; margin-left: 10%; " method="POST" action="replace.php">
            <input name="title" type="text" id="title" class="form-control col-md-3" value ="<?php echo $row['title'] ?>" placeholder="Title" required="" autofocus="">
            <input type="hidden" name="id" value="<?php echo $net; ?>">
            <br>
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-5 col-md-9" input name="note"  id="exampleFormControlTextarea6" rows="30" placeholder="Type here..."><?php echo $row['note'] ?></textarea>
            </div>
            <br><br>
            <input style="margin-left: 43%; " name="submit" type="submit" class="btn btn-lg btn-success" value="Save">
        </form>
    </div>
    <br>
    <footer>
        <p>CONTACT US</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
        <p>All rights reserved. &copy; 2018 Green Scrapbook</p>
    </footer>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script> 
</body>
</html>