
<?php
//for loop

function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 === 0) {
            echo $i . ' ';
        }
    }
}

printEvenNumbersFor(2, 20, 2);
echo '<br>';


//while loop
function printEvenNumbersWhile($start, $end, $step)
{
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 === 0) {
            echo $i . ' ';
        }
        $i += $step;
    }
}

printEvenNumbersWhile(2, 20, 2);
echo '<br>';


//do loop
function printEvenNumbersDoWhile($start, $end, $step)
{
    $i = $start;
    do {
        if ($i % 2 === 0) {
            echo $i . ' ';
        }
        $i += $step;
    } while ($i <= $end);
}
printEvenNumbersDoWhile(2, 20, 2);
?>