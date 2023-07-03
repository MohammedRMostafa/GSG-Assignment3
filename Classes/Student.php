<?php

namespace Classes;

class Student
{
    public $name;
    public $email;
    public readonly int $id;
    public $courses = [];
    private static $id_number = 1;

    public function __construct()
    {
        $this->id = self::$id_number++;
    }
}