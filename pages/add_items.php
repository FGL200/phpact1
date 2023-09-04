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
    $header['title'] = 'Home';
    includeHeader($header);
?>

<main class="flex-c flex-grow justify-c-center align-i-center m-5">
    <form action="../php/add_items.php" method="POST" id="add-supplier" class="card p-3 shadow-m flex-c g-1" style="max-width: 380px;">
        <span class="flex-r justify-c-space-between g-3">
            <b class="font-l">New Item</b>
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="id">ID</label>
            <input class="p-1 font-xs" type="text" name="id" id="id" value="<?= str_pad($current_added_id ? $current_added_id[0] + 1 : 1, 5, '0', STR_PAD_LEFT) ;?>"  readonly>
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="name">Item's Name</label>
            <input class="p-1 font-xs" type="text" name="name" id="name">
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="price">Price</label>
            <input class="p-1 font-xs" type="text" name="price" id="price">
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="date_added">Date Added</label>
            <input class="p-1 font-xs" type="date" name="date_added" id="date_added">
        </span>
        <span id="items-holder" class="flex-r p-1 flex-wrap g-1">
            
        </span>
        <select onchange="addItem(this)" id="id-item-list" class="p-1 font-xs">
            <option value="" selected disabled>--Select Ingredient--</option>
            <option value="1_IngredientOne">Ingredient 1</option>
            <option value="2_IngredientTwo">Ingredient 2</option>
            <option value="3_IngredientThree">Ingredient 3</option>
            <option value="4_IngredientFour">Ingredient 4</option>
            <!-- YUNG VALUE NG KADA OPTION AY ITEM galing sa database -->
            <!-- structure ng value ('id_IngredientName') OR ('$id' + '_' + '$ingredient')-->
        </select>
        <span class="flex-rr justify-c-space-between g-3">
            <button class="btn btn-green font-xs" type="submit">Add</button>
            <button class="btn font-xs" type="button" onclick="goHome()" >Back</button>
        </span>
    </form>
</main>

<?php 
    $footer['js'] = ['main', 'add_item'];
    includeFooter($footer);
?>