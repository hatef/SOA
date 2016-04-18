<?php
session_start();
set_include_path("../../");
include "entity/Content.php";
include "../auth/login.php";
echo var_dump($_POST);
$text=filter_input(INPUT_POST,"content");
$subject=filter_input(INPUT_POST,"subject");
$content=new Content();
$email=filter_input(INPUT_POST,"email");
$password=filter_input(INPUT_POST,"password");
if($user=login($email,$password,$em) || login($_SESSION["email"],$_SESSION["password"],$em)){

    if($text!=null&&$subject!=null) {
        $content->setContent($text);
        $content->setSubject($subject);
        $content->setUserID($user->getId());
        $content->setCreated(time());
        $em->persist($content);
        $em->flush();

        echo json_encode(array("result"=>array("status" => "created", "authenticated" => true)));
    }
}
else{
    echo json_encode(array("result"=>array("status"=>"invalid","authenticated"=>false)));
}
