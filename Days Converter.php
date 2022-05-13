<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days into Weeks Years & Days</title>
    <style>
        body {
            background-color: thistle;
        }

        form {
            margin-left: 35%;
        }

        input {
            margin-top: 30%;
            padding: 1%;
        }

        h2 {
            margin-left: 35%;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: lightslategrey;
        }.years{
            width: 35px;
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <input type="number" name="Get_Data" placeholder="Enter No Of Days">
        <input type="submit" value="Calculate" name="login">
        <?php
        $Weeks="";
        $Years="";
        $Days="";
        if (isset($_POST['login'])) {
        $value = $_POST['Get_Data'];
        $Years = (int)($value / 365);
        $Weeks = (int)(($value % 365) / 7);
        $Days = (int)($value - (($Years * 365) + ($Weeks * 7)));
       
    }
    ?>
    <input type="text"placeholder="Years"value="<?php echo$Years; ?>"class="years">
    <input type="text"placeholder="Weeks"value="<?php echo$Weeks; ?>"class="years">
    <input type="text"placeholder="Days"value="<?php echo$Days; ?>"class="years">
    </form>
</body>
</html>