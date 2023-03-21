<?php

$password_length = isset($_GET['length']) ? $_GET['length'] : null;
$char = ['abcdefghijklmnopqrstvwxyz1234567890!?#£$&'];
$password = [];
var_dump($password);
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
    <form action="" method="GET">
        <input type="number" name="length">
        <input type="submit">
    </form>

    <h1>
    <?php 
    for($i = 0; $i < $password_length; $i++){
        foreach($char as $el){
            return $password[] = $el;
        }
    }

    echo $password;
    ?>
    </h1>
</body>
</html>