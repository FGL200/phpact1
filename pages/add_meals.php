
<?php
    require_once("../php/config.php");
    require_once("../includes/functions.php");

    $current_added_id  = get_last_id($con, "meals", "mealid", "DESC");
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
    <form action="../php/add_meals.php" method="POST" id="add-ingredients">
        <span>
            <h1>Meals</h1>
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
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
        </span>
        <span>
            <button type="button" onclick="goHome()" >Back</button>
            <button type="submit">Add</button>
        </span>
    </form>
</body>
</html>