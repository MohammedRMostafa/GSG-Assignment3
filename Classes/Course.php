<?php

namespace Classes;

class Student
{
    public $name;
    public readonly int $id;
    private static $id_number = 1;

    public function __construct()
    {
        $this->id = self::$id_number++;
    }
}
