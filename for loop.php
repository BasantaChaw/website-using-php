<!--- Wap to print alll numbers from 1 to 'n' Numbers !--->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print alll number from 1 to n Numbrs using for_Loop</title>
    <style>
    body{
        background-color: lightslategray;

    }
    h1{
        margin-left: 13%;
        color: blue;
    }
    </style>
</head>
<body>
    <h1>
    <?php
    $n=100;
    for($i=1;$i<=$n;$i++){
        echo $i,"<br>";
    }
    ?>
    </h1>
</body>
</html>