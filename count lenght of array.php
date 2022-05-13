<!----Wap to find lenght of Array ---
The Program Is Coded BY Basanta chaudhary !
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lenght of array</title>
</head>

<body style="background-color: brown;">
    <h1 style="color:yellow;margin:20%;">
        <?php
        $i = 0;
        $Cars = array("Lamborgini", "Ford", "TeslA", "rOYALrANGER", "Bugatti", "Mini van");
        $lenght = count($Cars);
        echo "The Lenght Of Array Is :", $lenght;
        echo"<br><hr>The List Of Cars !<br>";
        for ($i = 0; $i < $lenght; $i++) {
            echo "<br>", $Cars[$i];
        }
        ?>
    </h1>
</body>

</html>