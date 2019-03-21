<?php

session_start();

//print_r($_SESSION);

//echo session_id();


require 'User.php';
require 'Request.php';


$user = new User();
$request = new Request();

if (! empty($_POST)){
    $user
    ->setEmail($request->get('email'))
    ->setPassword($request->get('password'));
    if ($request->get('remember')) {
        $user->remember();

    }
    var_dump($user);
}

//var_dump($user);
//print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        <input type = "text" placeholder = "Email" name = "email"><br>
        <input type = "text" placeholder = "Password" name = "password"><br>
        <input type = "checkbox" name = "remember"> Recordarme en este equipo<br>
        <button>Login</button><br>
    </form>
</body>
</html>
