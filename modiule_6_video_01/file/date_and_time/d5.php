<?php

$d1 = new DateTime('20 May 2007');
$d2 = new DateTime('27 july 2013');

// $difference = date_diff($d1, $d2);
$difference = $d1->diff($d2);
// echo $difference->format('%d'); // without hero 7
// echo $difference->format('%D'); // with hero 07
echo $difference->format('%y Year %m Month %d Days'); // month with days 