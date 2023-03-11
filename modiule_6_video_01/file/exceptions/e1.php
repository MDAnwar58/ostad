<?php

class Student
{
    // public $name;
    // public $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        if ($age < 4) {
            throw new Exception("Too Young", 1001);
        }elseif($age>25)
        {
            throw new Exception("Too Old", 1002);
        }
        $this->age = $age;
    }
}

try {
    $s = new Student("Hasin", 28);
} catch (Exception $e) {
    echo $e->getCode().":".$e->getMessage();
}

// try {
//     $s = new Student("Hasin", 1);
// } catch (\Throwable $th) {
//     echo $th->getMessage();
// }
