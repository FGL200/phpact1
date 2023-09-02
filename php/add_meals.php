<?php
require_once "config.php";
require_once "../includes/functions.php";

extract($_POST);

$query = "INSERT INTO meals (`mealid`, `name`, `description`) VALUES ('".$id."', '".$name."', '".$description."')";


redirect($con, $query);


?>