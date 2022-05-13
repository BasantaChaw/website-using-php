<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-rcale=1.0">
    <title>Shut_Down</title>
    <style>
        body {
            background-color: thistle;
            background-repeat: no-repeat;
            background-size: cover;
        }

        input,
        select {
            margin: 0%;
            padding: 1%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-bottom-left-radius: 10px;
            border-top-right-radius: 10px;
            background-color: lightgray;
            text-align: center;
        }

        form {
            margin-left: 35%;
        }

        .first_input {
            width: 13%;
        }

        .second_select {
            width: 13%;
        }

        img {
            margin-left: 41%;
        }

        .mar {
            margin-left: 41.5%;
            margin-right: 46.3%;
        }
    </style>
</head>

<body>
    <marquee direction="right">
        <h2 style="color:white;font-family:'Courier New', Courier, monospace;">WelCome To DreamCode & Developed By @Basanta chaudhary</h2>
    </marquee>
    <img src="display.png" />
    <marquee class="mar" behavior="alternate">
        <h2 style="color:gray;font-family:cursive;">Power Button</h2>
    </marquee>
    <form action="" method="POST">
        <input type="number" placeholder="Interval Time" name="time" class="first_input">
        <select name="choose" class="second_select">
            <option value="Sleep">Sleep</option>
            <option value="log_out">Log-out</option>
            <option value="restart">Restart</option>
            <option value="shutdown">Shuttdown</option>
        </select>
        <input type="submit" value="Proccess" name="shut">

    </form> 
    <?php
    if (isset($_POST['shut'])) {
        $getValue = $_POST['time'];
        $getChoose = $_POST['choose'];
        if ($getChoose == 'shutdown') {
            if ($getValue == 5) {
                exec('shutdown -s -t 5');
            } else if ($getValue == 10) {
                exec('shutdown -s -t 600');
            } else if ($getValue == 15) {
                exec('shutdown -s -t 900');
            } else if ($getValue == 30) {
                exec('shutdown -s -t 1800');
            } else if ($getValue == 1) {
                exec('shutdown -s -t 3600');
            }
        } else if ($getChoose == 'restart') {
            if ($getValue == 5) {
                exec('shutdown -r -t 5');
            } else if ($getValue == 10) {
                exec('shutdown -r -t 600');
            } else if ($getValue == 15) {
                exec('shutdown -r -t 900');
            } else if ($getValue == 30) {
                exec('shutdown -r -t 1800');
            } else if ($getValue == 1) {
                exec('shutdown -r -t 3600');
            }
        } else if ($getChoose == 'Sleep') {
            if ($getValue == 5) {
                exec('shutdown/h');
            }
        } else if ($getChoose == 'log_out') {
            if ($getValue == 5) {
                exec('logoff');
            }
        }
    }
    ?>
</body>

</html>