<?php
include __DIR__."/../library/view/vendor/autoload.php";

$loader=new Twig_Loader_Filesystem(__DIR__.'/../view/');

$twig=new Twig_Environment($loader,['cache'=>__DIR__.'/../data/cache']);
