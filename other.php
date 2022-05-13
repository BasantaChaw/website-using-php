<?php
if (isset($_POST['login'])) {
    $num = $_POST['value1'];
    $num1 = $_POST['currency'];
    if ($num1 == 'centi') {
        echo "The Celcius Value IS:";//, 9 / 5 * $num + 32;
    } else if ($num1 == 'fharen') {
        echo "The Fharenheit Value Is :";//, ($num - 32) * 5 / 9;
    }
}
echo"ok";

?>