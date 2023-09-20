<?php
function fibonacci($n)
{
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

function printFibonacciNumbers($count)
{
    $fibonacciNumbers = [];

    for ($i = 0; $i < $count; $i++) {
        $fibonacciNumber = fibonacci($i);

        if ($fibonacciNumber > 100) {
            break; 
        }

        $fibonacciNumbers[] = $fibonacciNumber;
    }

    return $fibonacciNumbers;
}

$fibonacciNumbers = printFibonacciNumbers(10);
echo "The first 10 Fibonacci numbers (up to 100):\n";
echo implode(', ', $fibonacciNumbers);
?>