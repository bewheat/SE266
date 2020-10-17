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
                <h2 class='title'>Week 1 | Associative Array</h2>

                <h3 class="title" style="font-size:20px;">Task:</h3>

                <div id="list_container">

                    <ul>
                        <li><strong>Assignment: </strong><?=$task['Title']?></li>
                    </ul>

                    <ul>
                        <li><strong>Due Date: </strong><?=$task['Due']?></li>
                    </ul>

                    <ul>
                        <li><strong>Assigned To: </strong><?=$task['Assigned To']?></li>
                    </ul>

                    <ul>
                        <li>
                            <strong>Finished: </strong>

                            <?php

                                if($task['Completed']) {
                                    echo"&#9989";
                                } else {
                                    echo"&#10062";
                                }
                            ?>
                        </li>
                    </ul>

                </div><!--/#list_container-->




            </div><!--/#hw_assignment-->
        </div><!--/#wrapper-->
    </body>
</html>