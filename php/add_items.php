<?php
require_once "config.php";
require_once "../includes/functions.php";

extract($_POST);

$query = "INSERT INTO items (`itemid`, `name`, `price`, `dateadded`) VALUES ('".$id."', '".$name."', $price, '".$date_added."')";


redirect($con, $query);


?>