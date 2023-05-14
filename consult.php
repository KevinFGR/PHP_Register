<?php

//<safe moment>
session_set_cookie_params(['httponly'=>true]); //avoid getting confidential information using JS.
session_start();
session_regenerate_id(true); //update the session
//</safe moment>

include('lib/functions.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="consultar.css" />
</head>
<body style="height:800px;">
<nav class="navbar navbar-expand-lg bg-primary position-fixed w-100" style="z-index:100;">
    <div class="container-fluid">
        <a class="navbar-brand  text-light">MySite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="width:100%;">

                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="consult.php">See logs</a>
                </li>
            </ul>
            <div class="d-flex text-light">
                <div class="me-3 p-1 icon-link icon-link-hover">
                    <?php name(); ?>
                </div>
                <button class="btn btn-primary btn-outline-light d-flex justfy-content-end" onclick="dbConfig()">DBConfig</button>
            </div>
        </div>
        
    </div>
</nav>

<div class="container text-primary-emphasis d-flex justify-content-center" style="padding-top:100px;">
    <h1>This page is being builded</h1>
</div>

<footer class="bg-secondary-subtle mt-5 p-4">
    <div class="card col-3">
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-secondary-subtle">
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://github.com/KevinFGR/PHP_and_SQL" target="_blank">
                Access project on GitHub</a></li>
          <li class="list-group-item bg-secondary-subtle">
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://github.com/KevinFGR" target="_blank">
                Access the developer's Github page </a></li>
          <li class="list-group-item bg-secondary-subtle">
            <a class="link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://linkedin.com/in/kevin-felipe-2b4678217" target="_blank">
                Access the developer's Linkedin page </a></li>
        </ul>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
</body>

</html>