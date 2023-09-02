<?php



function redirect($con, $query) {
    if ($con->query($query)){
        header("Location: ../success.html");
    }else{
        header("Location: ../error.html");
    }
}

function get_last_id($con, $table, $column, $order) {
    return $con->query("SELECT $column FROM $table ORDER BY $column $order")->fetch_array();
}

function get_all_ids($con, $table, $column) {
    return $con->query("SELECT $column FROM $table");
}

?>