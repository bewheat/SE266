<html lang="en">-->
    <head>
        <meta charset="utf-8">
        <title>Desiree Davis | Databases</title>
        <link rel="stylesheet" type="text/css" href="../index.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootsrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>

            <div id="form_container">

                <h3 class="title"><?=$action?> Patient:</h3>

                <form method="post">

                    <label class="label" for="firstName">First Name:</label>
                    <input type="text" name="firstName" value="<?= $firstName; ?>"/><br><br>

                    <label class="label" for="lastName">Last Name:</label>
                    <input type="text" name="lastName" value="<?= $lastName; ?>"/><br><br><span id="subscript">(YYYY-MM-DD)</span><br>

                    <label class="label" for="birthDate">Birth Date:</label>
                    <input type="text" name="birthDate" value="<?= $birthDate; ?>"?/><br><br>

                    <label class="label">Married:</label>
                    <input type="checkbox" name="married" value="yes">
                    <br><br>

                    <input type="submit" name="submitBtn" value="<?=$action?> Patient"/>

                </form>

            </div><!--/#form_container-->
                
            <hr>

            <div id="form_container">

                <?php
                    if($action == 'update'):
                ?>

                    <h2 class="title">Patient Measurements</h2>
                
                    <form method='post'>
                        
                        <label class="label" for="height">Height:</label>
                        
                        <label for="feet">Feet: </label>
                        <input type="text" name="feet" style="width:40px;" value="<?=$heightFt?>"/>
                        <label for="inches">Inches: </label>
                        <input type="text" name="inches" style="width:40px;" value="<?=$heightIn?>"/><br><br>
                        
                        <?php
                            //total height in inches (which will be sent to the DB)
                            $height = ($heightFt * 12) + $heightIn
                        ?>

                        <label class="label" for="weight">Weight:</label>
                        <input type="text" name="weight" value="<?=$weight?>"/><br><br>

                        <label class="label" for="bPressure">Blood Pressure:</label>
                        <input type="text" name="bpSystolic" style="width:40px;" value="<?=$bpSystolic?>"/>
                        <span>/</span>
                        <input type="text" name="bpDiastolic" style="width:40px;" value="<?=$bpDiastolic?>"/><br><br>

                        <label class="label" for="temp">Temperature: </label>
                        <input type="text" name="temp" value="<?=$temp?>"/><br><br>

                        <input type="submit" name="submitMeasurements" value="Submit Measurements"/><br>

                    </form>

            </div><!--/#form_container (2)-->

            <div class="col-sm-offset-2 col-sm-10">

                <h2 class="title">Patient History</h2>

                <table class="table table-striped" style="margin:auto;width:700px;color:red;">
                    <thead>
                        <tr>
                            <th>Patient ID</th>
                            <th>Measurement Date</th>
                            <th>Height(inches)</th>
                            <th>Weight(lbs)</th>
                            <th>Blood Pressure</th>
                            <th>Temperature</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                            $measurements = getPatientMeasurement($id);
                                    
                            foreach($measurements as $measure): 
                                    
                        ?>

                            <tr>
                                <td><?= $measure['patientId'];?></td>
                                <td><?= $measure['patientMeasurementDate'];?></td>
                                <td><?= $measure['patientHeight'];?></td>
                                <td><?= $measure['patientWeight'];?></td>
                                <td><?= $measure['patientBPSystolic'] . "/" . $measure['patientBPDiastolic'];?></td>
                                <td><?= $measure['patientTemperature'];?></td>
                            </tr>

                        <?php endforeach;?>     
                    </tbody>

                </table>

            </div><!--/col-sm-blah-blahblah-->

            <hr>

            <?php endif;?>

            <?php
                if(isset($_POST['submitBtn']) && $action == 'add'){
                        
                    $result = addPatient($firstName, $lastName, $married, $birthDate);
                    echo $result;
                    
                } elseif(isset($_POST['submitBtn']) && $action == 'update') {

                    $result = updatePatient($id, $firstName, $lastName, $married, $birthDate);
                    echo $result;

                }

                if(isset($_POST['submitMeasurements'])) {

                    $result = addMeasurements($id, $height, $weight, $bpSystolic, $bpDiastolic, $temp);
                    echo $result;
                }
            ?>

            <a href="patientList.php">Return To Patient List?</a>

        </div><!--/#wrapper-->
    </body>
</html>