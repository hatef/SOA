<?php
set_include_path("../../");
include "configs/autoload.php";


$email=filter_input(INPUT_POST,"email");
$password=filter_input(INPUT_POST,"password");


$users=$em->getRepository("User");
$user=null;
$result=array();
if($email!=""&&$password!="") {
    $user = $users->findOneBy(array("email" => $email));
    if(password_verify($password,$user->getPassword())){
        $result=array("success"=>true);

        $userRecords=$users->findAll();

        echo json_encode(serializeDoc($userRecords));

    }
    else{
        $result=array("success"=>false,"valid"=>true);
    }
}
else{
    $result=array("valid"=>false,"success"=>false);
}


echo json_encode($result);



function serializeDoc($data){

}