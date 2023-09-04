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
        ('$id', '$i', ".$_POST['quantity_' . $i].", 00.05);
    ";
}


$query .= "
    INSERT INTO menuitems 
    SELECT 
        `ml`.mealid, 
        `ml`.name,  
        SUM(`pt`.quantity * `it`.price) - (SUM(`pt`.quantity * `it`.price) * `pt`.discount) `item_price`
    FROM addbase_lab1.partof `pt`
    INNER JOIN items `it`
        ON `pt`.itemid = `it`.itemid
    INNER JOIN meals `ml`
        ON `pt`.mealid = `ml`.mealid
    WHERE `pt`.mealid  = '$id'
    GROUP BY `pt`.mealid;
";



redirect($con, $query);


?>