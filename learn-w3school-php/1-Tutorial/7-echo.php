<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Tutorial</title>
</head>

<body>
    <div class="php-output">
        <p>
            <?php
            echo "PHP is Fun!<br>";
            echo "Hello world!<br>";
            echo "I'm about to learn PHP!<br>";
            echo "This ", "string ", "was ", "made ", "with multiple parameters.";
            ?>
        </p>
        <p>
            <?php
            $txt1 = "Learn PHP";
            $txt2 = "W3Schools.com";
            $x = 5;
            $y = 4;

            echo "<div>" . $txt1 . "</div>";
            echo "Study PHP at " . $txt2 . "<br>";
            echo $x + $y;
            ?>
        </p>
    </div>
    <div class="header">
        <h2><a href="../index.html">Home </a>/</h2>
        <h2>&nbsp;Home</h2>
    </div>
    <div class="container">
        <?php include "routes.php" ?>
    </div>
</body>

</html>