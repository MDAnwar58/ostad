<?php
// unix epoch
// unix timestamp
// echo date('d/F/Y');
// echo time();
// echo microtime(true);
// echo var_dump(microtime(false));
// echo microtime(false);

// $mt = microtime(true);
// printf("%10.18f", $mt);

$startMicrotime = microtime(true);
factorial(1000);
sleep(2);
$endMicrotime = microtime(true);
$excutionTime = $endMicrotime - $startMicrotime;
printf('%10.8f', $excutionTime);
function factorial($n)
{
    $result = 1;
    for($i = 0; $i <= $n; $i++)
    {
        $result *= $i;
    }

    return $result;
}

