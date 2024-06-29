<?php

require_once '../controller/UserController.php';
$user = new UserController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    switch($_POST['acao']){
        case 'login':
            $email = $_POST['email'];
            $password = $_POST['password'];
            $stmt = $user->login($email, $password);
            echo $stmt;
            if($stmt){
                header('location: /chat/view/home/');
            }
        break;
        case 'cadastrar':
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $stmt = $user->register($name, $email, $password);

            if($stmt){
                header('location:/');
            }
        break;
        case 'logout':
            session_start();
            session_destroy();
            header("location: /chat/");
        break;
    }
    


}