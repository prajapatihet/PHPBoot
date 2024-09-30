<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP-Echo vs Print</title>
</head>
<body> 
    <h1>Hello World</h1>
    <?php 
        echo "Using Echo PHP","\t", "Multiple line using echo", "<br>";
        print "Using Print PHP\t"; // print doesn't support multiple statements like echo
        echo "<br>";
        // $r = echo (34+36)  as echo don't return anything and this will raise an error
        $d = print (34+36);

        // But using using echo we can read variable value exist or not if there then return 1

        echo ($d);
        
    ?>
</body>
</html>