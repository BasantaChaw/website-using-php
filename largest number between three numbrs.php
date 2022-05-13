<!---wap to find largest number among them three numbers ---->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>largest number among them 3 numbers</title>
</head>

<body style="background-color: black;">
    <h1 style="color:white;margin:20%;">
        <?php
        $a = 2;
        $b = 13;
        $c = 4;
        if ($a > $b) {
            if ($a > $c) {
                echo "The First Number Is Largest Number ! ";
            } else {
                echo "The Third Number Is Largest Number !";
            }
        } elseif ($b > $c) {
            echo "THe Scond Number iS largest Number !";
        } else {
            echo "The Third NUmber Is Largest Number !";
        }

        ?>
    </h1>
</body>

</html>