<?php


    //connect code for database connection
    include (__DIR__ . '/db.php');


    function getPatients () {
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

    function updatePatient($id, $fn, $ln, $m, $bd){

        global $db;

        $results = "Error: Data Not Deleted.";

        //create SQL statement
        $stmt = $db->prepare("UPDATE patients SET patientFirstName = :fName, patientLastName = :lName, patientMarried = :married, patientBirthDate = :bDate WHERE id = :id");

        //bind values
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':fName', $fn);
        $stmt->bindValue(':lName', $ln);
        $stmt->bindValue(':married', $m);
        $stmt->bindValue(':bDate', $bd);

        if ($stmt->execute() && $stmt->rowCount() > 0){

            $results = "Data Updated";

        }

        return($results);


    }

    function deletePatient($id) {

        global $db;

        //create default result to return if delete fails
        $results = "Error: Data Not Deleted.";

        //create SQL statement
        $stmt = $db->prepare("DELETE FROM patients WHERE id = :id");

        //bind value
        $stmt->bindValue(':id', $id);

        if($stmt->execute() && $stmt->rowCount() > 0){

            $results = "Data Deleted.";

        }

        return($results);
    }

    function getPatient($id){

        global $db;

        $result = [];

        $stmt = $db->prepare("SELECT id, patientFirstName, patientLastName, patientMarried, patientBirthDate FROM patients WHERE id = :id");

        $stmt->bindValues(":id", $id);

        if($stmt->execute() && $stmt->rowCount() > 0){

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

        }

        return($result);

    }

    // $test = addPatient('William', 'Beckett', 0, 1985-02-11);
    // echo $test;
    // $patients = getPatient();
    // var_dump($patients);