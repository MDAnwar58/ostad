<?php

$filename = "D://xampp//htdocs//laravel-project//php_text//ostad//modiule_6_video_01//file//data//f3.txt";


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


// data write for store data
$fp = fopen($filename, "w");
foreach ($students as $student) {
    $data = sprintf("%s,%s,%s,%s,%s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll'],);
    fwrite($fp, $data);
    // fputcsv($fp, $student);
}
fclose($fp);


// data write for store data
// $fp = fopen($filename, "w");
// foreach($students as $student)
// {
//     $data = sprintf("%s,%s,%s,%s,%s\n", $student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll'],);
//     fwrite($fp, $data);
// }
// fclose($fp);


// data read on store data
// $fp = fopen($filename, "r");
// while($data = fgets($fp))
// {
//     $student = explode(",", $data);
//     printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0],$student[1],$student[2],$student[3],$student[4],);
// }
// fclose($fp);


// data read on store data for read same last 2
// $fp = fopen($filename, "r");
// while($student = fgetcsv($fp))
// {
//     printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0],$student[1],$student[2],$student[3],$student[4],);
// }
// fclose($fp);

// it's for store data
// $student = array(
//     'fname' => 'MD Kamal',
//     'lname' => 'Ahamed',
//     'age' => 13,
//     'class' => 7,
//     'roll' => 17
// );
// $fp = fopen($filename, "a");
// fputcsv($fp, $student);
// fclose($fp);


// remove on store data
$data = file($filename);
print_r($data);
unset($data[1]);
$fp = fopen($filename, "w");
foreach ($data as $line) {
        fwrite($fp, $line);
}

fclose($fp);
