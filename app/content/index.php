
<?php

set_include_path("../../");
include "configs/autoload.php";
include "entity/Content.php";

$id=filter_input(INPUT_GET,"id");
if(!$id){
    $contents=$em->getRepository("Content")->findAll();
    $serializedContent=array();
    foreach($contents as $content){
        $serializedContent[]=$content->toObject();
    }
    echo json_encode($serializedContent);
}
else{
    $contents=$em->getRepository("Content")->findOneBy(array("id"=>$id));

    echo json_encode($contents->toObject());
}
