<?php



function redirect($con, $query) {
    if ($con->multi_query($query)){
        header("Location: ..");
    }else{
        echo "ERROR!: ".$query." <br> ".$con;
    }
}

function get_last_id($con, $table, $column, $order) {
    return $con->query("SELECT $column FROM $table ORDER BY $column $order LIMIT 1")->fetch_array();
}

function get_all_ids($con, $table) {
    return $con->query("SELECT * FROM $table");
}

function get_menu($con) {
    $query = "SELECT * FROM menuitems order by menuitemid desc;";
    return $con->query($query);
}

?>

<?php function get_all_ingredients_or_items($con, $tblname, $clmnname) {
  $query = "SELECT * FROM `$tblname`";
  $results =  $con->query($query);
   while($column = $results->fetch_assoc()) {
?>
    <option value="<?=$column[$clmnname];?>_<?=implode('', explode(' ', $column['name']));?>"><?=$column['name'];?></option>

<?php
   }
} 
?>
