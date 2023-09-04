
<?php
    require_once("../php/config.php");
    require_once("../includes/functions.php");

    $current_added_id  = get_last_id($con, "meals", "mealid", "DESC");
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
    <form action="../php/add_meals.php" method="POST" id="add-ingredients" class="card p-3 shadow-m flex-c g-1" style="max-width: 380px;">
        <span class="flex-r justify-c-space-between g-3">
            <b class="font-l">New Meal</b>
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="id">ID</label>
            <input class="p-1 font-xs" type="text" name="id" id="id" value="<?= 'm-'.str_pad($current_added_id ? explode('m-', $current_added_id[0])[1] + 1 : 1, 3, '0', STR_PAD_LEFT) ;?>"  readonly>
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="name">Meal's Name</label>
            <input class="p-1 font-xs" type="text" name="name" id="name">
        </span>
        <span id="meals-holder" class="flex-r p-1 flex-wrap g-1">
            
        </span>
        <select onchange="addMeal(this)" id="id-item-list" class="p-1 font-xs">
            <option value="" selected disabled>--Select Item--</option>
            <?php get_all_ingredients_or_items($con, "items", "itemid"); ?>

            <!-- YUNG VALUE NG KADA OPTION AY ITEM galing sa database -->
            <!-- structure ng value ('id_ItemName') OR ('$id' + '_' + '$Item')-->
        </select>

        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="description">Description</label>
            <input class="p-1 font-xs" type="text" name="description" id="description">
        </span>
        <span class="flex-rr justify-c-space-between g-3">
            <button class="btn btn-green font-xs" type="submit">Add</button>
            <button class="btn font-xs" type="button" onclick="goHome()" >Back</button>
        </span>
    </form>
</main>

<?php 
    $footer['js'] = ['main', 'add_meal'];
    includeFooter($footer);
?>