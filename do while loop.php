<!---Wap to print sum of all natural number---Using Do while loop ---->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sum of natural number using do while loop</title>
</head>

<body style="background-color: green;">
    <h1 style="color: white;">
        <?php
        $num = 10;
        $sum = 0;
        $i=1;
        do {
            $sum += $i;
            $i++;
        } while ($i <= $num);
        echo "The Sum Of Natural Number Is :", $sum;
        ?>
    </h1>
</body>

</html>