# crud
A simple crud system

The main purpose of this CRUD is show a simple implementation .
The important files is only:

1. crud.class.php
2. connect.class.php
3. Classes files used in project here I put only **User.class.php** as example.
 
Others files on this repository as: **example-insert.php** and **example-login.php** is only example showing to to implement it.

The code in this repository is ready to use, just Copy and Paste, feel free to improve this code and help de community.

## How to Implement
I show a example, I'm using login example file in repository:

> require_once 'connect.class.php';

>$pdo = new CRUD;

>// the code above create a instance of a class created previously [look here the tool](https://github.com/povman/crudclassgenerator)

>$user = new User;

> // here call de function to login in User class

>$user->logar($_POST['username'],$_POST["password"]);

I believe this repository will help to understand this principles.

My regards,
Fabio Moraes
