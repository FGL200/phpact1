<?php
require_once "config.php";

function toAssocArr($RESULT){
    $ret = [];
    if(gettype($RESULT) === gettype(true)) return [];

    while($row = $RESULT->fetch_assoc()){
        $k = array_keys($row);
        $r = [];
        foreach ($k as $col){
            $r[$col] = $row[$col];
        }
        array_push($ret, $r);
    }
    return $ret;
}

extract($_POST);

$result = $con->query($query);

echo json_encode(toAssocArr($result));