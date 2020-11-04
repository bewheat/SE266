<?php


    //connect code for database connection
    include (__DIR__ . '/db.php');


    function getPatient () {
        global $db;

        //initialize variable for function results
        $results = [];

        //write SQL statement
        $stmt = $db->prepare('SELECT id, patientFirstName, patientLastName, patientMarried, patientBirthDate FROM patients ORDER BY patientLastName');


        //execute SQL statement
        if($stmt -> execute() && $stmt -> rowCount() > 0){

            $results = $stmt ->fetchAll(PDO::FETCH_ASSOC);
        }

        //return result of SQL statement
        return ($results);
    }

    function addPatient($fn, $ln, $m, $d){

        global $db;

        //initialize variable for function results. put in default message in case of errors.
        $results = "Not Added.";

        //create SQL statement
        $stmt = $db -> prepare("INSERT INTO patients SET patientFirstName = :fName, patientLastName = :lName, patientMarried = :married, patientBirthDate = STR_TO_DATE(:bDate, '%m,%d,%Y)");
        
        //bind values
        $stmt->bindValue(':fName', $fn);
        $stmt->bindValue(':lName', $ln);
        $stmt->bindValue(':married', $m);

        $bd = $bd->format('m,d,Y');
        $stmt->bindValue(':bDate', $bd);


        //execute SQL statement
        if ($stmt->execute() && $stmt-> rowCount() > 0) {

            $results = 'Data Added.';

        }

        //$stmt->closeCursor();

        return($results);
    }

    // $test = addPatient('William', 'Beckett', 0);
    // echo $test;
    // $patients = getPatient();
    // var_dump($patients);