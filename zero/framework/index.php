<?php
 
require 'src/InterfaceController.php';
require 'src/NameController.php';
require 'src/EmailController.php';
require 'src/EdadController.php';

$name = new NameController();
$email = new EmailController();
$edad = new EdadController();

//constante??

$name[NameController.php]->get();
$name[NameController.php]->post();
$email[EmailController.php]->get();
$email[EmailController.php]->post();
$edad[EdadController.php]->get();
$edad[EdadController.php]->post();
 
?>
//html:5

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
