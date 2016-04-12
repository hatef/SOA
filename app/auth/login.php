<?php
set_include_path("../../");
include "configs/database.php";
include "configs/view.php";
include "entity/User.php";

switch($_SERVER['REQUEST_METHOD']){
    case "POST":
    $email=filter_input(INPUT_POST,"email");
    $password=filter_input(INPUT_POST,"password");
    $users=$em->getRepository("User");
    $user=null;
     $result=array();
    if($email!=""&&$password!="") {
        $user = $users->findOneBy(array("email" => $email));
        if(password_verify($password,$user->getPassword())){
            $result=array("success"=>true);
            session_start();
            $_SESSION["userid"]=$user->getId();
            $_SESSION["email"]=$user->getEmail();
            $_SESSION["password"]=$user->getPassword();
        }
        else{
            $result=array("success"=>false,"valid"=>true);
        }
    }
    else{
        $result=array("valid"=>false,"success"=>false);
    }


    echo json_encode($result);
        break;
    case "GET":

        break;
}

