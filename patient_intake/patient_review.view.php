<?php
    $patients = getPatient();
    
?>

<html lang="en">-->
    <head>
        <meta charset="utf-8">
        <title>Desiree Davis | Classes</title>
        <!--<link rel="stylesheet" type='text/css' href="https://maxcdn.bootstrapcdn.com/3.4.0/css/bootstrap.min.css"/>-->
        <link rel="stylesheet" type="text/css" href="../index.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootsrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>


            <div class="container" id="form_container">

                <div class="col-sm-offset-2 col-sm-10">

                    <h2 class="title"> Patients</h2>

                    <table class="table table-striped" style="margin:auto;">
                        <thead>
                            <tr>
                                <th>Patient ID</th>
                                <th>Name</th>
                                <th>Married</th>
                                <th>Birth Date</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php foreach($patients as $patient): ?>
                                <tr>
                                    <td><?php echo $patient['id']; ?></td>
                                    <td><?php echo $patient['patientFirstName'] . " " . $patient['patientLastName']; ?></td>
                                    <td>
                                        <?php //echo $patient['patientMarried'];
                                            if($patient['patientMarried'] == 1){

                                                echo "Married";

                                            } else {
                                                
                                                echo "Single";
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $patient['patientBirthDate']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>

                    <br>

                    <a href="add_patient.php">Add Patient</a>