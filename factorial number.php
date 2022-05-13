<!--- Wap to find Number of Factorial Number !---->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
    <style>
h1{
    margin: 40%;
}
    </style>
</head>
<body style="background-color: black;">
    <h1 style="color: white;">
    <?php
    $fact=1;
    $num=5;
    $i;
    for($i=1;$i<=$num;$i++){
        $fact*=$i;
    }
    echo"THe Factorial Number Is :",$fact,"<hr>";
    ?>
    </h1>
</body>
</html>