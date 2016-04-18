<?php

session_start();
set_include_path("../../");
include "configs/autoload.php";


    $email=filter_input(INPUT_POST,"email");
    $password=filter_input(INPUT_POST,"password");

function login($email,$password,$em){



    $users=$em->getRepository("User");
    $user=null;
    $result=array();
    if($email!=""&&$password!="") {
        $user = $users->findOneBy(array("email" => $email));
        if(password_verify($password,$user->getPassword())){
            $_SESSION["email"]=$email;
            $_SESSION["password"]=$password;
            return $user;

        }
        else{
            $result=array("result"=>array("success"=>false,"valid"=>true));
            return false;
        }
    }
    else{
        $result=array("result"=>array("valid"=>false,"success"=>false));
        return false;
    }


    echo json_encode($result);

}

login($email,$password,$em);