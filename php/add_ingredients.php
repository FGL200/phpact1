<?php
require_once "config.php";

require_once "../includes/functions.php";

extract($_POST);

$query = "INSERT INTO ingredients(`ingredientid`, `name`,`unit`,`unitprice`,`foodgroup`,`inventory`) VALUES
( '".$id."', '".$name."','".$unit."','".$unitprice."','".$foodgroup."', '".$inventory."')";

if($supplier_id) {
    $query = "INSERT INTO ingredients(`ingredientid`, `name`,`unit`,`unitprice`,`foodgroup`,`inventory`,`supplierid`) VALUES
    ( '".$id."', '".$name."','".$unit."','".$unitprice."','".$foodgroup."', '".$inventory."','".$supplier_id."')";
}

redirect($con, $query);




?>