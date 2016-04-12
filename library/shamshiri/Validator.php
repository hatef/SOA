<?php

/**
 * Created by PhpStorm.
 * User: hatef
 * Date: 1/17/16
 * Time: 11:41 PM
 */
class Validator
{
    private $messages=[];
    private $usernameCount;
    private $passwordCount;

    const USERNAME_COUNT="username_count";
    const PASSWORD_COUNT="password_count";

    const TYPE_EMAIL="email";
    const TYPE_NAME="name";
    const TYPE_USERNAME="username";
    const TYPE_PASSWORD="password";

    const EMPTY_VALUE="empty";
    const INVALID="invalid";
    const NOT_MATCH="not_match";
    const SHORT="short";

    public function validate($data,$type){
        //$data=$this->checkData($data[1]);
        switch($type){
            case Validator::TYPE_EMAIL:
                $this->email($data);
                break;
            case Validator::TYPE_NAME:
                $this->name($data);
                break;
            case Validator::TYPE_USERNAME:
                $this->username($data);
                break;
            case Validator::TYPE_PASSWORD:
                $this->password($data);
                break;
        }
    }

    private function email($data){
        $this->isEmpty($data);
        if(!filter_var($data[1],FILTER_VALIDATE_EMAIL)){
            $this->messages[$data[0]]=Validator::INVALID;
        }
    }
    private function isEmpty($data){
        if(empty($data[1])){
            $this->messages[$data[0]]=Validator::EMPTY_VALUE;
        }
    }
    private function name($data){
        $this->isEmpty($data);
        if (!preg_match("/^[a-zA-Z ]*$/",$data[1])) {
            $this->messages[$data[0]]=Validator::INVALID;
        }
    }
    private function username($data){
        $this->isEmpty($data);
        if(strlen($data[1])<$this->usernameCount){
            $this->messages[$data[0]]=Validator::SHORT;
        }

    }
    private function password($data){
        $this->isEmpty($data);
        if(strlen($data[1])<$this->passwordCount){
            $this->messages[$data[0]]=Validator::SHORT;
        }
        if($data[1]!=$data[2]){
            $this->messages[$data[0]]=Validator::NOT_MATCH;
        }
    }
    private function checkData($data){
        $data[1]=trim($data[1]);
        $data[1]=stripslashes($data[1]);
        $data[1]=htmlspecialchars($data[1]);
        return $data;
    }
    public function isValid(){
        if(count($this->messages)>0){
            return false;
        }
        else{
            return true;
        }
    }

    public function setCount($count,$flag){
        switch($flag){
            case Validator::USERNAME_COUNT:
                $this->usernameCount=$count;
                break;
            case Validator::PASSWORD_COUNT:
                $this->passwordCount=$count;
                break;
        }
    }
    public function getMessages(){
        return $this->messages;
    }
}