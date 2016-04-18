<?php
function login($email,$password,$em){
    $users=$em->getRepository("User");
    $user=null;
    $result=array();
    if($email!=""&&$password!="") {
        $user = $users->findOneBy(array("email" => $email));
        if(password_verify($password,$user->getPassword())){
            if($_SESSION["email"]!=null &&$_SESSION["password"]!==null) {
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $password;
            }
            return $user;

        }
        else{
            $result=array("result"=>array("success"=>false,"valid"=>true));
            echo json_encode($result);
            return false;
        }
    }
    else{
        $result=array("result"=>array("valid"=>false,"success"=>false));
        echo json_encode($result);
        return false;
    }


    echo json_encode($result);

}
