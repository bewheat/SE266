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

    function age ($bdate) {

        $date = new DateTime($bdate);

        $now = new DateTime();

        $interval = $now->diff($date);

        return $interval->y;
    }

    function isDate($dt){

        try {

            $d = new DateTime($dt);

            return(true);

        } catch(Exception $e) {

            return false;

        }
    }

    function bmi ($ft, $inch, $weight){

        //convert to metric
        $kg = $weight / 2.20462;
        $cFt = $ft * 12;
        $height = ($cFt + $inches) * 0.0254; //meters

        $bmi = $kg / ($height ^ 2);

        return $bmi;
    }

    function bmiDescription ($bmi) {

        if ($bmi < 18.5){

            $classification = 'underweight';

        } elseif ($bmi <= 24.9){

            $classification = 'normal weight';

        } elseif ($bmi <= 29.9){

            $classification = 'overweight';

        } else {

            $classification = 'obese';
        }

        return $classification;
    }

    