<?php
// viet code php
echo"Hello world";
// khai bao bien
$x = 10;
$x = "hello";
$arr = [];
$arr[0] = 15;
$arr[1] = 20;
$arr[2] = 25;

for ($i = 0; count($arr);$i++){
   // $arr[$i];
}
foreach ($arr as $a){
   // $a <=> $arr[#i]
}

$sv = [
    "name" => "nguyen van an",
    "age" => 19,
    "tel"=> "0989898989"
];
echo $sv["name"]."<br/>";

foreach ($sv as $s){
    echo "<h2>".$s."</h2";
}

foreach ($sv as $k=>$v){
    echo "<h2> $k : $v </h2>";
}

// echo json_encode($sv);
function tinhTong($a,$b){
    return $a+$b;
}