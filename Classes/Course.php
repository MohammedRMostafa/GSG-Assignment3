<?php

namespace Classes;

class Course
{
    public $name;
    public readonly int $id;
    private static $id_number = 1;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->id = self::$id_number++;
    }
}
