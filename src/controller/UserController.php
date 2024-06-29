<?php
require_once '../model/User.php';
session_start();

class UserController{

    private $user;

    public function __construct(){
        $this->user = new User();
    }


    public function register($name, $email, $password){
        if(isset($_POST)){
            $this->user->create($name,$email, $password);

        }
    }

    public function login($email, $password){
        $login = true;
        if(isset($_POST)){
            $dataUser = $this->user->read($email);

            if($dataUser['senha'] == $password){
                $_SESSION['id_usuario'] = $dataUser['id_user'];
                $login = false;
            }

            return $login;
        }
    }
}