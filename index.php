<?php

declare(strict_types=1);
define("line", "<br>");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: Application/json; charset=UTF-8");




$arr = [
    "one" => "Nady Abbas",
    "two" =>  [  ]
];

for($i = 10 ; $i < 50 ; $i++ ){
    $arr["two"][] = ["url" => "http://" .  $_SERVER['HTTP_HOST'] . "/images/images ($i).jpeg" ] ; 
}




$arr_json = json_encode($arr);

print_r($arr_json);
