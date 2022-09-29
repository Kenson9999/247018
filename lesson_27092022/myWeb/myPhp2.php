<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php2</title>
</head>
<body>
<?php
    $x[0] = 1;
    $x[1] = 2;
    $x[2] = 3;
    $vehicle = array("Truck","Van","Private Car");
    var_dump($x);
    echo $vehicle."<br>";
    ?>
    <?php
    $a = array("color"=>"red","fruit"=>"apple",15,);
    echo var_dump($a)."<br>";
    $b = ["color"=>"red","fruit"=>"apple",15,];
    echo var_dump($b)."<br>";

    ?>
    <?php
    $x=10;
    $y=5;
    echo $x+$y;
    ?>
    <?php
    $x=10;
    $y=5;
    echo $x+$y;
    ?>
    <?php
    class book{
        var $title;
        var $author;
        var $price;
    }
    $b = new book();
    var_dump($b);
    echo "111111<br>";
    ?>
    <?php
    $x = "Good day!";
    $x = null;
    echo var_dump($x)."1231";
    ?>
    <?php
    $a = @mysql_connect('localhost','user','password');
    echo $a."<br>";
    ?>
    <?php
    $x=10;
    $y=5;
    echo $x+$y;
    ?>
</body>
</html>