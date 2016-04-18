
<?php
@session_start();
ini_set("allow_url_include",1);
set_include_path("../../");
include "configs/autoload.php";
include "library/shamshiri/functions/login.php";
include "entity/Content.php";

$id=filter_input(INPUT_GET,"id");
$userId=filter_input(INPUT_GET,"userId");

$email=filter_input(INPUT_POST,"email");
$password=filter_input(INPUT_POST,"password");
if($_SESSION["email"]!=null&&$_SESSION["password"]!=null){
    $user=login($_SESSION["email"],$_SESSION["password"],$em);
}
else{
    login($email,$password,$em);
}
if($user){
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