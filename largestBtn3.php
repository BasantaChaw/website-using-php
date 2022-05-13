<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Number Between 3 Number</title>
    <style>
        body {
            background-color: beige;
        }

        * {
            margin: 0%;
            padding: 0%;
        }

        input {
            padding: 1%;
            outline-color: lightcoral;
            margin: 2%;

        }

        .banner {
            margin: 15%;
            margin-left: 40%;
        }
    </style>
</head>

<body>
    <form class="banner" action="" method="POST">
        <input type="number" placeholder="Enter First value" name="first"><br>
        <input type="number" placeholder="Enter Second value" name="second"><br>
        <input type="number" placeholder="Enter Thiird Value" name="third">
        <input type="submit" name="sumbit" value="Find">

    </form>
    <pre>
        <?php

        $number = $_POST['first'];
        $number1 = $_POST['second'];
        $number2 = $_POST['third'];
        if ($number > $number1) {
            if ($number > $number2) {
                echo "The Largest Number Is :", $number;
            } else {
                echo "The Largest Number Is :", $number2;
            }
        } else if ($number1 > $number2) {
            echo "The Largest Number Is :", $number1;
        } else {
            echo "The Largest Number Is :", $number2;
        }
        ?>
    </pre>
</body>

</html>