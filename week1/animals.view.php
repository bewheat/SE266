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