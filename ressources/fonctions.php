<?php

require_once "bdd.php";

function get_users(){
    $bdd = new BDD;
    $bdd = $bdd->get_bdd();

    $select = $bdd->prepare("SELECT * FROM user");
    $select->execute();
    $users = $select->fetchAll(PDO::FETCH_ASSOC);

    return $users;
}

function get_user(string $username){
    $bdd = new BDD;
    $bdd = $bdd->get_bdd();

    $select = $bdd->prepare("SELECT * FROM user WHERE username = ?");
    $select->execute([$username]);
    $user = $select->fetch();

    return $user;
}

function test_login(string $username, string $password){
    $bdd = new BDD;
    $bdd = $bdd->get_bdd();

    $users = get_users();
    foreach ($users as $user){
        if ($user['username'] === $username && password_verify($password, $user['password'])){
            return true;
        }
    }

    return false;
}

function check_username(string $username){
    $users = get_users();
    foreach($users as $user){
        if ($username === $user['username']){return false;}
    }

    return preg_match("/^[a-zA-Z0-9_-]+$/", $username);
}

function create_account(string $username, string $password, string $email){
    $bdd = new BDD;
    $bdd = $bdd->get_bdd();

    $column = "";
    $value = "";
    if ($email != ""){
        $column = ", email";
        $value = ", ?";
    }

    $insert = $bdd->prepare("INSERT INTO user (username, `password`$column) VALUES (?, ?$value);");
    $parameters = [$username, password_hash($password, PASSWORD_BCRYPT)];
    if ($email != ""){array_push($parameters, $email);}
    $insert->execute($parameters);
}