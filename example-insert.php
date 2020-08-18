<?php 

require_once 'connect.class.php';

$pdo = new CRUD;

// Basic verification 

foreach($_POST as $values){
    if(strlen($values) === 0)return false;
}

if($_POST["password"] !== $_POST['password2'])return false;
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))return false;


// Inserting data

$user = new User;
$user->create($_POST['name'],$_POST['username'],$_POST['password'],$_POST['email'],$_POST['date']);

?>
