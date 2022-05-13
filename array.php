<!----wap to print alll elements in array ---->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body style="background-color: lightgray;">
    <h1 style="color: orange;">
    <?php
    $names=array("Basanta","Naresh","Dhiraj","Roshan","Anuragh","Abdulla","Sabina","Aditya");
   echo"<pre>";
   
    print_r($names);
    echo"The Person Name Is:",$names[6];
    ?>
    </h1>
    
</body>
</html>