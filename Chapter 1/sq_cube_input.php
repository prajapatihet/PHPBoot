<!DOCTYPE html>
<html lang="en">
<head>
    <title>Square and Cube of User value</title>
</head>
<body>
    <form action="#" method="get">
        <input type="number" name="num">
        <input type="submit" name="sub">
    </form>
    <?php
        if(isset($_GET['sub'])){
            $n = $_GET['num'];
            echo "Square of ".$n." is ".($n*$n);
            echo "<br>";
            echo "Cube of ".$n." is ".($n*$n*$n);
        }
    ?>
</body>
</html>