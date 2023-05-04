<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
</head>
<script src="index.js"></script>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand  text-light">Register</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="index.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="consultar.php">See logs</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br/><br/><br/>

<div class="container d-flex justify-content-center p-4 bg-white col-5 border border-2 border-primary-subtle rounded-4">
    <form class="col-10" method="POST" action="newUser.php" name = "formRegister">
        <div class="mb-3" id="divFirstName">
            <label for="first-name" class="form-label">First name</label>
            <input type="text" class="form-control" id="first-name" maxlength="20" autofocus/>
        </div>
        <div class="mb-3" id="divLastName">
            <label for="last-name" class="form-label">Last name</label>
            <input type="text" class="form-control" id="last-name" maxlength="50"/>
        </div>
        <div class="mb-3" id="divEmail">
            <label for="Email" class="form-label" >Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" maxlength="50"/>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3" id="divPass1">
            <label for="InputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="InputPassword1" maxlength="50"/>
        </div>
        <div class="mb-3" id="divPass2">
            <label for="InputPassword2" class="form-label">Confirm password</label>
            <input type="password" class="form-control" id="InputPassword2" maxlength="50"/>
        </div>
        <div class="mb-3" id="divBornDate">
            <label for="borndate" class="form-label">Born date</label>
            <input type="date" class="form-control" id="borndate"/>
          </div>
        <div class="mb-3 form-check" id="check">
            <input type="checkbox" class="form-check-input" id="Check1"/>
            <label class="form-check-label" for="Check1">Check me for continue</label>
        </div>
        <button type="button" class="btn btn-primary" onClick="verify()">Submit</button>
    </form>
</div>

<footer class="bg-secondary-subtle mt-5 p-4">
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-secondary-subtle"><a class="link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="">Access project on GitHub</a></li>
          <li class="list-group-item bg-secondary-subtle"><a class="link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="github.com/KevinFGR"> Access the page's creator GitHub</a></li>
        </ul>
      </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</body>

</html>