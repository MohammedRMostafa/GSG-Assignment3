<?php

namespace Classes;

class Student
{
    public $name;
    public $email;
    public readonly int $id;
    public $courses = array();
    private static $id_number = 1;

    public function __construct($name, $email, ...$courses)
    {
        $this->id = self::$id_number++;
        $this->name = $name;
        $this->email = $email;
        $this->courses = $courses;
    }
}
