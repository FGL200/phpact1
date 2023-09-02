<?php

require_once "config.php";

require_once "../includes/functions.php";

extract($_POST);

$ingredientId = strlen($ingredientId) ? "'$ingredientId'" : 'NULL';
$itemId = strlen($itemId) ? "'$itemId'" : 'NULL';

$query = "INSERT INTO madewith (`itemid`, `ingredientid`,`quantity`) VALUES
( $itemId, $ingredientId, '".$quantity."')";


redirect($con, $query);

?>