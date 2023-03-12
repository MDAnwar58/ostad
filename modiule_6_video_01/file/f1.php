<?php

$filename = "D:/xampp/htdocs/laravel-project/php_text/ostad/modiule_6_video_01/file/data/f1.txt";
if(is_readable($filename))
{
    $fp = fopen($filename, 'r');
    while($line = fgets($fp))
    {
        echo $line;
    }
    // rewind($fp); // pointer
    // fseek($fp, 8); // energy pointer 8 number position stop that method
    fseek($fp, -1, SEEK_END); // energy pointer go to line end and exicute end there 
    
    while($line = fgets($fp, 5))
    {
        echo $line. "-";
    }
    
    fclose($fp);
    
    
    $data = file($filename);
    echo $data[2];
    print_r($data); // array do you want to print/echo. then you use that method print_r()
    
    
    echo "\n";
    
    $data = file_get_contents($filename); // show all data
    echo $data;
}

