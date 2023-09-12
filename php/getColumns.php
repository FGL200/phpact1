<?php
require_once "config.php";

extract($_POST);

$query = 
"SELECT 
    column_name
FROM information_schema.columns 
WHERE table_schema = 'addbase_lab1' AND table_name = '$table'";

$col = [];
$result = $con->query($query);
while($row = $result->fetch_assoc()){
    array_push($col, $row['column_name']);
}

echo json_encode($col);