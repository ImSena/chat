<?php

require_once 'Database.php';

class User{
    private $pdo;

    public function __construct(){
        $database = new Database();
        $this->pdo = $database->getConnection();
    }

    public function create($nome, $email, $senha){
        $sql = 'INSERT INTO tab_users(nome, email, senha) VALUES (:nome, :email, :senha)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':nome' => $nome,
            ':email'=>$email,
            ':senha'=>$senha
        ]);

        return $this->pdo->lastInsertId();
    }

    public function read($email){
        $sql = 'SELECT id_user,senha  from tab_users WHERE email = :email';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':email' => $email,
        ]);
        $user = $stmt->fetch();

        return $user;
    }
}