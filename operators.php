<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arithmetic operators</h1>
    <p>Adding 5 and 3</p>
    <?php
    $x = 5;
    $y = 3;

    echo $x + $y;
    ?>
    <p>Subraction 5 and 3</p>
    <?php
    $x = 5;
    $y = 3;
    echo $x - $y;
    ?>
    <p>Multipy 5 and 3</p>
    <?php
    $x = 5;
    $y = 3;

    echo $x * $y;
    ?>
    <p>Division 5 and 3</p>
    <?php
    $x = 5;
    $y = 3;

    echo $x / $y;
    ?>
    <p>Modulus 5 and 3</p>
    <?php
    $x = 5;
    $y = 3;

    echo $x % $y;
    ?>
    <p>Exponentiation 5 and 3</p>
    <?php
    $x = 5;
    $y = 3;

    echo $x ** $y;
    ?>
    <h1>Assignment operators</h1>
    <P>adding $x=10 with $x+=40</p>
    <?php
    $x = 10;
    $y += 40;
    echo $x;
    ?>
    <P>subtracting $x=10 with $x-=40</p>
    <?php
    $x = 10;
    $y -= 40;
    echo $x;
    ?>
    <P>multipy $x=10 with $x*=40</p>
    <?php
    $x = 10;
    $y *= 40;
    echo $y;
    ?>
    <P>division $x=10 with $x/=40</p>
    <?php
    $x = 10;
    $y /= 40;
    echo $x;
    ?>
    <P>modulus $x=10 with $x%=40</p>
    <?php
    $x = 10;
    $y %= 40;
    echo $x;
    ?>
    <h1>Comparsion operators</h1>
    <P>Returns true if $x is equal to $y</p>
    <?php
    $x = 100;
    $y = "100";
    var_dump($x == $y);
    ?>
    <p> reurns true if $x is equal to $y, and they are same type</p>
    <?php
    $x = 100;
    $y = 100;
    var_dump($x == $y);
    ?>
    <h1>Increment / Decrement Operators</h1>
    <p>Increments $x by one, then returns $x</p>
    <?php
    $x = 10;
    echo ++$x;
    ?>
    

</body>
</html>