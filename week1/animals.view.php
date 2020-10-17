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
                <h2 class='title'>Week 1 | Animal Array</h2>

                <div id="list_container">

                    <ul>
                        <?php

                            foreach($animals as $animal) {
                                echo "<li>{$animal}</li>";
                            }

                        ?>
                    </ul>

                </div><!--/#list_container-->




            </div><!--/#hw_assignment-->
        </div><!--/#wrapper-->
    </body>
</html>