<?php
require_once "config.php";
require_once "../includes/functions.php";

extract($_POST);

$query = "INSERT INTO items (`itemid`, `name`, `price`, `dateadded`)
            VALUES 
        ('".$id."', '".$name."', $price, '".$date_added."');";

foreach($ingredientid as $i) {
    $query .= "INSERT INTO madewith 
    VALUES 
    ('$id', '$i', '".$_POST['quantity_'.$i]."');";
}
redirect($con, $query);


?>