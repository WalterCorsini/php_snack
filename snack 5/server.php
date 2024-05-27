<?php 

$array = [];

while(count($array) <15){
    $value= mt_rand(1,100);
    if(!in_array($value, $array)){
        $array[] = $value;
    }
}
var_dump($array);

?>