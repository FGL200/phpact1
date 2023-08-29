<?php
require_once "config.php";

extract($_POST);

if ($con->query(
    "
    INSERT INTO suppliers(`company_name`,`rep_fname`,`rep_lname`,`referred_by`) VALUES
    ('".$company_name."','".$rep_fname."','".$rep_lname."','".$referred_by."')
    "
)){
    header("Location: ../success.html");
}else{
    header("Location: ../error.html");
}

?>