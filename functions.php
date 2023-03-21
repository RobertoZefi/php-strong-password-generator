<?php

function randomPassword() {
    $password_length = isset($_GET['length']) ? $_GET['length'] : null;
    $char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?#£$&';
    $password = []; 
    for ($i = 0; $i < $password_length; $i++) {
        $n = rand(0, strlen($char) - 1);
        $password[] = $char[$n];
    }
    return implode($password); 
}

?>
