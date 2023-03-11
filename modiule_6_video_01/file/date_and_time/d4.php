<?php

echo mktime(0,0,0,12,15,2001)."\n";

echo strtotime("15 December, 2001")."\n";
echo time()."\n"; // current time timestamp
echo strtotime("now")."\n"; // current time timestamp
echo strtotime("+3days")."\n"; // 3 days after timestamp

echo (strtotime("+2 week 7 days 24 hours 86400 seconds") - strtotime("now"))/(86400)."\n"; // caculate days

echo date('H:i:s A', strtotime("13 August 2005 23:12:05 PM"));