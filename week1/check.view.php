<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Desiree Davis | SE266</title>
        <link rel="stylesheet" type="text/css" href="week1.css"/>
    </head>
    
    <body>
    
        <!--wrapper for whole page-->
        <div id="wrapper">

            <div id="hw_assignment">
                <h2 class='title'>Week 1 | Using Functions</h2>

                <h3 class="title" style="font-size:20px;">Are You Old Enough?</h3>

                <div id="php_container">
                    <?php
                        foreach($ages as $name => $age) {
                            if (ageCheck($age)) {
                                echo "$name, can come in. Age:$age &#9989<br><hr><br>";
                            } else {
                                echo "Sorry $name, come back when you're older. Age:$age &#10062<br><hr><br>";
                            }
                        }
                    ?>
                </div><!--/#php_container-->

            </div><!--/#hw_assignment-->
        </div><!--/#wrapper-->
    </body>
</html>