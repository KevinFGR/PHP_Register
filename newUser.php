<?php
//connectiong to data base

$serv = 'localhost';
$user = 'root';
$pass = '';
$db = 'database';
 // a linha abaixo está dando erro
global $connection = mysqli_connect($serv,$user,$pass,$db);

if(!$connection){
    die('Flaha ao conectar com o banco de dados' . mysqli_connect_error());
}

?>


<?php
//include_once("connection.php");

$fName = $_POST['fName'];
$lName= $_POST['lName'];
$email= $_POST['email'];
$bornDate = $_POST["bornDate"];
$pass= $_POST['pass1'];
$check= $_POST['check'] == 'on' ? true : false;

$sql = "INSERT INTO users (f_name, l_name, email, born_date, pass, checked) VALUES (".$fName.','.$lName.','.$email.','.$bornDate.','.$pass.','.$check.');';

$query = mysqli_query($connection,$sql);
$mysqli_close($connection);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <p><?php echo $fName;?></p>
    </div>
</body>
</html>