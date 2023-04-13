<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Josefin+Slab:wght@100&family=Open+Sans&family=PT+Sans+Narrow&family=Sacramento&family=Sevillana&family=Source+Sans+Pro:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="welcome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <title>Forest Database</title>

  </head>
  <body>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    <section class="header">
        <nav>
            <a href="welcome.php"><img src="f1.png" alt="LOGO"></a>
            <div class="navlink">
                <!-- <i class="fa fa-times"></i> -->
                <ul>
                    <li><a href="login.php">Log out</a></li>
                    <!-- <li><a href="Signup.html" target="_blank">SIGNUP</a></li> -->
                </ul>
            </div>
            <!-- <i class="fa fa-bars"></i> -->

        </nav>
        <div class="textbox">
            <h1>FOREST DATABASES</h1>
            <p>“If you love a tree you will be more beautiful than before!” – Amit Ray</p>
            <a href="options.php" target="_blank" class="herobtn">Let's go!</a>
            <!-- <a href="Signup.html" target="_blank" class="herobtn">SIGNUP</a> -->

        </div>

    </section>

  </body>
</html>
