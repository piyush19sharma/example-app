<?php
namespace practicals;

class Practical {
    public static function printHello() {
        echo "Hello, World!\n";
    }

    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    public static function generateFibonacciSequence($n) {
        $fibonacciSequence = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }
        return $fibonacciSequence;
    }
}
?>
