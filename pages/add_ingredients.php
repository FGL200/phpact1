<?php
    require_once("../php/config.php");
    require_once("../includes/functions.php");
    // fetch all id's of suppliers
    $ids = get_all_ids($con, "suppliers");

    // current added supplierid
    $current_added_id  = get_last_id($con, "ingredients", "ingredientid", "DESC");
?>

<?php
    require_once "../includes/header.php";
    require_once "../includes/footer.php";
?>

<?php 
    $header['css'] = ['main', 'index'];
    $header['title'] = 'Home';
    includeHeader($header);
?>

<main class="flex-c flex-grow justify-c-center align-i-center">
    <form action="../php/add_ingredients.php" method="POST" id="add-ingredients" class="card p-3 shadow-m flex-c g-1">
        <span class="flex-r justify-c-space-between g-3">
            <b class="font-l">New Ingredient</b>
        </span>
        <!-- <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="id">ID</label>
        </span> -->
        <input type="hidden" name="id" id="id" value="<?= str_pad($current_added_id ? $current_added_id[0] + 1 : 1, 5, '0', STR_PAD_LEFT) ;?>"  readonly>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="name">Ingredient's Name</label>
            <input class="p-1 font-xs" type="text" name="name" id="name">
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="unit">Unit</label>
            <input class="p-1 font-xs" type="text" name="unit" id="unit">
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="unitprice">Unit Price</label>
            <input class="p-1 font-xs" type="text" name="unitprice" id="unitprice">
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="foodgroup">Food Group</label>
            <select class="p-1 font-xs" name="foodgroup" id="foodgroup">
                <option value="None" selected disabled>--Select Food Group--</option>
                <option value="Vegetables/Fruits">Vegetables/Fruits</option>
                <option value="Grains">Grains</option>
                <option value="Fat">Fats</option>
                <option value="Protein">Protein</option>
                <option value="Dairy">Dairy</option>
            </select>
            <!-- <input class="p-1 font-xs" type="text" name="foodgroup" id="foodgroup"> -->
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="inventory">Inventory</label>
            <input class="p-1 font-xs" type="text" name="inventory" id="inventory">
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="supplier_id">Ingredient's Supplier</label>
            <select class="p-1 font-xs" id="supplier_id" name="supplier_id">
                <option value="" selected>--Select Supplier--</option>
            <?php
                    while($row = $ids->fetch_assoc()):
            ?>
                    <option value="<?=$row['supplierid'];?>"><?=$row['company_name'];?></option>
            <?php
                    endwhile;
                ?>
            </select>
                
        </span>
        <span class="flex-rr justify-c-space-between g-3">
            <button class="btn btn-green font-xs" type="submit">Add</button>
            <button class="btn font-xs" type="button" onclick="goHome()" >Back</button>
        </span>
    </form>
</main>

<?php 
    $footer['js'] = ['main'];
    includeFooter($footer);
?>