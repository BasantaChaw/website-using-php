<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="POST">
    <input type="text"placeholder="zEnter first umwe"name="first">
    <input type="text"placeholder="zEnter second umwe"name="secod"> 
    <input type="submit"value="ok"name="login">
<?php  
$sum="";
if(isset($_POST['login'])){
    $va=$_POST['first'];
    $val=$_POST['secod'];
    $sum=$va+$val;
}
?>
    <input type="text"placeholder="zEnter second umwe"value="<?php echo$sum; ?>"> 
    </form>
</body>
</html>