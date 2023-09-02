<?php
require_once "config.php";

require_once "../includes/functions.php";

extract($_POST);

$referred_by = strlen($referred_by) ? "'$referred_by'" : 'NULL';

$query = "
INSERT INTO suppliers(`supplierid`, `company_name`,`rep_fname`,`rep_lname`,`referred_by`) VALUES
('".$id."', '".$company_name."','".$rep_fname."','".$rep_lname."', $referred_by)
";


redirect($con, $query);


/*
insert into suppliers 
(supplierid, company_name, rep_fname, rep_lname) 
SELECT (CAST(supplierid AS INT) + 1), 'HONDA', 'MIGUEL', 'PANGILINAN' FROM suppliers ORDER BY supplierid DESC LIMIT 1
*/

?>