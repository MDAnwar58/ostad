<?php
echo time() ."\n";
echo mktime(0,0,0,03,11,2023)."\n";
date_default_timezone_set("Asia/Dhaka");
echo mktime(0,0,0,03,11,2023)."\n";
echo gmmktime(0,0,0,03,11,2023)."\n";
// echo (9200 - 1200) / (60*60);

echo (mktime(0,0,0,03,20,2023) - mktime(0,0,0,03,01,2023)) / (24*60*60);