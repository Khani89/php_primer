<?php
     $title = "While DO While Loop";
     include 'includes/header.php' 
?>

    <h1><?php echo $title ?></h1>
    <?php
        $grade = 0;
        //if the condition is not met it will be an infinite loop eg. below
       // while($grade < 10){
         //   echo '<p>I am less than 10</P>';
        //}

        while($grade < 10){
            echo '<p>I am less than 10</p>';
            $grade++;
        }
        
        echo 'EXIT LOOP';
    
    ?>

    <h1>Do While Loops</h1>
    <?php
        //Post-Condition Loop
        $grade = 0;
        do{
            echo '<p> I am DO While Loop</p>';
            $grade++;
        }while($grade < 10);
        echo 'EXIT LOOP';

    ?>


<?php require 'includes/footer.php'?>