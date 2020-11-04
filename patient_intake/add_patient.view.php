<html lang="en">-->
    <head>
        <meta charset="utf-8">
        <title>Desiree Davis | Forms</title>
        <link rel="stylesheet" type="text/css" href="../index.css"/>
    </head>


            <div id="form_container">

                <h3 class="title">Patient Intake Form</h3>

                <form method="post">

                    <label class="label" for="firstName">First Name:</label>
                    <input type="text" name="firstName" value="<?= $firstName; ?>"/><br><br>

                    <label class="label" for="lastName">Last Name:</label>
                    <input type="text" name="lastName" value="<?= $lastName; ?>"/><br><br><span id="subscript">(YYYY-MM-DD)</span><br>

                    <label class="label" for="birthDate">Birth Date:</label>
                    <input type="text" name="birthDate" value="<?= $birthDate; ?>"?/><br><br>

                    <label class="label">Married:</label>
                    <input type="checkbox" value="<?= $married; ?>">
                    <br><br>

                    <input type="submit" name="submitBtn" value="Add Patient"/>

                </form>

                <hr>

                <?php
                    if(isset($_POST['submitBtn'])){
                        
                        $result = addPatient($firstName, $lastName, $married, $birthDate);
                        echo $result;
                        if($result == 'Data Added.'){

                            echo "Name: " . $firstName . " " . $lastName;
                            echo "Birth Date: " . $birthDate;
                            if($married){

                                echo "Relationship: Married";

                            } else {

                                echo "Relationship: Single";

                            }
                        }
                    }
                ?>

            </div><!--/#form_container-->
        </div><!--/#wrapper-->
    </body>
</html>