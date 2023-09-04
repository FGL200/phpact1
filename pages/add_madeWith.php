<?php

    require_once("../php/config.php");
    require_once("../includes/functions.php");

    $ingredient_ids = get_all_ids($con, "ingredients");

    $item_ids = get_all_ids($con, "items");

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
    <form action="../php/add_madeWith.php" method="POST" id="add-ingredients">
        <span>
            <h1>Add Made With</h1>
        </span>
        <span>
            <label for="itemId">Item ID</label>
            <select id="itemId" name="itemId">
                <option value="" selected>--SELECT--</option>
            <?php
                    while($row = $item_ids->fetch_assoc()):
            ?>
                    <option value="<?=$row['itemid'];?>"><?=$row['itemid'];?></option>
            <?php
                    endwhile;
                ?>
            </select>
        </span>
        <span>
            <label for="ingredientId">Ingredient ID</label>

            <select id="ingredientId" name="ingredientId">
                <option value="" selected>--SELECT--</option>
            <?php
                    while($row = $ingredient_ids->fetch_assoc()):
            ?>
                    <option value="<?=$row['ingredientid'];?>"><?=$row['ingredientid'];?></option>
            <?php
                    endwhile;
                ?>
            </select>
        </span>

        <span>
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" id="quantity">
        </span>
        <span>
            <button type="button" onclick="goHome()" >Back</button>
            <button type="submit">Add</button>
        </span>
    </form>
</body>
</html>