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
    $header['css'] = ['main', 'index','display'];
    $header['title'] = 'Home';
    includeHeader($header);
?>

<main class="flex-c flex-grow justify-c-center align-i-center">
    <div class="card p-3 shadow-m flex-c g-1">
        <span>
            <b class="font-m">Display Menu</b>
        </span>
        <span>
            <table>
                <tr>
                    <th>Item Name</th>
                    <th>Item Price</th>
                </tr>

                <?php 
                    while($row = $menu->fetch_assoc()) {
                ?>
                <tr>
                    <td class="text-l"><?= $row['name'];?></td>
                    <td class="text-r"><?= $row['price'];?></td>
                </tr>
                <?php } ?>


            </table>
        </span>
        <span class="flex-rr justify-c-space-between g-3">
            <button class="btn font-xs" type="button" onclick="goHome()" >Back</button>
        </span>
    </div>
</main>

<?php 
    $footer['js'] = ['main'];
    includeFooter($footer);
?>