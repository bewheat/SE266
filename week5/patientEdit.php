<?php

    //add necessary pages
    include('../functions.php');
    include('model/model_patients.php');

    //initialize variables
    $firstName = "";
    $lastName = "";
    $birthDate = "";
    $heightFt = 0;
    $heightIn = 0;
    $height = 0;
    $weight = 0;
    $bpSystolic = 0;
    $bpDiastolic = 0;
    $temp = 0;


    


    if (isset($_GET['action'])) {

        $action = filter_input(INPUT_GET, 'action');
        $id = filter_input(INPUT_GET, 'id');
        if($action == 'update') {
            $patient = getPatient($id);
            $firstName = $patient['patientFirstName'];
            $lastName = $patient['patientLastName'];
            $birthDate = $patient['patientBirthDate'];
        }
        
    } elseif(isset($_POST['action'])) {

        $action = filter_input(INPUT_POST, 'action');
        $id= filter_input(INPUT_POST, 'id');
        $firstName = filter_input(INPUT_POST, 'firstName');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $birthDate = filter_input(INPUT_POST, 'birthDate');

    } 

    //confirm form was submitted
    if(isset($_POST['submitBtn'])){

        //make values stick
        $firstName = filter_input(INPUT_POST, 'firstName');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $birthDate = filter_input(INPUT_POST, 'birthDate');

        if(!empty($_POST['married'])){

            $married = 1;
    
        } else {
    
            $married  = 0;
        }

    }

    include('header5.php');
    include('patientEdit.view.php');
    include('../footer.php');