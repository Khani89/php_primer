<?php
     $title = "IF Statements";
     include 'includes/header.php' 
?>

    <h1><?php echo $title ?></h1>

    <?php

        //An if statement that will carry out an action based on the value of the variable 

        echo'<h2>If Statement</h2>';
 
        $grade = 30;
        // ===, ==, >, <, <=, >=,
        if($grade >= 50){
            echo '<h3 style= "color: green">You have Passed</h3>';
        } 
        else{
            echo '<h3 style= "color: red">You have Failed</h3>';
        }
        $grade = 'A';
        //If-Else If-Else
        if($grade == 'A'){
            echo '<h2 style= "color: green">Excellent Job</h2>';
        }
        elseif($grade == 'B'){
            echo '<h2 style= "color: blue">Good Job</h2>';
        }
        else{
            echo '<h2 style= "color: red">You have Failed</h2>';
        }
    ?>

<?php require 'includes/footer.php'?>