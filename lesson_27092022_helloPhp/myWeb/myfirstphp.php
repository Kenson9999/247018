<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP page</title>
</head>
<body>
    <h1>My first PHP page</h1>
    <?php
    echo "Welcome to our happy family!<br>";
    ?>
    <?php
        ECHO "Have a good day!<br>";
        echo "Have a good day!<br>";
        EChO "Have a good day!<br>";
    ?>
    <?php
    $a = 4 * 2;
    $b = 4 * 2;
    // addslashesasdas
    // asdasd
    ?>
    <?php
    $txt = "Variable Content Type Demo";
    $x = 5;
    $y = 20;
    echo $txt . "<br>";
    echo $x . "<br>";
    echo $y . "<br>";
    ?>
    <?php
    $color = 'red';
    echo "My shoe is " . $color . "<br>";
    echo "My shirt is " . $COLOR . "<br>";
    echo "My Shorts is " . $colOr . "<br>";
    ?>
    <?php
    $txt = "php.com";
    echo "I love $txt!<br>";
    ?>
    <?php
    $x=10;
    $y=5;
    echo $x+$y."<br>".$y."<br>";
    ?>
    <?php
    define("GREETING","Welcome to our place!");
    echo GREETING."<br>";
    define("PI",3.14);
    echo PI."<br>";
    ?>
    <?php
    $x="Good Morning";
    $y="Good Afternoon";
    $x= 5985;
    echo $x."<br>";
    $y=0123;
    $z=0x1E;
    var_dump($x);
    var_dump($y);
    var_dump($z);
    ?>
    <?php
    $a=1.2;
    var_dump(is_int($a));
    ?>
    <?php
    $b = 1.2;
    var_dump(is_float($b));
    ?>
    <?php
    $c=TRUE;
    var_dump(is_bool($c));//int(5985) int(83) int(30) bool(false) bool(true) bool(true)
    ?>

</body>
</html>