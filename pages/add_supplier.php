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
$header['title'] = 'Supplier';
includeHeader($header);
?>

<main class="d-flex flex-column flex-grow justify-content-center align-items-center">
    <form action="../php/add_supplier.php" method="POST" id="add-supplier" class="card p-3 shadow-m d-flex flex-column gap-1 fade-in-to-bottom">
        <span class="d-flex flex-r justify-c-space-betweenp-1">
            <b class="fs-5" style="margin: .5rem 0;">New Supplier</b>
        </span>
        <hr>
        <input type="hidden" name="id" id="id" value="<?= str_pad($current_added_id ? $current_added_id[0] + 1 : 1, 5, '0', STR_PAD_LEFT); ?>" readonly>
        <span class="d-flex flex-column gap-1">
            <label class="fs-6" for="company_name">Company Name</label>
            <input class="form-control fs-6" type="text" name="company_name" id="company_name" required>
        </span>
        <span class="d-flex flex-column gap-1">
            <label class="fs-6" for="rep_fname">Representative's Firstname</label>
            <input class="form-control fs-6" type="text" name="rep_fname" id="rep_fname" required>
        </span>
        <span class="d-flex flex-column gap-1">
            <label class="fs-6" for="rep_lname">Representative's Lastname</label>
            <input class="form-control fs-6" type="text" name="rep_lname" id="rep_lname" required>
        </span>
        <span class="d-flex flex-column gap-1">
            <label class="fs-6" for="referred_by">Referred by</label>
            <select class="form-control fs-6" id="referred_by" name="referred_by">
                <option value="" selected>--SELECT--</option>
                <?php while ($row = $ids->fetch_assoc()) : ?>
                    <option value="<?= $row['supplierid']; ?>"><?= $row['company_name']; ?></option>
                <?php endwhile; ?>
            </select>
        </span>
        <span class="d-flex flex-row-reverse justify-content-between gap-3">
            <button class="fs-6 btn btn-green" type="submit">Add</button>
            <button class="fs-6 btn" type="button" onclick="goHome()">Back</button>
        </span>
    </form>
</main>

<?php
$footer['js'] = ['main'];
includeFooter($footer);
?>