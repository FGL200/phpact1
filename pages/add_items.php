<?php
    require_once("../php/config.php");
    require_once("../includes/functions.php");

    $current_added_id  = get_last_id($con, "items", "itemid", "DESC");
?>

<?php
    require_once "../includes/header.php";
    require_once "../includes/footer.php";
?>

<?php 
    $header['css'] = ['main', 'index'];
    $header['title'] = 'Item';
    includeHeader($header);
?>

<main class="d-flex flex-column flex-grow justify-content-center align-items-center">
    <form action="../php/add_items.php" method="POST" id="add-supplier"  class="card p-3 shadow-m d-flex flex-column gap-1 fade-in-to-bottom">
        <span class="d-flex flex-column gap-1">
            <b class="fs-5" style="margin: .5rem 0;">New Item</b>
        </span>
        <hr>
        <input type="hidden" name="id" id="id" value="<?= 'i-'.str_pad($current_added_id ? explode('i-', $current_added_id[0])[1] + 1 : 1, 3, '0', STR_PAD_LEFT) ;?>"  readonly>
        <span class="d-flex flex-column gap-1">
            <label class="fs-6" for="name">Item's Name</label>
            <input class="form-control" type="text" name="name" id="name" required>
        </span>
        <span class="d-flex flex-column gap-1">
            <label class="fs-6" for="price">Price</label>
            <input class="form-control" type="text" name="price" id="price" required>
        </span>
        <span class="d-flex flex-column gap-1">
            <label class="fs-6" for="date_added">Date Added</label>
            <input class="form-control" type="date" name="date_added" id="date_added" required>
        </span>
        <span id="items-holder" class="d-flex p-1 flex-wrap gap-1">
            
        </span>
        <select onchange="addItem(this)" id="id-item-list" class="form-control">
            <option value="" selected disabled>--Select Ingredient--</option>
            <?php get_all_ingredients_or_items($con, 'ingredients', 'ingredientid') ?>
        </select>
        <span class="d-flex flex-row-reverse justify-content-between gap-3">
            <button class="btn btn-green fs-6" type="submit">Add</button>
            <button class="btn fs-6" type="button" onclick="goHome()" >Back</button>
        </span>
    </form>
</main>

<?php 
    $footer['js'] = ['main', 'add_item'];
    includeFooter($footer);
?>