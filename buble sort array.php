<!---wap to sort array of elements------>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting array</title>
</head>
<body style="background-color: lightgray;">
    <h1 style="color: green;margin:20%;">
    <?php
    $temp;
    $i;
    $j;
    $num=array(12,34,64,77,44,88,1,2);
    $n=count($num);
    echo"There are  ",$n," Number !<br><hr>";
    for($i=0;$i<$n-1;$i++){
        for($j=$i+1;$j<$n;$j++){
        if($num[$i]>$num[$j]){
            $temp=$num[$i];
            $num[$i]=$num[$j];
            $num[$j]=$temp;
        }
    }
}
echo"The Sorting Array Elements are In Ascending Order !<br><hr>";
for($i=0;$i<$n;$i++){
    echo$num[$i]," , ";
}echo"<hr>";
    ?>
    </h1>
</body>
</html>