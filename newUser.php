<?php


//<safe moment>
session_set_cookie_params(['httponly'=>true]); //avoid getting confidential information using JS.
session_start();
session_regenerate_id(true); //update the session
//</safe moment>

include("connection.php");

if ($_POST['fName'] && $_POST['lName'] && $_POST['email'] && $_POST["bornDate"] && $_POST['pass1'] && $_POST['check1']){
    // verifyes if the form was answered correctly to avoid errors
    $fName = $_POST['fName'];
    $lName= $_POST['lName'];
    $email= $_POST['email'];
    $bornDate = $_POST["bornDate"];
    $pass= $_POST['pass1'];
    $check= $_POST['check1'] == true ? 1 : 0;

    

    $list = array($fName,$lName,$email, $check);

    $sql = 'INSERT INTO users (f_name, l_name, email, born_date, pass, checked) VALUES ("'.$fName.'","'.$lName.'","'.$email.'","'.$bornDate.'","'.$pass.'","'.$check.'");';

    $validation = true;
    if ($list[3] != 0){
        foreach($list as $i){ 
            $validation = $i == '' ? false: true;
        }
    }
    else{ $validation = false; }


    if ($validation == true){ 
        //mysqli_query($connection,$sql);
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;
        echo 'SESSION on';
    } 
    else{
        echo 'not SESSION';
    }
    mysqli_close($connection);

    foreach($_SESSION as $i){
        echo $i;
    }
}



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" >

    <title>Register</title>

</head>

<body>
<div class="container d-flex align-items-center" style="height: 500px;">
    <div class="container col-4 row-4 border border-primary-subtle rounded p-4 h-50">
        <h2>Congrats!</h2>
        <p> Now you're register in our data base</p>
        <hr/>
        <p>Click in the following button to acces the consulting page</p>
        <a href="consult.php">
            <button class='btn btn-primary'>Consulting</button>
        </a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</body>
</html>