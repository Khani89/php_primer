<?php
     $title = "String Manipulation";
     include 'includes/header.php' 
?>

    <h1><?php echo $title ?></h1>
    <?php
        //Concatenation of strings
        $phrase1 = "Students who came late";
        $phrase2 = "In class, stand with Rock";
        $name = "khani powell";
        echo $phrase1 . ", named Stephanie, " . $phrase2;
        echo '<br/>';
        echo '<hr/>';
        //String Transformation
        echo 'Uppercase first letter: ' . ucfirst($name). '<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name). '<br/>';
        echo 'Upper case: '. strtoupper($name).'<br/>';
        echo 'Upper case: '. strtolower("THIS WAS ALL UPPER CASE").'<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a',10) .'<br/>';
        echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a',10)) .
        '<br/>';
        echo 'Get a Substring: ' . substr($name, 3, 5).'<br/>';
        echo 'Get position of string: ' . strpos($name,'h').'<br/>';
        //Returns NULL
        //echo 'Get position of string: ' . strpos($combine, 'z').'<br/>';
        echo 'Find Character "P": ' . strchr($name, 'P').'<br/>';
        echo 'Find Character "e": ' . strchr($name, 'e').'<br/>';
        echo 'Find Character "i": ' . strchr($name, 'i').'<br/>';
        echo 'Find Character "o": ' . strchr($name, 'o').'<br/>';

        echo 'Find length of string: ' . strlen($name) .'<br/>';
        // the full stop means that we are joining letters are a sentence together
        echo 'Without trim: '. "A" . " B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

        echo 'Replace string with another: '. str_replace("stand", "sit",
        $phrase2 ) . '<br/>';



    ?>

<?php require 'includes/footer.php'?>