<?php
/*$namename=array("Basanta","Naresh G","Roshan vhai","Pawan G","Rishi G");
//echo$namename[0];
foreach($namename as $name){
    echo"$name <br>";
}
$array_List=["Basanta",4,"Chaudhary",19,"Koteswore"];
foreach($array_List as $list){
    echo"$list   ";
    
}
print_r($list);
echo"<br>";
$a=array("Basanta"=>19,"Naresh"=>20,"Anuragh"=>20);
$a["Basanta"]=20;
    echo$a["Basanta"]."<br>";
    echo$a["Naresh"]."<br>";
    echo$a["Anuragh"]."<br>";
    */
    $person=[
        [1,"Basanta","Chaudhary",100],
        [2,"Naresh","chaudhary",1002],
        [3,"Anuragh","Baitha",1001],
        [4,"Basanti","Chaudhary",10400],
        [5,"Nareshi","chaudhary",10402],
        [6,"Anuraghi","Baitha",101]
    ];
    foreach($person as $v){

    foreach($v as $d){
echo$d."   ";
    }
        echo"<br><br>";
    }
    
?>
