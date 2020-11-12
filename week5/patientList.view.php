<?php
    $patients = getPatients();

    if(isPostRequest()) {

        $id = filter_input(INPUT_POST, "patientID");
        deletePatient($id);
    }
?>

<html lang="en">-->
    <head>
        <meta charset="utf-8">
        <title>Desiree Davis | Databases</title>
        <link rel="stylesheet" type="text/css" href="../index.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootsrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>


            <div class="container" id="form_container">

                <div class="col-sm-offset-2 col-sm-10">

                    <h2 class="title"> Patients</h2>

                    <table class="table table-striped" style="width:700px;margin:auto;padding:5px;">
                        <thead>
                            <tr>
                                <th>Delete</th>
                                <th>Patient ID</th>
                                <th>Name</th>
                                <th>Married</th>
                                <th>Birth Date</th>
                                <th>Edit</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php foreach($patients as $patient): ?>
                                <tr>
                                    <td>
                                        <form action="patientList.php" method="post">
                                            <input type="hidden" name="patientID" value="<?= $patient['id']; ?>" />
                                            <button type="submit" style="background:rgb(48, 12, 12,.8);border:none;">&#10060</button>
                                        </form>
                                    </td>
                                    <td><?php echo $patient['id']; ?></td>
                                    <td><?php echo $patient['patientFirstName'] . " " . $patient['patientLastName']; ?></td>
                                    <td>
                                        <?php
                                            if($patient['patientMarried'] == 1){

                                                echo "Married";

                                            } else {
                                                
                                                echo "Single";
                                            }
                                        ?>

                                    </td>
                                    <td><?= $patient['patientBirthDate']; ?></td>
                                    <td><a href="patientEdit.php?action=update&id=<?=$patient['id']?>">&#9998</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>

                    <br>

                    <a href="patientEdit.php?action=add">Add Patient</a>