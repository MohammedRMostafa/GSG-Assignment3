<?php

namespace Run;

include "../Manager/Manager.php";
include "../classes/Course.php";

use Classes\Student;
use Classes\Course;
use Manager\Manager;


$student1 = new Student("Mohammed", "Mohammed@gmail.com", new Course("PHP"), new Course("Python"));
$student2 = new Student("Ahmed", "Ahmed@gmail.com", new Course("Js"), new Course("Node"));


Manager::addStudent($student1);
Manager::addStudent($student2);

$student3 = Manager::get_student_by_id(1);

Manager::delete_student_by_id(1);

$student4 = clone Manager::get_student_by_id(2);
$student4->name = "Omar";
$student4->email = "Omar@gmail.com";
Manager::update($student4);



echo "<pre>";
echo str_repeat('=', 20) . " Add Student1 " . str_repeat('=', 20) . "<br>";
print_r($student1);

echo str_repeat('=', 20) . " Add Student2 " . str_repeat('=', 20) . "<br>";
print_r($student2);

echo str_repeat('=', 20) . " Get Student1 " . str_repeat('=', 20) . "<br>";
print_r($student3);

echo str_repeat('=', 20) . " Update Student2 " . str_repeat('=', 20) . "<br>";
print_r($student4);

echo str_repeat('=', 20) . " Print After Delete Student1 " . str_repeat('=', 20) . "<br>";
print_r(Manager::$students);

echo "</pre>";
