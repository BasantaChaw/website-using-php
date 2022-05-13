<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;
        }

        body {
            background-image: url("bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .banner {
            margin-left: 34%;

            margin-top: 5%;

        }

        input {
            transition-duration: 1.2s;
            text-align: center;
            outline: none;
            border-radius: 6px;
            background-color: transparent;
            border: 2px solid lightgray;
            padding: 0.8%;
            margin-top: 1.4%;
        }

        input:hover {
            border: 2px solid lightsalmon;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        select,
        option {
            border-radius: 6px;
            padding: 0.7%;
            color: rgb(114, 114, 114);
            background-color: transparent;
            margin-top: 1%;
            border: 2px solid lightgray;
            text-align: center;
            padding-left: 1.5%;
        }

        select:hover {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        hr {
            margin-top: 1%;
            width: 41.7%;
            color: lightgray;
        }

        p {
            margin-left: 16%;
            margin-top: 0.5%;
            color: rgb(128, 126, 126);
        }

        .button:hover {
            background-color: rgb(59, 218, 120);

        }

        .button1:hover {
            background-color: rgb(230, 59, 124);

        }

        .button2:hover {
            background-color: rgb(247, 4, 4);

        }

        .button {
            text-align: center;
            margin-left: 4%;
        }

        table,
        td,
        th {
            border: 2px solid rgb(175, 175, 175);
            text-align: center;
            height: 15%;
            border-radius: 5px;
            color: rgb(82, 77, 77);
            margin-top: 3%;
            margin-left: 10%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        td {

            width: 65px;
        }

        th {

            width: 60px;
        }

        .roll {
            width: 4pc;
        }

        .age {
            width: 3.8pc;
        }marquee{
            
            font-weight: bolder;
            font-size: 30px;
            margin-left: 30%;
            margin-right: 30%;
            border-radius:80px;
            color:green;
            font-family:cursive;
        }
    </style>
</head>

<body><marquee behavior="alternate">Registeration-Form</marquee>

    <div class="banner">
        <form action="" method="POST">
            <input type="text" name="first-name" placeholder="First Name">
            <input type="text" name="last-name" placeholder="Last Name"><br>
            <input type="number" name="roll" placeholder="Roll No" class="roll">
            <input type="number" name="age" placeholder="Age" class="age">
            <select name="choose">
                <option>Sex</option>
                <option>Male</option>
                <option>Female</option>
            </select>
            <select name="depart">
                <option>Department</option>
                <option>DCOM</option>
                <option>DCE</option>
            </select><br>
            <input type="email" name="Emaile-Id" placeholder="Emaile ID">
            <input type="password" name="" placeholder="Password"><br>
            <input type="number" name="Contact-No" placeholder="Contact No">
            <input type="text" name="CollegeName" placeholder="College Name">
            <hr>
            <p>Subject Marks</p>
            <hr>
            <input type="number" name="dsa" placeholder="Data Structure">
            <input type="number" name="micro" placeholder="Microprocessors"><br>
            <input type="number" name="WebTechnology" placeholder="WebTech & Programing">
            <input type="number" name="dbms" placeholder="D B M S"><br>
            <input type="number" name="math" placeholder="M a t h">
            <input type="number" name="Electronic" placeholder="E D C"><br>
            <input type="submit" value="Submit" name="login" style="color:green;margin-left:0%;width: 8.5%;" class="button">
            <input type="button" value="Back" name="back" style="color:green;margin-left: 3.5%;width: 17%;" class="button1">
            <input type="reset" value="Reset" name="Reset" style="color:green;margin-left: 3.8%;width: 8.5%;" class="button2">
        </form>
    </div>
    <?php
    if (isset($_POST['login'])) {
        
            $first_name = $_POST['first-name'];
            
            $last_name = $_POST['last-name'];
            $Emaile = $_POST['Emaile-Id'];
            $roll = $_POST['roll'];
            $age = $_POST['age'];
            $sex = $_POST['choose'];
            $depart = $_POST['depart'];
            if ($sex == "Male") {
                $gender = "Male";
            } else if ($sex == "Female") {
                $gender = "Female";
            }
            $contact = $_POST['Contact-No'];
            $college = $_POST['CollegeName'];
            if ($depart == "DCOM") {
                $coll = "Computer Engineer";
            } else if ($depart == "DCE") {
                $coll = "Civil Engineer";
            }

            $total = 0;
            $sub1 = $_POST['dsa'];
            $sub2 = $_POST['micro'];
            $sub3 = $_POST['WebTechnology'];
            $sub4 = $_POST['dbms'];
            $sub5 = $_POST['math'];
            $sub6 = $_POST['Electronic'];
            $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5 + $sub6;
            $percent = (int)($total / 6);
            if ($percent >= 90 && $percent <= 100) {
                $grade = 'A+';
            } else if ($percent >= 80 && $percent <= 90) {
                $grade = 'A';
            } else if ($percent >= 70 && $percent <= 80) {
                $grade = 'B+';
            } else if ($percent >= 60 && $percent <= 70) {
                $grade = 'B';
            } else if ($percent >= 50 && $percent <= 60) {
                $grade = 'C+';
            } else if ($percent >= 40 && $percent <= 50) {
                $grade = 'C';
            } else if ($percent >= 30 && $percent <= 40) {
                $grade = 'D+';
            } else if ($percent >= 20 && $percent <= 30) {
                $grade = 'D';
            } else if ($percent >= 10 && $percent <= 20) {
                $grade = 'E+';
            } else if ($percent >= 0 && $percent <= 10) {
                $grade = 'E';
            } else {
                $grade = "Try Again !";
            }
            echo "<table><tr>";
            echo "<th>S.N</th>";
            echo "<th>First-Name</th>";
            echo "<th>Last-Name</th>";
            echo "<th>Roll No</th>";
            echo "<th>Age</th>";
            echo "<th>Sex</th>";
            echo "<th>Department</th>";
            echo "<th>Percent %</th>";
            echo "<th>Grade</th>";
            echo "<th>Emile ID</th>";
            echo "<th>Contact</th>";
            echo "<th>College </th></tr>";
            echo "<tr><td>1.</td>";
            echo "<td>$first_name</td>";
            echo "<td>$last_name</td>";
            echo "<td>$roll</td>";
            echo "<td>$age</td>";
            echo "<td>$gender</td>";
            echo "<td>$coll</td>";
            echo "<td>$percent</td>";
            echo "<td>$grade</td>";
            echo "<td>$Emaile</td>";
            echo "<td>$contact</td>";
            echo "<td>$college</td></tr></table><br>";
        }
    
    ?>
</body>

</html>