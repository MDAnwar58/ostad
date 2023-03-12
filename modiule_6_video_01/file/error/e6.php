<?php

$person = [
    'name' => 'XYZ',
    'id' => 'some_id',
    'age' => '17',
    'sex' => 'F'
];

function processMaternityLeave($person)
{
    if($person['age']<18)
    {
        throw new Exception("Too Young");
    }else if('F' == $person['sex'])
    {
        echo "Processed";
    }else
    {
        throw new GenderMismatchException($person);
    }
}

class GenderMismatchException extends Exception
{
    private $person;
    function __construct($person)
    {
        $this->person = $person;
        parent::__construct("Gender Missmatch\n");
    }
    function getDetailedMessage()
    {
        echo "Gender Missmatch for Person with ID {$this->person['id']}";
    }
}

try {
    processMaternityLeave($person);
} catch (GenderMismatchException $e) {
    echo $e->getMessage();
    echo $e->getDetailedMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}