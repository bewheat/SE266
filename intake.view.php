<html lang="en">-->
    <head>
        <meta charset="utf-8">
        <title>Desiree Davis | Forms</title>
        <link rel="stylesheet" type="text/css" href="index.css"/>
    </head>


            <div id="form_container">

                <h3 class="title">Patient Intake Form</h3>

                <form action="intake.php" method="post">

                    <label class="label" for="firstName">First Name:</label>
                    <input type="text" name="firstName" value="<?= $firstName; ?>"/><br><br>

                    <label class="label" for="lastName">Last Name:</label>
                    <input type="text" name="lastName" value="<?= $lastName; ?>"/><br><br>

                    <label class="label" for="birthDate">Birth Date:</label>
                    <input type="text" name="birthDate" value="<?= $bDate; ?>"?/><br><br>
                        
                    <label class="label">Height:</label>

                    <label for="ft">Feet</label>
                    <input type="text" name="ft" style="width:40px;" value="<?= $ft; ?>"/>
                    <label for="inches">Inches</label>
                    <input type="text" name="inches" style="width:40px;" value="<?= $inches ?>"/><br><br>

                    <label class="label" for="weight">Weight(pounds):</label>
                    <input type="text" name="weight" value="<?= $weight; ?>"/><br><br>

                    <label class="label">Married:</label>
                    <input type="radio" name="married">Yes
                    <input type="radio" name="married">No
                    <br><br>

                    <input type="submit" name="submitBtn" value="Submit"/>

                </form>

                <hr>

                <?php
                    if ($error != ""):
                ?>

                <h2 class="error_title">Form Errors Found. Please Fix The Following To Continue</h2>

                <div id="errors">
                        
                    <?= $error; ?>

                </div><!--/#errors-->

                <?php
                    else:
                ?>

                <p>

                    <span id="title">Information Entered:</span><br>
                    <b>Age:</b> <?="$age";?><br>
                    <b>BMI:</b> <?="$bmi";?><br>
                    <b>BMI Classification:</b> <?="$bmiClass";?>
                </p>
                
                <?php
                    endif
                ?>

            </div><!--/#form_container-->
        </div><!--/#wrapper-->
    </body>
</html>