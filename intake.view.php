<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Desiree Davis | Forms</title>
        <link rel="stylesheet" type="text/css" href="index.css"/>
    </head>

    <style type="text/css">
    
    header {
    width:980px;
    height: 120px;
    margin:auto;
    border-bottom: 2px solid red;
    }

    #logo {
    float:left;
    text-align: left;
    width:450px;
    height: 100px;
    line-height:20px;
    font-size:20px;
    color:red;
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

#assignment {
    float:left;
    width:150px;
    height:730px;
    margin: 25px 0 10px 10px;
    padding:10px;
    border:2px solid black;
    box-shadow:2px red;
    background-color:rgb(139, 0, 0,.3);
}

#nav_title {
    font-size:18px;
    text-align: center;
    color:red;
    text-shadow:3px,black;
}

.btn {
    float:left;
    display: block;
    width:120px;
    height: 40px;
    background-color:rgb(0, 0, 0, .5);
    color:red;
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
    
    
    </style>
    
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
            <div id="assignment">
                
                <h3 id="nav_title">ASSIGNMENTS</h3>
                <a class="btn" href="https://d-davis-se266.herokuapp.com/">Home</a>
                <a class="btn" href="week1/animals.php">Week 1| Animal Array</a>
                <a class="btn" href="week1/task.php">Week 1 | Task Array</a>
                <a class="btn" href="week1/check.php">Week 1 | Function</a>
                <a class="btn" href="week1/fizzbuzz.php">Week 1 | FizzBuzz</a>
                <a class="btn" href="intake.php">Week 2 | Forms</a>
                <a class="btn" href="#">Week 3</a>
                <a class="btn" href="#">Week 4</a>
                <a class="btn" href="#">Week 5</a>
                <a class="btn" href="#">Week 6</a>
                <a class="btn" href="#">Week 7</a>
                <a class="btn" href="#">Week 8</a>
                <a class="btn" href="#">Week 9</a>
                <a class="btn" href="#">Week 10</a>
                
            
            </div><!--#assignment-->

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

                        <input type="submit" name="submitBtn"/>

                    </form>
                    
                </div><!--/#form_container-->
            </div><!--/#hw_assignment-->
        </div><!--/#wrapper-->
    </body>
</html>