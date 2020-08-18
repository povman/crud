<?php  
require_once 'connect.class.php';

$pdo = new CRUD;

foreach ($_POST as $values){
    if(strlen($values) === 0)return false;
}

$user = new User;
$user->logar($_POST['username'],$_POST["password"]);

if( $user->isLogado()) {
    echo "Logged as  : " . $user->getUsername();
}else{
    echo "Wrong User or Password.";
}

?>
