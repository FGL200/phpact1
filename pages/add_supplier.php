<?php
    require_once("../php/config.php");
    require_once("../includes/functions.php");
    // fetch all id's of suppliers
    $ids = get_all_ids($con, "suppliers", "supplierid");


    // current added supplierid
    $current_added_id  = get_last_id($con, "suppliers", "supplierid", "DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Supplier</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <form action="../php/add_supplier.php" method="POST" id="add-supplier">
            <span>
                <script src="../js/main.js"></script>
                <h1>Add Supplier</h1>
            </span>
            <span>
                <label for="id">ID</label>
                <input type="text" name="id" id="id" value="<?= str_pad($current_added_id ? $current_added_id[0] + 1 : 1, 5, '0', STR_PAD_LEFT) ;?>" readonly>
            </span>
            <span>
                <label for="company_name">Company Name</label>
                <input type="text" name="company_name" id="company_name">
            </span>
            <span>
                <label for="rep_fname">Representative's Firstname</label>
                <input type="text" name="rep_fname" id="rep_fname">
            </span>
            <span>
                <label for="rep_lname">Representative's Lastname</label>
                <input type="text" name="rep_lname" id="rep_lname">
            </span>
            <span>
                <label for="referred_by">Referred by</label>
                <select id="referred_by" name="referred_by">
                    <option value="" selected>--SELECT--</option>
                <?php
                        while($row = $ids->fetch_assoc()):
                ?>
                        <option value="<?=$row['supplierid'];?>"><?=$row['supplierid'];?></option>
                <?php
                        endwhile;
                 ?>
                </select>
                
            </span>
            <span>
                <button type="button" onclick="goHome()" >Back</button>
                <button type="submit">Add</button>
            </span>
        </form>
</body>
</html>