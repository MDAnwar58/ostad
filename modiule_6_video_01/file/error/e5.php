<?php

function x($a)
{
    y($a);
}

function y($b)
{
    z($b*2);
}

function z($c)
{
    if($c<20)
    {
        trigger_error("Too smaller {$c}\n");
    }else
    {
        echo "{$c} is okey\n";
    }

    // debug_print_backtrace();
    print_r(debug_backtrace());
}
function w($d, $e)
{
    x(($d + $e)*5);
}
z(33);
w(2, 3);