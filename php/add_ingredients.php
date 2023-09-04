<?php
require_once "config.php";

require_once "../includes/functions.php";

extract($_POST);

$supplier_id = strlen($supplier_id) ? "'$supplier_id'" : 'NULL';

$query = "INSERT INTO ingredients (`ingredientid`, `name`,`unit`,`unitprice`,`foodgroup`,`inventory`,`supplierid`) 
VALUES
( '".$id."', '".$name."','".$unit."','".$unitprice."','".$foodgroup."', '".$inventory."', $supplier_id);";


redirect($con, $query);




?>