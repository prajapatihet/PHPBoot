<!DOCTYPE html>
<html lang="en">
<head>
    <title>Variable in PHP</title>
</head>
<body>
    <h1>PHP Variable</h1>
    <?php 
        $name = "Het";
        echo $name;
        echo "<br/>";
        $a = 10;
        $b = 9;
        echo $a + $b;
        echo "<br/>";
        echo $a * $b;
        echo "<br/>";
        echo $a / $b;
        echo "<br/>";

        // functions

        function myFunc(){
            global $name;
            $course = "PHP Course by me";
            echo $course;
            echo "<br/>";
            echo $name;
        }
        
        myFunc();   

    ?>
</body>
</html>