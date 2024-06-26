<?php
require_once '../model/User.php';

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
}