<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '../function.php';
    $array = $_REQUEST['array1'];

    store($array,'../data.json');
    header('Location:../index.php');
}