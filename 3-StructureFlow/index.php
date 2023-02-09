<?php 
/* Looping
    1. For
    2. While
    3. Do.. While
    4. Foreach: Looping for Array
*/

// For
/*
    for ($i = 0; $i < 5; $i++){
        echo "For Hai <br>";
    }
*/

// While
/*
    $a = 0;
    while ($a < 5) {
        echo "While Hai  <br>";
        $i++;
    }
*/

// Do.. While
/*
    $b = 6;
    do {
        echo "Do Hai <br>";
        $b++;
    } while ($b < 5);
*/
// Foreach: Looping for Array

/* Conditionals
    1. If Else
    2. If Else If Else
    3. Ternary
    4. Switch
*/

// If Else
/*
    $x = 10;
    if ($x < 20) {
        echo "Benar";
    } else if ($x == 20){
        echo "20";
    } else {
        echo "Salah";
    }
*/
// Ternary

// If Else
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
    .color-class {
        background-color: silver;
    }    
    </style>
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0">
    <?php for($c = 1; $c <= 5; $c++) :?>
        <?php if($c % 2 == 1) : ?> 
            <tr class="color-class">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for($d = 1; $d <=5; $d++) :?>
                <td><?php echo "$c, $d"; ?></td>
            <?php endfor; ?>
    <?php endfor; ?>
</table>

</body>
</html>