<?php
$name   =   "";
$age    =   "";
$mail   =   "";

if(isset($_GET["name"]) && strlen($_GET["name"])>3){
    $name = $_GET["name"];
}
if(isset($_GET["age"]) && is_numeric($_GET["age"])){
    $age = $_GET["age"];
}
if(isset($_GET["mail"]) && strpos($_GET["mail"],".") && strpos($_GET["mail"],"@")){
    $mail = $_GET["mail"];
}

if(!empty($name) && !empty($age) && !empty($mail) ){
    echo " Accesso Riuscito";
    die();
} else {
    echo "Accesso Negato";
    die();
}

?>