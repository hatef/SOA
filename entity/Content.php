<?php
/**
 * @Entity @Table(name="contents")
 */
class Content
{
    /** @Id @Column (type="integer") @GeneratedValue */
    protected $id;

    /** @Column (type="text")  */
    protected $subject;

    /** @Column (type="text") */
    protected $content;


    /** @Column (type="string") */
    protected $userId;

    /** @Column (type="integer") */
    protected $created;

    /** @Column (type="integer",nullable=true) */
    protected $modified;


    // Setters
    public function setSubject($subject){
        $this->subject=$subject;
    }
    public function setContent($content){
        $this->content=$content;
    }
    public function setCreated($created){
        $this->created=$created;
    }
    public function setModified($modified){
        $this->modified=$modified;
    }
    public function setUserID($userID){
        $this->userId=$userID;
    }
    // Getters
    public function getSubject(){
        return $this->subject;
    }
    public function getContent(){
        return $this->content;
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
    public function getUserID(){
        return $this->userId;
    }

    public function toObject(){
        $object=null;
        settype($object,"object");
        $object->id=$this->getId();
        $object->subject=$this->getSubject();
        $object->content=$this->getContent();
        $object->userID=$this->getUserID();
        $object->created=$this->getCreated();
        $object->modified=$this->getModified();

        return $object;
    }

}