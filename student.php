<?php 

namespace Assignment\Members;

use Assignment\Items\Course;

class Student 
{
    public readonly int $id;
    public $name;
    public $email;
    public $courses = array();

    public function __construct($id,$name,$email,Course $course)
    {
        
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->courses[] = $course;
    }

    public function getID(){
        return $this->id;
    }

    public function getemail(){
        return $this->email;
    }
    
    public function getName(){
        return $this->name;
    }
}