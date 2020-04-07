<?php
include "../function.php";
$data = getData('../data.json');

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $key = $_REQUEST['delete'];
    if(isKeyOnArr($data[0],$key)){
        $newArray = delete($data[0],$key);
        foreach ($newArray as $value){
            echo $value." ";
        }
    }
}