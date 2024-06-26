<?php

require_once '../controller/UserController.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new UserController();

    $stmt = $user->register($name, $email, $password);

    if($stmt !== false){
        echo 'cadastrado com sucesso';
    }


}