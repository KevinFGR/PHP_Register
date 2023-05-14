<?php
//<safe moment>
session_set_cookie_params(['httponly'=>true]); //avoid getting confidential information using JS.
session_start();
session_regenerate_id(true); //update the session
//</safe moment>
 include_once('lib/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>
</head>
<body>
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
    
</body>
</html>