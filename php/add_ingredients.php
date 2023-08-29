<?php
require_once ("./congifg.php");

extract($_POST);

$con->query(
    "
    INSERT INTO suppliers(`company_name`,`rep_fname`,`rep_lname`,`referred_by`) VALUES
    ('".$company_name."','".$rep_fname."','".$rep_lname."','".$referred_by."')
    "
);

?>