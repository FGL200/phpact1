<?php
require_once "config.php";
require_once "../includes/functions.php";

extract($_POST);

$query = "INSERT INTO meals (`mealid`, `name`, `description`) 
        VALUES
        ('".$id."', '".$name."', '".$description."');";

foreach($items as $i) {
    $query .= "
        INSERT INTO partof 
        VALUES 
        ('$id', '$i', ".$_POST['quantity_' . $i].", 00.50);
    ";
}



redirect($con, $query);


?>