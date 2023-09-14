<?php
require_once "../php/config.php";
require_once "../includes/functions.php";

$menu = get_menu($con);

?>



<?php
require_once "../includes/header.php";
require_once "../includes/footer.php";
?>

<?php
$header['css'] = ['main', 'index', 'display', 'menu'];
$header['title'] = 'Menu';
includeHeader($header);
?>

<main class="d-flex flex-column flex-grow justify-content-center align-items-center">
    <div class="card p-3 shadow-m d-flex flex-column gap-1 fade-in-to-bottom">
        <span class="d-flex flex-column gap-1">
            <b class="fs-5 text-center" style="margin: .5rem 0;">Display Menu</b>
        </span>
        <span class="d-flex flex-column gap-1">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th class="form-control m-1">Item Name</th>
                        <th class="form-control m-1">Item Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 0;
                    while ($row = $menu->fetch_assoc()) {
                    ?>
                        <tr>
                            <td id="item-img-<?= $count; ?>"></td>
                            <td class="item"><?= $row['name']; ?></td>
                            <td class="">P<?= $row['price']; ?></td>
                        </tr>
                    <?php $count++;
                    } ?>
                </tbody>

            </table>
        </span>
        <span class="flex-rr justify-c-space-between g-3">
            <button class="btn font-xs" type="button" onclick="goHome()">Back</button>
        </span>
    </div>
</main>

<?php
$footer['js'] = ['main', 'fetchImages'];
includeFooter($footer);
?>