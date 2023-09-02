<?php
require_once "config.php";
require_once "../includes/functions.php";

extract($_POST);

$query = "INSERT INTO menuitems (`menuitemid`, `name`, `price`) VALUES ('".$id."', '".$name."', $price)";


redirect($con, $query);


?>