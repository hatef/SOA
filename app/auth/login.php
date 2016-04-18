<?php


@session_start();
set_include_path("../../");
include "configs/autoload.php";
include "library/shamshiri/functions/login.php";

    $email=filter_input(INPUT_POST,"email");
    $password=filter_input(INPUT_POST,"password");


login($email,$password,$em);