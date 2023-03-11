<?php

$filename = "D://xampp//htdocs//laravel-project//php_text//ostad//modiule_6_video_01//file//data//f4.txt";


$students = array(
    array(
        'fname' => 'MD Shahin',
        'lname' => 'Ahamed',
        'age' => 12,
        'class' => 7,
        'roll' => 11,
    ),
    array(
        'fname' => 'MD Rahim',
        'lname' => 'Ahamed',
        'age' => 11,
        'class' => 7,
        'roll' => 13,
    ),
    array(
        'fname' => 'MD Nikhil',
        'lname' => 'Chandra',
        'age' => 12,
        'class' => 7,
        'roll' => 14,
    ),
);


/* $student = array(
    'fname' => 'MD Kamal',
    'lname' => 'Ahamed',
    'age' => 13,
    'class' => 7,
    'roll' => 17
); */

// DATA SAVE
/* $data = serialize($students);
file_put_contents($filename, $data); */

// that method for data read 
$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);

/* array_push($allStudents, $student); */


// that method is data remove and data save
/* unset($allStudents[1]);
$data = serialize($allStudents);
file_put_contents($filename, $data); */