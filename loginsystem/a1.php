<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_fconnect.php';
    $name = $_POST["name"];
    $scientific_name = $_POST["scientific_name"];
    $population_trend = $_POST["population_trend"];
    $red_list = $_POST["red_list"];
    $establishment = $_POST["establishment"];
    $exists=false;
    if ($exists == false) {
        $sql = "INSERT INTO `amphibian` ( `name`, `scientific_name`, `population_trend`, 'red_list', 'establishment') VALUES ('$name', '$scientific_name', '$population_trend', '$red_list', '$establishment')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
        }
    }
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

    <title>Amphibians data entry</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>

    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Table was updated successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

<div class="container my-4">
     <h1 class="text-center">Amphibians</h1>
     <form action="/loginsystem/a1.php" method="post">
        <div class="form-group">
            <label for="name">NAME</label>
            <input type="text" class="form-control" id="name" name="name">
            
        </div>
        <div class="form-group">
            <label for="scientific_name">SCIENTIFIC NAME</label>
            <input type="text" class="form-control" id="scientific_name" name="scientific_name">
        </div>
        <div class="form-group">
            <label for="population_trend">POPULATION TREND</label>
            <input type="text" class="form-control" id="population_trend" name="population_trend">
        </div>
        <div class="form-group">
            <label for="red_list">RED LIST</label>
            <input type="text" class="form-control" id="red_list" name="red_list">
        </div>
        <div class="form-group">
            <label for="establishment">ESTABLISHMENT</label>
            <input type="text" class="form-control" id="establishment" name="establishment">
        </div>
       
         
        <button type="submit" class="btn btn-primary">ENTER</button>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
