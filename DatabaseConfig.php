<?php
include_once('lib/connection.php')

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>DataBase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand  text-light">MySite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="width:100%;">

                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="consult.php">See logs</a>
                </li>
            </ul>
            <button class="btn btn-primary btn-outline-light d-flex justfy-content-end" onclick="dbConfig()">DBConfig</button>
        </div>
        
    </div>
</nav>

<div class="container ml-4">
<h2>Configurating Database ... </h2>

<?php

$TabelaSQL = "CREATE TABLE users (id int PRIMARY KEY AUTO_INCREMENT,
                                 f_name varchar(20),
                                 l_name varchar(100),
                                 email varchar(100),
                                 born_date date,
                                 pass varchar (100),
                                 checked boolean);";
                                 
$create = mysqli_query($connection, $TabelaSQL);

if ($create == 1){
    echo "<h3>DataBase successfully cunfigured</h3>"; }
else{
    echo "<h3>Something went wrong. veriry if the DB is already configured.</h3>"; }

mysqli_close($connection);
?>
</div>

</body>
</html>


