<?php
    function ageCheck($age) {
        if ($age < 21) {
            return false;
        } else {
            return true;
        }
    }

    function fizzbuzz($num) {
        if (($num % 2 == 0) && ($num % 3 == 0)) {
            return 'FizzBuzz';
        } elseif ($num % 2 == 0) {
            return 'Fizz';
        } elseif ($num % 3 ==0) {
            return 'Buzz';
        } else {
            return $num;
        }
    }