<?php
function sessionExist(){
    $vEmail = isset($_SESSION['email']);
    $vPass = isset($_SESSION['pass']);
    $vName = isset($_SESSION['name']);
    if ($vEmail && $vPass && $vName){
        return true; }
    else{ return false; }
}
function name(){
    if(sessionExist()){
    echo $_SESSION['name']; }
    else{ 
        echo "<a class='nav-link text-light' href='register.php'>Login</a>"; }
}
?>