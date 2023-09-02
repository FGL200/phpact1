<?php

require_once "config.php";

require_once "../includes/functions.php";

extract($_POST);

$meal_id = strlen($meal_id) ? "'$meal_id'" : 'NULL';
$item_id = strlen($item_id) ? "'$item_id'" : 'NULL';

$query = "INSERT INTO partof(`mealid`, `itemid`,`quantity`,`discount`) VALUES
( $meal_id, $item_id, '".$quantity."','".$discount."')";


redirect($con, $query);

?>