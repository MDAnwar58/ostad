<?php

$filename = "D://xampp//htdocs//laravel-project//php_text//ostad//modiule_6_video_01//file//data//f2.txt";

$fp = fopen($filename, "a+");
fwrite($fp, "\nUranus\n");
rewind($fp);
fwrite($fp, "Neptune\n");
$line = fgets($fp);
echo $line;



// $fp = fopen($filename, "w+");
// fwrite($fp, "Uranus");
// rewind($fp);
// $line = fgets($fp);
// echo $line;


// $fp = fopen($filename, "r+");
// $line = fgets($fp);
// echo $line;
// fwrite($fp, "Uranus");
// $line = fgets($fp);
// echo $line;
// fseek($fp, 0); // fseek() or rewind() use anythings
// fwrite($fp, "Vanus");
// fclose($fp);







// if(is_readable($filename))
// {
//     $fp = fopen($filename, "w");
//     fwrite($fp, "Mercury\n");
//     fwrite($fp, "Venus\n");
//     fwrite($fp, "Earth\n");
//     fclose($fp);
// }