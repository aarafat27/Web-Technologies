<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">

<head>
    <title>Quiz app</title>
</head>

<body>
    <!-- Header start -->
    <header id="main-header">
        <div class="container">
            <h1>My Quiz App</h1>
            
        </div>
    </header>
    <!-- HEADER END -->
    <!-- Navbar start -->
    <div id="navbar">
        <nav class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
    <!-- Navbar End -->
    <!-- SHOWCASE START -->
    <div id="showcase">
        <div>
            <h1 class="container"> Course: Web Technologies, Section: 'L' </h1>
            <h1 class="container">ID: 19-39377-1</h1>
        </div>
    </div>
    <!-- END -->
    <!-- MAIN START -->

    <div class="container">
        <div id="main">
            <h1>Questions</h1>
            <form action="index.php" method="post">
          
            Q1. What is the number, if 40% of the number is 380?
            <br>
            <input type="radio"  name = "ques-1-ans" value = "a">
            680 
            <br>
            <input type="radio" name = "ques-1-ans" value = "b">
            950
            <br>
            

            Q2. What is the average of first 150 natural numbers?
            <br>
            <input type="radio"  name = "ques-2-ans" value = "a">
            70 
            <br>
            <input type="radio" name = "ques-2-ans" value = "b">
            70.5
            <br>


            Q3.  0.003 × 0.02 = ?
            <br>
            <input type="radio"  name = "ques-3-ans" value = "a">
            0.06 
            <br>
            <input type="radio" name = "ques-3-ans" value = "b">
            0.00006
            <br>
            

            Q4.  What is the rate of discount if a car which price was $4,000 was sold for $3,200?
            <br>
            <input type="radio"  name = "ques-4-ans" value = "a">
            16% 
            <br>
            <input type="radio" name = "ques-4-ans" value = "b">
            20%
            <br>
            

            Q5. What is the value of x in the equation 3x – 15 – 6 = 0 ?
            <br>
            <input type="radio"  name = "ques-5-ans" value = "a">
            7 
            <br>
            <input type="radio" name = "ques-5-ans" value = "b">
            9
            <br>
            

            Q6. What comes next in the sequence: 1, 3, 11, 43, ____ ?
            <br>
            <input type="radio"  name = "ques-6-ans" value = "a">
            161 
            <br>
            <input type="radio" name = "ques-6-ans" value = "b">
            171
            <br>
           

            Q7. In a class of 40 students 20% are girls. How many boys are there in the class?
            <br>
            <input type="radio"  name = "ques-7-ans" value = "a">
            26 
            <br>
            <input type="radio" name = "ques-7-ans" value = "b">
            32
            <br>
           

            Q8.  What is the distance traveled by a car which traveled at a speed of 80 km/hr for 3 hours and 30 minutes?
            <br>
            <input type="radio"  name = "ques-8-ans" value = "a">
            280 km 
            <br>
            <input type="radio" name = "ques-8-ans" value = "b">
            290 km
            <br>
            

            Q9. How many feet there are in 5 meters? If 1 meter = 3.281 feet.
            <br>
            <input type="radio"  name = "ques-9-ans" value = "a">
            15.505 
            <br>
            <input type="radio" name = "ques-9-ans" value = "b">
            16.405
            <br>
           

            Q10. What is average (Arithmetic Mean) of the numbers: 2, 4, 5, 0, 9, 10, and 12?
            <br>
            <input type="radio"  name = "ques-10-ans" value = "a">
            4 
            <br>
            <input type="radio" name = "ques-10-ans" value = "b">
            6
            <br>
            <br>
            
            <input type = "submit" name = "submit">
            
           

           </form>

        </div>
        <div id="sidebar">
            <h2>Result: </h2>
            <?php

            if (isset($_POST["submit"]))
            {
                $ans1 = $_POST['ques-1-ans'];
                $ans2 = $_POST['ques-2-ans'];
                $ans3 = $_POST['ques-3-ans'];
                $ans4 = $_POST['ques-4-ans'];
                $ans5 = $_POST['ques-5-ans'];
                $ans6 = $_POST['ques-6-ans'];
                $ans7 = $_POST['ques-7-ans'];
                $ans8 = $_POST['ques-8-ans'];
                $ans9 = $_POST['ques-9-ans'];
                $ans10 = $_POST['ques-10-ans'];


                $totalCorrect = 0;

                if ($ans1 == "b") { $totalCorrect++; }
                if ($ans2 == "b") { $totalCorrect++; }
                if ($ans3 == "b") { $totalCorrect++; }
                if ($ans4 == "b") { $totalCorrect++; }
                if ($ans5 == "a") { $totalCorrect++; }
                if ($ans6 == "b") { $totalCorrect++; }
                if ($ans7 == "b") { $totalCorrect++; }
                if ($ans8 == "a") { $totalCorrect++; }
                if ($ans9 == "b") { $totalCorrect++; }
                if ($ans10 == "b") { $totalCorrect++; }
                
                
                echo "$totalCorrect / 10 correct</div>";
            }
           

            ?>
                

        </div>

    </div>
    <!-- MAIN END -->
    <footer>
        <p id="main-footer">Copyright &copy; 2022, My Website</p>
    </footer>
</body>

</html>