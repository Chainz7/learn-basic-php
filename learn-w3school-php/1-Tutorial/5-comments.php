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
        <span>
            <?php
            echo "single-line //<br>";
            // This is a single-line comment
            echo "single-line #<br>";
            # This is also a single-line comment
            echo "multiple-line /* */";
            /*
                This is a multiple-lines comment block
                that spans over multiple
                lines
            */
            ?>
        </span>
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