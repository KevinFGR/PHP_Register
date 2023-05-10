<?php 
//<safe moment>
session_set_cookie_params(['httponly'=>true]); //avoid getting confidential information using JS.
session_start();
session_regenerate_id(true); //update the session
//</safe moment>
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
</head>
<script src="index.js"></script>
<body>

<?php
/*
//verifying if there's already a session
function home(){
    $vEmail = isset($_SESSION['email']);
    $vPass = isset($_SESSION['pass']); 
    if ($vEmail && $vPass){
        echo '<script type=javascript> window.location.href="home.php";</script>';
        echo $_SESSION['pass'];
    }
}
*/
?>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand  text-light">Register</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="width:100%;">

                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="index.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="consult.php">See logs</a>
                </li>
            </ul>
            <button class="btn btn-primary btn-outline-light d-flex justfy-content-end" onclick="dbConfig()">DBConfig</button>
        </div>
        
    </div>
</nav>
<br/><br/><br/>

<div class="container d-flex justify-content-center p-4 bg-white col-5  rounded-4 border border-2 shadow">
    <form class="col-10" method="POST" action="newUser.php" name = "formRegister">
        <div class="mb-3" id="divFirstName">
            <label for="fName" class="form-label">First name</label>
            <input type="text" class="form-control" id="fName" name="fName" maxlength="20" autofocus required/>
        </div>
        <div class="mb-3" id="divLastName">
            <label for="lName" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lName" name="lName" maxlength="50" required/>
        </div>
        <div class="mb-3" id="divEmail">
            <label for="Email" class="form-label" >Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" maxlength="50" required/>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3" id="divPass1">
            <label for="pass1" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass1" name="pass1" maxlength="50" required/>
        </div>
        <div class="mb-3" id="divPass2">
            <label for="pass2" class="form-label">Confirm password</label>
            <input type="password" class="form-control" id="pass2" maxlength="50" required/>
        </div>
        <div class="mb-3" id="divBornDate">
            <label for="bornDate" class="form-label">Born date</label>
            <input type="date" class="form-control" id="bornDate" name="bornDate"/>
          </div>
        <div class="mb-3 form-check" id="check">
            <input type="checkbox" class="form-check-input" id="Check1" name="check1" value="true"/>
            <label class="form-check-label" for="Check1">Check me for continue</label><br/>
        </div>
        <button type="button" class="btn btn-primary" onclick=verify()>Submit</button>
    </form>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</body>
</html>