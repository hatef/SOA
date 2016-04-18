
<?php

set_include_path("../../");
include "entity/Content.php";
include "../auth/login.php";
$id=filter_input(INPUT_GET,"id");
$userId=filter_input(INPUT_GET,"userId");

$email=filter_input(INPUT_POST,"email");
$password=filter_input(INPUT_POST,"password");

if($user=login($email,$password,$em) || login($_SESSION["email"],$_SESSION["password"],$em)){
    if(!$id){
        $contents=$em->getRepository("Content")->findBy(["userId"=>$user->getId()]);
        $serializedContent=array();
        foreach($contents as $content){
            $serializedContent[]=$content->toObject();
        }
        echo json_encode(array("result"=>$serializedContent));
    }
    else{
        $contents=$em->getRepository("Content")->findOneBy(array("id"=>$id));

        echo json_encode(array("result"=>$contents->toObject()));
    }
}