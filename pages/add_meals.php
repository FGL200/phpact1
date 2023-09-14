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
$header['title'] = 'Meal';
includeHeader($header);
?>

<main class="d-flex flex-column flex-grow justify-content-center align-items-center">
    <form action="../php/add_meals.php" method="POST" id="add-ingredients" style="max-width: 350px;" class="card p-3 shadow-m d-flex flex-column gap-1 fade-in-to-bottom">
        <span class="d-flex flex-column gap-1">
            <b class="fs-5" style="margin: .5rem 0;">New Meal</b>
        </span>
        <hr>
        <input type="hidden" name="id" id="id" value="<?= 'm-' . str_pad($current_added_id ? explode('m-', $current_added_id[0])[1] + 1 : 1, 3, '0', STR_PAD_LEFT); ?>" readonly>
        <span class="d-flex flex-column gap-1">
            <label class="font-xs" for="name">Meal's Name</label>
            <input class="form-control" type="text" name="name" id="name" required>
        </span>
        <span class="d-flex flex-column gap-1">
            <label class="font-xs" for="description">Description</label>
            <input class="form-control" type="text" name="description" id="description" required>
        </span>
        <span id="meals-holder" class="d-flex p-1 flex-wrap gap-1"> </span>
        <select onchange="addMeal(this)" id="id-item-list" class="form-control">
            <option value="" selected disabled>--Select Item--</option>
            <?php get_all_ingredients_or_items($con, "items", "itemid"); ?>
        </select>
        <span class="d-flex flex-row-reverse justify-content-between gap-3">
            <button class="btn btn-green font-xs" type="submit">Add</button>
            <button class="btn font-xs" type="button" onclick="goHome()">Back</button>
        </span>
    </form>
</main>

<?php
$footer['js'] = ['main', 'add_meal'];
includeFooter($footer);
?>