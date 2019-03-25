<?php

require 'vendor/autoload.php';


$client = new \GuzzleHttp\Client([
    'verify' => false
]);

$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/users');


$users = json_decode($response->getBody()); 

$collection = new App\UsersCollection($users);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ul> 
    <?php foreach ($users as $user ) : ?>
    <li> <?php echo 'Nombre: '.$user->name; ?> </li>
    <li> <?php echo 'Email: '.$user->email; ?>  </li>
    <li> <?php echo 'Calle: '.$user->address->street; ?> </li>
    <li> <?php echo 'Departament: '.$user->address->suite; ?> </li>
    <li> <?php echo 'Cuidad: '.$user->address->city; ?> </li>
    <li> <?php echo 'Codigo postal: ('.$user->address->zipcode.')'; ?> </li>
    <li> <?php echo 'Latitud: '.$user->address->geo->lat; ?> </li>
    <li> <?php echo 'Longitud: '.$user->address->geo->lng?> </li> <br>
    <?php endforeach; ?>
</ul>

</body>
</html>

