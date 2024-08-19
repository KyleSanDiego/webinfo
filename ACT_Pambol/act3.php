<?php
    $x = 20000;
    $y = 8000;

    $a = $x + $y;
    $b = $a * 0.03;
    $c = $a * 0.02;
    $d = 150;
    $e = $a * 0.01;
    $f = $b + $c + $d + $e;
    $g = $a - $f;

    echo "Gross pay is $a<br>";
    echo "Tax Deduction is $b<br>";
    echo "SSS Deduction is $c<br>";
    echo "PHil Deduction is $d<br>";
    echo "Pag-Ibig is $e<br>";
    echo "Total Deduction is $f<br>";
    echo "Net pay is $g<br>";
?>