<?php
set_include_path("../../");
include "configs/autoload.php";
include "entity/Content.php";
echo var_dump($_POST);
$text=filter_input(INPUT_POST,"content");
$subject=filter_input(INPUT_POST,"subject");
$content=new Content();
$user=null;

if($user=$auth->hasIdentity()){

    if($text!=null&&$subject!=null) {
        $content->setContent($text);
        $content->setSubject($subject);
        $content->setUserID($user->getId());
        $content->setCreated(time());
        $em->persist($content);
        $em->flush();

        echo json_encode(array("status" => "created", "authenticated" => true));
    }
}
else{
    echo json_encode(array("status"=>"invalid","authenticated"=>false));
}
