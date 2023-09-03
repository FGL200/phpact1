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
    <div class="flex-r align-i-center justify-c-center g-5 flex-wrap">
        <div class="flex-c">
            <section>
                <h1 class="font-xl">Activity No. 1</h1>
            </section>
            <section>
                <p class="font-m">Laboratory Exercise 1 (Working With Subqueries)</p>  
            </section>
        </div>
        <div class="card m-3 p-3 shadow-l flex-c g-3">
            <label for="goto">
                <b class="font-s">Let's get started!</b>
                <p class="font-xs">Choose an action below to proceed</p>
            </label>
            <select class="font-xs p-1" id="goto">
                <option value="./display_items" selected>Display Menu</option>
                <option value="./add_supplier">Add a Supplier</option>
                <option value="./add_ingredients">Add new Ingredient</option>
                <option value="./add_items">Add new Item</option>
                <option value="./add_meals">Add new Meal</option>
                <!-- <option value="./add_menuItems">Add Menu Items</option> -->
                <!-- <option value="./add_partOf">Add Part Of</option> -->
                <!-- <option value="./add_madeWith">Add Made With</option> -->
            </select>
            <span class="flex-rr">
                <button id="id-btn-go" class="btn btn-red font-xs" type="button" onclick="goTo()">Go</button>
            </span>
        </div>
    </div>
</main>

<?php 
    $footer['js'] = ['main'];
    includeFooter($footer);
?>