<?php
function findKeyArrIndex($array, $key)
{
    $length = count($array);
    $index = "";
    for ($i = 0; $i < $length; $i++) {
        if ($array[$i] == $key) {
            $index = $i;
        }
    }
    return $index;
}

function isKeyOnArr($array, $key)
{
    $isOnArr = false;
    foreach ($array as $value) {
        if ($value == $key) {
            return !$isOnArr;
        }
    }
    return $isOnArr;
}

function delete($array,$key){
        $indexKey = findKeyArrIndex($array,$key);
        $length = count($array);

        for ($i=$indexKey; $i< $length;$i++){
            $array[$i] = $array[$i+1];
        }
        return $array;
}

function store($data, $filePath) {
    $dataArr = getData($filePath);
    array_push($dataArr, $data);
    saveToJson($filePath, $dataArr);
}

function saveToJson($filePath, $dataArr): void
{
    $dataNewJson = json_encode($dataArr);
    file_put_contents($filePath, $dataNewJson);
}

function getData($filePath) {
    $dataJson = file_get_contents($filePath);
    return json_decode($dataJson);
}


