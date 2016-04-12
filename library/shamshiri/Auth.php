<?php
/**
 * Created by PhpStorm.
 * User: hatef
 * Date: 2/16/16
 * Time: 9:13 AM
 */
class Auth
{
    private $em;
    public function __construct(\Doctrine\ORM\EntityManager $em)
    {
        $this->em=$em;
    }

    public function hasIdentity(){

        session_start();
        $email=$_SESSION["email"];
        $password=$_SESSION["password"];
        $user=new User();
        if($password!=""&&$email!=null) {
            $user = $this->em->getRepository("User")->findOneBy(array("email" => $email));
        }
        else{
            return false;
        }
        if($user->getEmail()&&$user->getPassword()){
            if($user->getPassword()==$password){
                return $user;
            }

        }
    }
}