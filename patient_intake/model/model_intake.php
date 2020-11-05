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

    function addPatient($fn, $ln, $m, $bd){

        global $db;

        //initialize variable for function results. put in default message in case of errors.
        $results = "Not Added.";

        //create SQL statement
        $stmt = $db -> prepare("INSERT INTO patients SET patientFirstName = :fName, patientLastName = :lName, patientMarried = :married, patientBirthDate = :bDate");
        
        //bind values
        $stmt->bindValue(':fName', $fn);
        $stmt->bindValue(':lName', $ln);
        $stmt->bindValue(':married', $m);
        $stmt->bindValue(':bDate', $bd);


        //execute SQL statement
        if ($stmt->execute() && $stmt-> rowCount() > 0) {

            $results = 'Data Added:';

        }

        return($results);
    }

    // $test = addPatient('William', 'Beckett', 0, 1985-02-11);
    // echo $test;
    // $patients = getPatient();
    // var_dump($patients);