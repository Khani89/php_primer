<?php
     $title = "Functions";
     include 'includes/header.php' 
?>

    <h1><?php echo $title ?></h1>
    <?php

        //Defining a function

        function writemessage(){
            echo "you'r a really nice person, have a nice time! <br/>";
        }

        //calling a function

        writemessage();
        writemessage();
        writemessage();
        writemessage();
        writemessage();
        
        echo "<br/>";
        //Functions with parameters
        function addfunction($num1, $num2){
        $sum = $num1 + $num2;
        $num2 = $num2 + 1;
        echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

        function changenum(&$num){
            $num = $num + 10;
            //a simpler way to write the code above is $num+= 10;
        }

        function returnproduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        $num = 500;
        addfunction(10, 20);
        addfunction(10, $num);
        addfunction('10', '50');

        changenum($num);
        echo $num . '<br/>';

        $return_value = returnproduct(10, 200);
        echo  $return_value . '<br/>';
    ?>

<?php require 'includes/footer.php'?>