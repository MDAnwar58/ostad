<?php

$filename = "D://xampp//htdocs//laravel-project//php_text//ostad//modiule_6_video_01//file//data//f5.txt";


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



/*    data save with json    */
/* $encodeData = json_encode($students);
file_put_contents($filename, $encodeData); */


/* data show with array */

$data = file_get_contents($filename);
$allStudents = json_decode($data, true);
print_r($allStudents);

echo $allStudents[0]['fname'];

/* data show with object */

/* $data = file_get_contents($filename);
$allStudents = json_decode($data);
print_r($allStudents);
echo $allStudents[0]->fname; */