<?php

// echo date('d/m/y'); // simple date
// echo date('d/F/Y'); // F means month's full name, Y means year's show full.
// echo date('d/M/Y'); // M means month's short name show.\
// echo date('dS M, Y'); // dS means day with added th. 
// echo date('dS F, Y');
// echo date('dS F, Y h:i:s'); h:i:s -> h means huors,i means minites, s means second. 
// echo date('dS F, Y H:i:s a p'); a means am or pm, A means AM or PM, p means time zone show number show.

date_default_timezone_set("Asia/Dhaka");
echo date('dS F, Y h:i:s A', time()+12*60*60);
echo "\n";
// echo date('z'); // this method use for find a year how many days.
echo date('t'); // this method use for find a full month how may days full.