<?php

$filename = "D://xampp//htdocs//laravel-project//php_text//ostad//modiule_6_video_01//file//data//f2.txt";


file_put_contents($filename, "\nMars\n", FILE_APPEND | LOCK_EX);
file_put_contents($filename, "Jupiter", FILE_APPEND | LOCK_EX);




// file_put_contents($filename, "\nMars\n", LOCK_EX);
// file_put_contents($filename, "Jupiter", LOCK_EX);






// file_put_contents($filename, "\nMars\n", FILE_APPEND);
// file_put_contents($filename, "Jupiter", FILE_APPEND);