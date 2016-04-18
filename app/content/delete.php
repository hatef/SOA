<?php
set_include_path("../../");
include "configs/autoload.php";
include "entity/Content.php";

$id=filter_input(INPUT_GET,"id");
$content=$em->getRepository("Content")->findOneBy(array("id"=>$id));

    $em->remove($content);
    echo json_encode(array("deleted"=>true));
