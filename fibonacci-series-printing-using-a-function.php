<?php
function printFibonacci($count)
{
    $first = 0;
    $second = 1;

    if ($count >= 1) {
        echo $first . ' ';
    }

    if ($count >= 2) {
        echo $second . ' ';
    }

    for ($i = 3; $i <= $count; $i++) {
        $next = $first + $second;
        echo $next . ' ';

        $first = $second;
        $second = $next;
    }
}

printFibonacci(15);
?>