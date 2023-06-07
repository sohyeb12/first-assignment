<?php

include_once __DIR__ . "/Manager.php";
include_once __DIR__ . "/student.php";
include_once __DIR__ . "/course.php";



use Assignment\Items\Course;
use Assignment\Members\Student;
use Assignment\Managers\Manager;

$manager = new Manager("Admin"); // we made $manger object and it's name Admin

$course_1 = new Course(1,"Arabic");
$course_2 = new Course(2,"Math");
$course_3 = new Course(3,"chemical");


$student1 = new Student(1,"John Doe", "john@example.com",$course_1);
$student2 = new Student(2,"Jane Smith", "jane@example.com",$course_2);
$student3 = new Student(1,"Mohamemd Sabah", "sohyebjarwan@gmail.com",$course_3);

$manager->addStudent($student1);
$manager->addStudent($student2);

$manager->updateStudent($student3);


$manager->deleteStudent($student3);

var_dump($manager->getStduent(2));