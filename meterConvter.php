<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Converter</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;
        }

        body {
          background-image: url("heart.jpg");
        }

        form {
            margin-top: 20%;
            margin-left: 30%;
        }

        input {
            padding: 1%;

            text-align: center;
            transition: 1.2s;
            font-weight: bolder;
            width: 9%;
        }

        select {
            width: 7.3%;
            padding: 1%;
        }

        .result {
            width: 3.1%;
            border-bottom-right-radius: 32%;
            transition: 1.2s;
            border: none;
            outline: none;
        }h2{
            margin-left: 19%;
            margin-bottom: 5%;
            color:white;
            font-size: 2pc;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
    <h2>Unit Converter</h2>
        <select name="Choose1" style="border-top-left-radius: 32%;">
            <option value="cm">cm</option>
            <option value="m">m</option>
            <option value="km">km</option>
        </select>
        <input type="number" name="First" placeholder="Enter value">
        <select name="Choose2">
            <option value="cm">cm</option>
            <option value="m">m</option>
            <option value="km">km</option>
        </select>
        <input type="submit" name="login" value="Calculate">
        <input type="reset" name="reset" value="Reset">
        <?php
        $result = "";
        $cha = "";
        if (isset($_POST['login'])) {
            $First_Compare = $_POST['Choose1'];
            $Second_Compare = $_POST['Choose2'];
            $get_ValueFrom_User = $_POST['First'];
         if ($First_Compare == 'cm' && $Second_Compare == 'cm') {
                $result = $get_ValueFrom_User;
                $cha = "cm";
            } else if ($First_Compare == 'cm' && $Second_Compare == 'm') {
                $result =  ($get_ValueFrom_User / 100);
                $cha = "m";
            } else if ($First_Compare == 'cm' && $Second_Compare == 'km') {
                $result =  (($get_ValueFrom_User) / 1000);
                $cha = "km";
                //----------------------------------------------------------------------
            } else if ($First_Compare == 'm' && $Second_Compare == 'cm') {
                $result =  ($get_ValueFrom_User * 100);
                $cha = "cm";
            } else if ($First_Compare == 'm' && $Second_Compare == 'm') {
                $result = $get_ValueFrom_User;
                $cha = "mm";
            } else if ($First_Compare == 'm' && $Second_Compare == 'km') {
                $result =  (($get_ValueFrom_User) / 1000);
                $cha = "km";
            
            //---------------------------------------------------------------------------
           
            } else if ($First_Compare == 'km' && $Second_Compare == 'cm') {
                $result =  ($get_ValueFrom_User * 100);
                $cha = "cm";
            } else if ($First_Compare == 'km' && $Second_Compare == 'm') {
                $result =  (($get_ValueFrom_User) * 1000);
                $cha = "mm";
            } else if ($First_Compare == 'km' && $Second_Compare == 'km') {
                $result = $get_ValueFrom_User;
                $cha = "km";
            }
        }
        ?>
        <input type="text" placeholder="0.00" style="width:4%;" value="<?php echo $result;  ?>">
        <input type="text" placeholder="----" class="result" value="<?php echo $cha;  ?>">
    </form>
</body>

</html>