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
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
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
<br/><br/>

<div class="container p-5 ">
<h1>PHP_and_SQL </h1>
<p>Using PHP to interate with a database </p>

<h2>Requeriments</h2>

<ul>
<li>XAMPP.</li>
</ul>

<h2>How to run the code</h2>

<ol>
<li>Install XAMPP;</li>

<li>In your computer's folder that was created by XAMPP installation. Open the git bash at xampp/htdocs directory and run the following code: <br/>
    <button type="button" id="btn-git"  class="btn btn-primary m-2 col-6 d-flex justify-content-between p-3" value="git clone https://github.com/KevinFGR/PHP_and_SQL.git"> <!--onclick='copy("btn-git");'-->
        <span>git clone https://github.com/KevinFGR/PHP_and_SQL.git </span>
        <span class="badge text-bg-light"><img src="img/copy.png" id="img1"alt="copy" height="15px"></span>
    </button>
</li>

<li>Open the XAMPP painel and turn on Apache and MySQL;</li>

<li>Go to PHPMyAdmin URL and create a database called Register_DataBase<br/>
    <button type="button" id="btn-admim"  class="btn btn-primary m-2 col-6 d-flex justify-content-between p-3" value="localhost/phpmyadmin"> <!--onclick='copy("btn-admim")'-->
        <span>localhost/phpmyadmin </span>
        <span class="badge text-bg-light"><img src="img/copy.png" id="img2"alt="copy" height="15px"></span>
    </button>
</li>
<li>Access the index page of the site and press the button DBConfig at the top right side.<br/>
    <button type="button" id="btn-directory"  class="btn btn-primary m-2 col-6 d-flex justify-content-between p-3" value="localhost/php_and_sql/"> <!--onclick='copy("btn-directory")'-->
        <span>localhost/php_and_sql/ </span>
        <span class="badge text-bg-light"><img src="img/copy.png" id="img3"alt="copy" height="15px"></span>
    </button>
</li>

<li>After the configuration finish return to the index page and make your register</li>
</ol>

<h2>Some prints of the site</h2>
<div class="container">

<div id="carouselExampleRide" class="carousel carousel-dark slide border" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src='https://github.com/KevinFGR/PHP_and_SQL/assets/109561598/6c2d4a5b-de6c-4a68-a248-d6c9fe399a9e' class=" w-100" alt="print-1">
    </div>
    <div class="carousel-item">
      <img src='https://github.com/KevinFGR/PHP_and_SQL/assets/109561598/043b8df6-6935-4d50-baa3-ca36ea89b5e7' class=" w-100" alt="print-2">
    </div>
    <div class="carousel-item">
      <img src='https://github.com/KevinFGR/PHP_and_SQL/assets/109561598/e5813fd9-125d-476a-baa1-cb9f63f86ad9' class=" w-100" alt="print-3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>

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


<script src="scripts/index.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</body>
</html>