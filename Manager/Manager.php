<?php

namespace Manager;

include "../Log/Log.php";
include "../classes/Student.php";

use Classes\Student;
use Log\Log;

class Manager
{
    use Log;
    static $students = array();

    static function addStudent(Student $student)
    {
        Log::add_log("Added New Student Name Is $student->name");
        return array_push(self::$students, $student);
    }



    static function get_student_by_id($id)
    {
        for ($i = 0; $i < count(self::$students); $i++) {
            if (self::$students[$i] != null) {

                if (self::$students[$i]->id == $id) {
                    $name = self::$students[$i]->name;
                    Log::add_log("Get Student Who Name Is $name");
                    return self::$students[$i];
                }
            }
        }
    }

    static function update(Student $student)
    {
        for ($i = 0; $i < count(self::$students); $i++) {
            if (self::$students[$i] != null) {
                if (self::$students[$i]->id == $student->id) {
                    $name = self::$students[$i]->name;
                    Log::add_log("Updated Student Who Name Is $name ( Name : $student->name // Email : $student->email )");
                    self::$students[$i] = $student;
                    break;
                }
            }
        }
    }

    static function delete_student_by_id($id)
    {
        for ($i = 0; $i < count(self::$students); $i++) {
            if (self::$students[$i] != null) {
                if (self::$students[$i]->id == $id) {
                    $name = self::$students[$i]->name;
                    self::$students[$i] = null;
                    Log::add_log("Deleted Student Who Name Is $name");
                }
            }
        }
    }
}
