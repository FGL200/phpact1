<?php
require_once "../php/config.php";
require_once "../includes/functions.php";
?>

<?php
require_once "../includes/header.php";
require_once "../includes/footer.php";
?>

<?php
$tbls = [];
$result = $con->query("SHOW TABLES");
while ($row = $result->fetch_assoc()) {
    array_push($tbls, $row['Tables_in_addbase_lab1']);
}
?>

<?php
$header['css'] = ['main', 'index', 'display'];
$header['title'] = 'Query';
includeHeader($header);
?>
<style>
    #query {
        resize: vertical;
        width: 100%;
        max-height: 200px;
        font-family: 'Courier New', Courier, monospace;
        font-size: medium;
        padding: .5rem;
        min-height: 50px;
    }

    #dataTable {
        width: 100%;
    }
</style>
<main class="d-flex flex-column flex-grow justify-content-center align-items-center">
    <div class="card p-3 m-2 shadow-m d-flex flex-column gap-1 fade-in-to-bottom">
        <span class="d-flex flex-column gap-1">
            <b class="fs-5" style="margin: .5rem 0;">Query</b>
        </span>
        <hr>
        <span class="d-flex flex-column gap-1">
            <div class="d-flex justify-content-between gap-5">
                <section class="d-flex gap-1 justify-content-between align-items-center">
                    <label for="table"></label>
                    <select class="form-control" name="table" id="table" onchange="getCols(this)">
                        <option value="" selected disabled>--Show Tables--</option>
                        <?php foreach ($tbls as $tbl) { ?>
                            <option value="<?= $tbl; ?>"><?= $tbl; ?></option>
                        <?php } ?>
                    </select>
                </section>
                <section class="d-flex gap-1 justify-content-between align-items-center">
                    <label for="columns"></label>
                    <select class="form-control" name="columns" id="columns" onchange="appendCol(this)">
                        <option value='' selected disabled>--Show Columns--</option>
                    </select>
                </section>
            </div>
            <div class="d-flex">
                <textarea class="form-control" name="query" id="query"></textarea>
            </div>
        </span>
        <span class="d-flex flex-row-reverse justify-content-between gap-3">
            <button class="btn btn-green fs-6" type="button" onclick='runQuery(document.getElementById("query").value)'>Run Query</button>
            <button class="btn fs-6" type="button" onclick="goHome()">Back</button>
        </span>
        <span class="card p-3">
            <table id="dataTable"></table>
        </span>
    </div>
</main>

<?php
$footer['js'] = ['main', 'query'];
includeFooter($footer);
?>