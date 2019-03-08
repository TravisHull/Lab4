<?php
echo '<div class="home-button">
        <a href="https://people.eecs.ku.edu/~t819h638/Lab3_Repo/index.html">Back Home</a>
      </div>';
      $q1 = $_POST["question1"];
      $q2 = $_POST["question2"];
      $q3 = $_POST["question3"];
      $q4 = $_POST["question4"];
      $q5 = $_POST["question5"];
      $score = 0;

echo "<div class='quiz_results' style='text-align: justify'>
        <h1> Quiz Results </h1><br><br>
        Question 1: What class is a direct prerequisite for EECS 448?<br>
        Your answer:  $q1<br>
        Correct answer:  EECS 268<br><br>
        Question 2: This statement is false.<br>
        Your answer:  $q2<br>
        Correct answer:  This is a trick question, the correct answer is to leave it blank.<br><br>
        Question 3: How many snow days have we had this Spring?<br>
        Your answer:  $q3<br>
        Correct answer:  4<br><br>
        Question 4: This is the last question.<br>
        Your answer:  $q4<br>
        Correct answer:  False<br><br>
        Question 5: What grade will I receive for this lab?<br>
        Your answer:  $q5<br>
        Correct answer:  100%<br><br>
      </div>";

      if ($q1 == "EECS 268")
        $score = $score + 20;
      if ($q2 == "")
        $score = $score + 20;
      if ($q3 == "4")
        $score = $score + 20;
      if ($q4 == "False")
        $score = $score + 20;
      if ($q5 == "100%")
        $score = $score + 20;

echo "<div class=' quiz_score' style='text-align: center'>
      Your score is $score%
      </div>";
 ?>
