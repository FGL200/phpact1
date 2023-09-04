<?php
    require_once("../php/config.php");
    require_once("../includes/functions.php");
    // fetch all id's of suppliers
    $meal_ids = get_all_ids($con, "meals");

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
    <form action="../php/add_partOf.php" method="POST" id="add-supplier">
            <span>
                <h1>Add Part Of</h1>
            </span>
            <span>
                <label for="meal_id">Meal ID</label>
                <select id="meal_id" name="meal_id">
                    <option value="" selected>--SELECT--</option>
                <?php
                        while($row = $meal_ids->fetch_assoc()):
                ?>
                        <option value="<?=$row['mealid'];?>"><?=$row['mealid'];?></option>
                <?php
                        endwhile;
                    ?>
                </select>
                
            </span>
            <span>
                <label for="itemId">Item ID</label>
                <select id="item_id" name="item_id">
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
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" id="quantity">
            </span>
            <span>
                <label for="discount">Discount</label>
                <input type="text" name="discount" id="discount">
            </span>
            <span>
                <button type="button" onclick="goHome()" >Back</button>
                <button type="submit">Add</button>
            </span>
        </form>
</body>
</html>