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
$header['title'] = 'Ingredient';
includeHeader($header);
?>

<main class="d-flex flex-column flex-grow justify-content-center align-items-center">
    <form action="../php/add_ingredients.php" method="POST" id="add-ingredients" class="card p-3 shadow-m d-flex flex-column gap-1 fade-in-to-bottom">
        <span class="d-flex flex-column gap-1">
            <b class="fs-5" style="margin: .5rem 0;">New Ingredient</b>
        </span>
        <hr>
        <input type="hidden" name="id" id="id" value="<?= str_pad($current_added_id ? $current_added_id[0] + 1 : 1, 5, '0', STR_PAD_LEFT); ?>" readonly>
        <span class="d-flex flex-column gap-1">
            <label class="fs-6s" for="name">Ingredient's Name</label>
            <input class="form-control" type="text" name="name" id="name" required>
        </span>
        <span class="d-flex flex-column gap-1">
            <label class="fs-6s" for="unit">Unit</label>
            <input class="form-control" type="text" name="unit" id="unit" required>
        </span>
        <span class="d-flex flex-column gap-1">
            <label class="fs-6s" for="unitprice">Unit Price</label>
            <input class="form-control" type="text" name="unitprice" id="unitprice" required>
        </span>
        <span class="d-flex flex-column gap-1">
            <label class="fs-6s" for="foodgroup">Food Group</label>
            <select class="form-control" name="foodgroup" id="foodgroup">
                <option value="None" selected disabled>--Select Food Group--</option>
                <option value="VF">Vegetables/Fruits</option>
                <option value="G">Grains</option>
                <option value="F">Fats</option>
                <option value="P">Protein</option>
                <option value="D">Dairy</option>
                <option value="Milk">Milk</option>
            </select>
        </span>
        <span class="d-flex flex-column gap-1">
            <label class="fs-6s" for="inventory">Inventory</label>
            <input class="form-control" type="text" name="inventory" id="inventory" required>
        </span>
        <span class="d-flex flex-column gap-1">
            <label class="fs-6s" for="supplier_id">Ingredient's Supplier</label>
            <select class="form-control" id="supplier_id" name="supplier_id">
                <option value="" selected>--Select Supplier--</option>
                <?php
                while ($row = $ids->fetch_assoc()) :
                ?>
                    <option value="<?= $row['supplierid']; ?>"><?= $row['company_name']; ?></option>
                <?php
                endwhile;
                ?>
            </select>

        </span>
        <span class="d-flex flex-row-reverse justify-content-between gap-3">
            <button class="btn btn-green fs-6s" type="submit">Add</button>
            <button class="btn fs-6s" type="button" onclick="goHome()">Back</button>
        </span>
    </form>
</main>

<?php
$footer['js'] = ['main'];
includeFooter($footer);
?>