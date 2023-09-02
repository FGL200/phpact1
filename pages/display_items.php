



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
    <div class="card p-3 shadow-m flex-c g-1">
        <span>
            <b class="font-m">Display Menu</b>
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