<?php
set_include_path("../../");
//includes
include "configs/database.php";
include "configs/view.php";
include "entity/User.php";
include "library/shamshiri/Validator.php";
include "library/shamshiri/Security.php";
//filter variables
$firstName=filter_input(INPUT_POST,"first_name");
$lastName=filter_input(INPUT_POST,"last_name");
$username=filter_input(INPUT_POST,"username");
$password=filter_input(INPUT_POST,"password");
$email=filter_input(INPUT_POST,"email");
$confirmPassword=filter_input(INPUT_POST,"confirm_password");
$sign_up=filter_input(INPUT_POST,"sign_up");

$user = new User();
$user->setFirstName($firstName);
$user->setLastName($lastName);
$user->setPassword($password);
$user->setEmail($email);
$user->setCreated(time());


if($password!=$confirmPassword){
    echo json_encode(["result"=>["valid"=>"false","code"=>"password_not_match"]]);
}else{
    $em->persist($user);
    $em->flush();
    echo json_encode(["result"=>["valid"=>"true","code"=>"success"]]);
}

