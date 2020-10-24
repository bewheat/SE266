<?php

    require ('functions.php');


    //initialize form values
    $firstName = '';
    $lastName = '';
    $bDate = '';
    $ft = '';
    $inches = '';
    $weight = '';
    $error = "";

    //confirm form was submitted
    if(isset($_POST['submitBtn'])) {

        //'stick' values to form
        $firstName = filter_input(INPUT_POST, 'firstName');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $bDate = filter_input(INPUT_POST, 'birthDate');
        $ft = filter_input(INPUT_POST, 'ft', FILTER_VALIDATE_INT);
        $inches = filter_input(INPUT_POST, 'inches', FILTER_VALIDATE_INT);
        $weight = filter_input(INPUT_POST, 'weight', FILTER_VALIDATE_FLOAT);

    } else {

        echo "Submit Form to Continue.";
    }

    //validate form values
    if($firstName == ''){

        $error .= "<li>No First Name Entered</li>";
            
    }

    if($lastName == ''){

        $error .= "<li>No Last Name Entered</li>";

    }

    if(isDate($bDate)){

        $age = age($bDate);

    } else {

        $error .= "<li>Invalid Date Entered. Ex: 10/10/2000</li>";
            
    }

    if($ft == ''  || $inches == ''){

        $error .= "<li>Invalid Height Entered</li>";

    }

    if($weight == ''){

        $error .= "<li>Invalid Weight Entered</li>";

    }

    if(!isset($_POST['married'])){

        $error .= "<li>No Relationship Status Entered";
    }


    //Print error message
    if($error != '' && isset($_POST['submitBtn'])){

        $error = "<ul>$error</ul>";

    }
    //calculate and display results
    else {
            
        $bmi = round(bmi($ft, $inches, $weight),1);
        $bmiClass = bmiDescription($bmi);
    }

    echo "Form Submitted.";
    


require_once ('header.php');
require ('intake.view.php');
include 'footer.php';