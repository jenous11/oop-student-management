<?php

class Student{
    private $name;
    private $id;
    private $course;

    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
    public function setid($id){
        $this->id=$id;
    }
    public function getid(){
        return $this->id;
    }
    public function setcourse($course){
        $this->course=$course;
    }
    public function getcourse(){
        return $this->course;
    }

}
