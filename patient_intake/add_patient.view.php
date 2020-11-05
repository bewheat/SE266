<html lang="en">-->
    <head>
        <meta charset="utf-8">
        <title>Desiree Davis | Databases</title>
        <link rel="stylesheet" type="text/css" href="../index.css"/>
    </head>


            <div id="form_container">

                <h3 class="title">Add Patient:</h3>

                <form method="post">

                    <label class="label" for="firstName">First Name:</label>
                    <input type="text" name="firstName" value="<?= $firstName; ?>"/><br><br>

                    <label class="label" for="lastName">Last Name:</label>
                    <input type="text" name="lastName" value="<?= $lastName; ?>"/><br><br><span id="subscript">(YYYY-MM-DD)</span><br>

                    <label class="label" for="birthDate">Birth Date:</label>
                    <input type="text" name="birthDate" value="<?= $birthDate; ?>"?/><br><br>

                    <label class="label">Married:</label>
                    <input type="checkbox" name="married">
                    <br><br>

                    <input type="submit" name="submitBtn" value="Add Patient"/>

                </form>

                <hr>

                <?php
                    if(isset($_POST['submitBtn'])){
                        
                        $result = addPatient($firstName, $lastName, $married, $birthDate);
                        echo $result;
                    
                    }
                ?>

                <a href="patient_review.php">Return To Patient List?</a>

            </div><!--/#form_container-->
        </div><!--/#wrapper-->
    </body>
</html>