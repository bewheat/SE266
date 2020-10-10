<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Desiree Davis | SE266</title>
        <style type="text/css">
            
            body {
                background-image:url(images/5-dots.png);
                background-color:black;
            }
            
            #wrapper {
                
                width:980px;
                margin:auto;
                border:none;
                background-color: rgb(48, 12, 12,.5);
                box-shadow: 3px black;
                height:880px;
            }
            
            header {
                width:980px;
                height: 120px;
                margin:auto;
                border-bottom: 2px solid darkred;
            }
            
            #logo {
                float:left;
                text-align: left;
                width:450px;
                height: 100px;
                line-height:20px;
                font-size:20px;
                color:darkred;
                margin:10px;
            }
            
            #git_container {
                float:right;
                width:150px;
                padding:10px;
            }
            
            .git_link {
                display:block;
                text-decoration: none;
                font-size:20px;
            }
            
            #assignments {
                float:left;
                width:150px;
                height:630px;
                margin: 25px 0 10px 10px;
                padding:10px;
                border:2px solid black;
                box-shadow:2px red;
                background-color:rgb(139, 0, 0,.3);
            }
            
            #nav_title {
                font-size:18px;
                text-align: center;
                color:rgb(105, 0, 0);
                text-shadow:3px,black;
            }
            
            .btn {
                float:left;
                display: block;
                width:120px;
                height: 40px;
                background-color:rgb(0, 0, 0, .5);
                color:darkred;
                margin-top:5px;
                margin-left:15px;
                text-align: center;
                line-height: 40px;
                text-decoration: none;
                border:1px solid rgb(0, 0, 0);
            }
            
            .btn:hover {
                font-size: 25px;
                color:black;
                background-color:rgb(139, 0, 0, .3);
            }
            
            a {
                text-decoration: none;
                display:block;
                color:darkred;
            }

            a:hover {
                color:rgb(91, 1, 119);
                font-size:25px;
            }

            .title {
                font-size:25px;
                color:rgb(105, 0, 0);
            }

            .hw_assignment {
                text-align:center;
                float:right;
            }
            
            
            footer {
                clear:both;
                border-top:1px solid darkred;
                text-align: center;
                color:darkred;
            }
            
        
        </style>
    </head>
    
    <body>
    
        <!--wrapper for whole page-->
        <div id="wrapper">
            
            <!--*****************HEADER****************-->
            <!--Title(name) will go here-->
            <header>
                <div id="logo">
            
                    <h1 class="name">Desiree Davis</h1>
                    <h2 class="class">SE266 | PHP & MySQL</h2>
                
                </div><!--/#logo-->
                
                <div id="git_container">
                    
                    <a class="git_link" href="https://github.com/bewheat/SE266">Git Repository</a>
                
                </div><!--/#git_container-->
            </header>
            
            <!--*****************Page Content*************-->
            <!--assignment bar-->
            <div id="assignments">
                
                <h3 id="nav_title">ASSIGNMENTS</h3>
                <a class="btn" href="https://d-davis-se266.herokuapp.com/">Home</a>
                <a class="btn" href="animals.php">Week 1 | Array</a>
                <a class="btn" href="#">Week 1 | FizzBuzz</a>
                <a class="btn" href="#">Week 1 | Savings</a>
                <a class="btn" href="#">Week 2</a>
                <a class="btn" href="#">Week 3</a>
                <a class="btn" href="#">Week 4</a>
                <a class="btn" href="#">Week 5</a>
                <a class="btn" href="#">Week 6</a>
                <a class="btn" href="#">Week 7</a>
                <a class="btn" href="#">Week 8</a>
                <a class="btn" href="#">Week 9</a>
                <a class="btn" href="#">Week 10</a>
                
            
            </div><!--#assignments-->

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
            
            
            <!--**************FOOTER***************-->
            <footer>
                
                <p>Last Updated 10/9/2020 11:53PM</p>
            
            </footer>
        
        </div><!--/#wrapper-->
    </body>
</html>