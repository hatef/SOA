<?php
/**
 * @Entity @Table(name="users")
 */
class User
{
    /** @Id @Column (type="integer") @GeneratedValue */
    protected $id;

    /** @Column (type="string")  */
    protected $firstName;

    /** @Column (type="string") */
    protected $lastName;


    /** @Column (type="string") */
    protected $email;

    /** @Column (type="integer") */
    protected $created;

    /** @Column (type="integer",nullable=true) */
    protected $modified;

    /** @Column (type="string") */
    protected $password;
    // Setters
    public function setFirstName($firstName){
        $this->firstName=$firstName;
    }
    public function setLastName($lastName){
        $this->lastName=$lastName;
    }
    public function setCreated($created){
        $this->created=$created;
    }
    public function setModified($modified){
        $this->modified=$modified;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setPassword($password){
        $this->password=password_hash($password,PASSWORD_DEFAULT);
    }
    // Getters
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getCreated(){
        return $this->created;
    }
    public function getModified(){
        return $this->modified;
    }
    public function getId(){
        return $this->id;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }

    public function toObject(){
        $object=null;
        settype($object,"object");
        $object->firstName=$this->getFirstName();
        $object->lastName=$this->getLastName();
        $object->email=$this->getEmail();
        $object->password=$this->getPassword();
        $object->created=$this->getCreated();
        $object->modified=$this->getModified();

        return $object;
    }

}