<?php
set_include_path("../../");
include "configs/autoload.php";
include "entity/Content.php";
$id=filter_input(INPUT_POST,"id");
$subject=filter_input(INPUT_POST,"subject");
$text=filter_input(INPUT_POST,"content");
if($user=$auth->hasIdentity()){
    $content= $em->getRepository("Content")->findOneBy(array("id"=>$id));
    $content->setSubject($subject);
    $content->setContent($text);
    $content->setModified(time());
    $em->persist($content);
    $em->flush();
    echo json_encode(array("status"=>"success"));
    var_dump($user);
}