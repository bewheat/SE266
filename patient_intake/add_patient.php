<?php

    //add necessary pages
    include('../functions.php');
    include('model/model_intake.php');

    //initialize variables
    $firstName = "";
    $lastName = "";
    $birthDate = "";

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

    include('header.php');
    include('add_patient.view.php');
    include('../footer.php');