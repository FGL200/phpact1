<?php
    require_once("../php/config.php");
    require_once("../includes/functions.php");
    // fetch all id's of suppliers
    $ids = get_all_ids($con, "suppliers", "supplierid");


    // current added supplierid
    $current_added_id  = get_last_id($con, "ingredients", "ingredientid", "DESC");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Supplier</title>
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/main.js"></script>
</head>
<body>
    <form action="../php/add_ingredients.php" method="POST" id="add-ingredients">
        <span>
            <h1>Add Ingredients</h1>
        </span>

        <span>
            <label for="id">ID</label>
            <input type="text" name="id" id="id" value="<?= str_pad($current_added_id ? $current_added_id[0] + 1 : 1, 5, '0', STR_PAD_LEFT) ;?>"  readonly>
        </span>

        <span>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </span>
        <span>
            <label for="unit">Unit</label>
            <input type="text" name="unit" id="unit">
        </span>
        <span>
            <label for="unitprice">Unit Price</label>
            <input type="text" name="unitprice" id="unitprice">
        </span>
        <span>
            <label for="foodgroup">Food Group</label>
            <input type="text" name="foodgroup" id="foodgroup">
        </span>
        <span>
            <label for="inventory">Inventory</label>
            <input type="text" name="inventory" id="inventory">
        </span>
        <span>
            <label for="supplier_id">Supplier ID</label>
            <select id="supplier_id" name="supplier_id">
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