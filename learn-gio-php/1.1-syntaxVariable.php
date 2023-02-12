<?php 

echo "Hello";

$name = 'Hey';
echo $name;

$x = 1;
$y = &$x;

$x = 3;

$firstName = 'John';
echo "Hello {$firstName}";
echo "Hello " . $firstName;

// Below is php in html
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php 
            $a = 10;
            $b = 5;

            echo $x . ', ' . $y;
        ?>
        <?= "hello world" ?>
    </h1>
</body>

</html>