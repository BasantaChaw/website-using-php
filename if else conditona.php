<!--- Wap to check given character Is Alphabets Or Not---->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check character Is Alphabets or Not</title>
    <style>
        body{
            background-color: gray;

        }h1{
            margin: 20%;
            color:white;
        }
    </style>

</head>

<body>
    <h1>
        <?php
        $character = ',';
        if (($character >= 'A' && $character <= 'Z') || ($character >= 'a' && $character <= 'z')) {
            echo "The Character Is Alphabets !";
        } else {
            echo "The Character Is Not Alphabets !";
        }
        ?>
    </h1>
</body>

</html>