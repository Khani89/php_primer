<?php
    $title = "Index";
    include 'includes/header.php' 
?>
    <!-- Basic HTML -->
    <h1><?php echo $title ?></h1>
    <br/>
    <?php  
        //Printing to HTML using echo    
        echo 'hello PHP!';
        echo '<br/>'; //this code is used for breaking the line
        echo 'Second Line';
        echo '<br/>';

   
        //<!-- this line will be used to declare a variable, we can call on this 
        //variable anytime through out the coding, we do this by using the $ sign -->
        $name = 'Khani Powell';
        $age = 25;
        //echo variable - echo is used to display the information on the HTML page
        echo $name;
        //echo using single quotes
        echo '<h1>My Name is: '.$name.' </h1>';
        echo '<h1>My age is: '.$age.' </h1>';
        //echo using double quotes and interpolation
        echo "<h1>My Name is: $name </h1>";
    ?>

    <Button type="button" class="btn btn-primary">Click Here:</Button>
    <Button type="button" class="btn btn-success">Click Here:</Button>
    <Button type="button" class="btn btn-dark">Click Here:</Button>



    <?php    
    require 'includes/footer.php'
    ?>