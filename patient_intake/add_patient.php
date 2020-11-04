<?php

    //add necessary pages
    include('../functions.php');
    include('model/model_intake.php');
    //include('patient_review.php');

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
        if($married){

            $married = 1;
    
        } else {
    
            $married  = 0;
        }

    }


    //technically this should be in a seperate file but I'm not doing that. If it was a bigger project I would but it's not.

    include('header.php');
    include('add_patient.view.php');
    include('../footer.php');