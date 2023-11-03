<?php
namespace practicals;

class Practical {
    public static function printHello() {
        echo "Hello, World!\n";
    }

    public static function add($num1, $num2) {
        if (!is_int($num1) || !is_int($num2)) {
            throw new \InvalidArgumentException("Both inputs must be integers.");
        }
        return $num1 + $num2;
    }

    public static function generateFibonacciSequence($n) {
        if (!is_int($n) || $n < 1) {
            throw new \InvalidArgumentException("Input must be a positive integer.");
        }

        $fibonacciSequence = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }
        return $fibonacciSequence;
    }
}
?>
