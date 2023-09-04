<?php
    require_once("../php/config.php");
    require_once("../includes/functions.php");
    // fetch all id's of suppliers
    $ids = get_all_ids($con, "suppliers", "supplierid");

    // current added supplierid
    $current_added_id  = get_last_id($con, "suppliers", "supplierid", "DESC");
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
    <form action="../php/add_supplier.php" method="POST" id="add-supplier" class="card p-3 shadow-m flex-c g-1">
        <span class="flex-r justify-c-space-between g-3">
            <b class="font-l">New Supplier</b>
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="id">ID</label>
            <input class="p-1 font-xs" type="text" name="id" id="id" value="<?= str_pad($current_added_id ? $current_added_id[0] + 1 : 1, 5, '0', STR_PAD_LEFT) ;?>" readonly>
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="company_name">Company Name</label>
            <input class="p-1 font-xs" type="text" name="company_name" id="company_name">
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="rep_fname">Representative's Firstname</label>
            <input class="p-1 font-xs" type="text" name="rep_fname" id="rep_fname">
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="rep_lname">Representative's Lastname</label>
            <input class="p-1 font-xs" type="text" name="rep_lname" id="rep_lname">
        </span>
        <span class="flex-r justify-c-space-between g-3">
            <label class="font-xs" for="referred_by">Referred by</label>
            <select class="p-1 font-xs" id="referred_by" name="referred_by">
                <option value="" selected>--SELECT--</option>
                <?php while($row = $ids->fetch_assoc()): ?>
                <option value="<?=$row['supplierid'];?>"><?=$row['company_name'];?></option>
                <?php endwhile; ?>
            </select>
        </span>
        <span class="flex-rr justify-c-space-between g-3">
            <button class="font-xs btn btn-red" type="submit">Add</button>
            <button class="font-xs btn" type="button" onclick="goHome()" >Back</button>
        </span>
    </form>
</main>

<?php 
    $footer['js'] = ['main'];
    includeFooter($footer);
?>
