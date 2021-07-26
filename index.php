<?php

require_once './vendor/autoload.php';

class Person
{
    public string $firstName;
    public string $lastName;
}

$jeanPierre = new Person();
$jeanPierre->firstName = 'Jean-Pierre';
$jeanPierre->lastName = 'Martin';

dump($jeanPierre);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Ça marche!!!</p>
</body>
</html>