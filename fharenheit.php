<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert temperature</title>
    <?php
    $fha = 0;
    $centi = $_GET['value'];
    $fha = (9.0 / 5) * $centi + 32;
    ?>
    <style>
        body {
            background-color: lightblue;
        }

        input {
            outline: none;
            padding: 4px;
            margin-top: 2%;
            margin-left: 40%;
        }
    </style>
</head>

<body>

    <form action="" method="get">

        <input type="text" name="value"/>
        <br>
        <input type="text" name="result"value="<?php echo "", $fha; ?>"/>
        <button type="sumbit">Ok</button>
    </form>
</body>

</html>