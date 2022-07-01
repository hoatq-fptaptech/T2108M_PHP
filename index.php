<?php
session_start();
var_dump($_SESSION["user"]);

$x = 10;
$x = "Hello";
$y = true;

echo $x;

$list = [];

$list[] = 10;
$list[] = "hello";
$list[] = "T2108M";
//
//$list["name"] = "Nguyễn Văn An";
//
//$list["age"] = 19;
$sv = [
  "name"=>"Nguyễn Văn An",
  "age" =>19,
  "address" => "Số 8 Tôn Thất Thuyết"
];

for($i=0;$i<count($list);$i++){
    echo $list[$i]."<br/>";
}

foreach ($list as $item){
    echo $item."<br/>";
}

foreach ($sv as $key=>$value){
    echo $key."=".$value."<br/>";
}

tinhTong(4,6);
$t = tinhTong(3,5);
function tinhTong($a,$b){
    echo $a+$b;
    return $a+$b;
}
