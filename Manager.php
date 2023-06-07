<?php

namespace Assignment\Managers;

use Assignment\Members\Student;

trait Loggable{
    public function log($message){
        $myfile = fopen("log_file.txt", "a");
        fwrite($myfile, $message . "\n");
        fclose($myfile);
    }
}



class Manager  
{
    use Loggable;

    public $name;
    public $stduents = array();

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function addStudent(Student $student){
        $this->stduents[$student->getID()] = $student;
        $this->log("Student has ID : " . $student->getID() ." is added");
    }


    public function getStduent($id){
        // if(in_array($this->stduents,$this->stduents[$id])){
        //    $this->log("Student has Id : " . $this->stduents[$id]. " was retrived");
        //    return $this->stduents[$id];
        // }
        // else {
        //     echo "Student has Id " . $this->stduents[$id] . " is not Found";
        //     $this->log("Student has Id : ". $this->stduents[$id] . " is not Found");
        // }

        if (isset($this->stduents[$id])) {
            $this->log("Retrieved student with ID: " . $id);
            return $this->stduents[$id];
        }
    }

    public function deleteStudent(Student $student)
    {
        if (isset($this->stduents[$student->getID()])) {
            unset($this->stduents[$student->getID()]);
            $this->log("Deleted student with ID: " . $student->getID());
        }
    }

    // public function updateStudent(Student $student,$name = " ",$email= " "){
    //     if(isset($this->stduents[$student->id])){
    //         if($name == " " && $email == " "){
    //             echo "There is not updaing happen\n";
    //             $this->log("There is not updaing happen");
    //         }
    //         elseif($name != " " && $email == " "){
    //             $this->stduents[$student->id]->name = $name;
    //             $this->log("The name updated for Stduent has ID : " . $this->stduents[$student->id]);
    //         }
    //         elseif($name == " " && $email != " "){
    //             $this->stduents[$student->id]->email = $email;
    //             $this->log("The email updated for Stduent has ID : " . $this->stduents[$student->id]);
    //         }
    //         elseif($name != " " && $email != " "){
    //             $this->stduents[$student->id]->email = $email;
    //             $this->stduents[$student->id]->name = $name;
    //             $this->log("The email and name updated for Stduent has ID : " . $this->stduents[$student->id]);
    //         }
    //     }
    // }

    public function updateStudent(Student $student)
    {
        if (isset($this->stduents[$student->getId()])) {
            $this->stduents[$student->getId()] = $student;
            $this->log("Updated student with ID: " . $student->getID());
        }
    }
}






