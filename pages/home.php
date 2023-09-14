<?php
    require_once "../includes/header.php";
    require_once "../includes/footer.php";
?>

<?php 
    $header['css'] = ['main', 'index'];
    $header['title'] = 'Home';
    includeHeader($header);
?>

<main class="d-flex flex-column flex-grow justify-content-center align-items-center">
    <div class="d-flex align-items-center justify-content-center gap-5 flex-wrap">
        <div class="card d-flex flex-column p-3 m-1 fade-in-to-right">
            <section>
                <h1 class="fs-3">Activity No. 1</h1>
                <hr style="margin: .5rem 0;">
            </section>
            <section class="d-flex flex-column align-items-center">
                <p class="fs-6 fw-bold">Laboratory Exercise 1 (Working With Subqueries)</p>
                <!-- <hr class="align-self-stretch m-2"> -->
                <span class="p-1 m-3">
                    <p class="fw-bold text-center m-2">Members:</p>
                    <p class="text-center">Landicho</p>
                    <p class="text-center">Peñaranda</p>
                    <p class="text-center">Blurete</p>
                    <p class="text-center">Bianes</p>
                    <p class="text-center">Garamay</p>
                </span>
            </section>
        </div>
        <div class="card m-3 p-3 shadow-l d-flex flex-column gap-3 fade-in-to-left">
            <label for="goto">
                <b class="fs-5">Let's get started!</b>
                <p class="fs-6">Choose an action below to proceed</p>
            </label>
            <select class="fs-6 form-control" id="goto">
                <option value="./add_supplier">Add a Supplier</option>
                <option value="./add_ingredients">Add new Ingredient</option>
                <option value="./add_items">Add new Item</option>
                <option value="./add_meals">Add new Meal</option>
                <option value="./display_items">Display Menu</option>
                <option value="./queries">Construct Query</option>
                <!-- <option value="./add_menuItems">Add Menu Items</option> -->
                <!-- <option value="./add_partOf">Add Part Of</option> -->
                <!-- <option value="./add_madeWith">Add Made With</option> -->
            </select>
            <span class="d-flex flex-row-reverse justify-content-center ">
                <button id="id-btn-go" class="btn btn-yellow fs-6" type="button" onclick="goTo()" style="width: 50%;">
                    Go
                </button>
            </span>
        </div>
    </div>
</main>

<?php 
    $footer['js'] = ['main'];
    includeFooter($footer);
?>