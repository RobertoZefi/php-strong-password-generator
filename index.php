<?php

include 'functions.php';

/* function randomPassword() {
    $password_length = isset($_GET['length']) ? $_GET['length'] : null;
    $char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?#£$&';
    $password = []; 
    for ($i = 0; $i < $password_length; $i++) {
        $n = rand(0, strlen($char) - 1);
        $password[] = $char[$n];
    }
    return implode($password); 
} */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container text-center pb-5 pt-5">
        <h1>Strong Password Generator</h1>
        <h2>Genera Una Password Sicura</h2>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-8">
            <form action="" method="GET" class="d-flex justify-content-between">
                <p>Lunghezza password: </p>
                <div>
                    <input type="number" name="length">
                    <input type="submit">
                </div>
            </form>

            <h3 class="text-center pt-3"><?php echo randomPassword(); ?></h3>
        </div>

    </div>

</body>
</html>