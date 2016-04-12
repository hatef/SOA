<?php

/**
 * Created by PhpStorm.
 * User: hatef
 * Date: 1/17/16
 * Time: 10:11 PM
 */
class Security
{
    public function encrypt($string){
        if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
            $salt = '$2y$11$' . substr(md5(uniqid(rand(), true)), 0, 22);
            return crypt($string, $salt);
        }
    }
    public function verify($string,$hashedString){
        return crypt($string,$hashedString)==$hashedString;
    }
}