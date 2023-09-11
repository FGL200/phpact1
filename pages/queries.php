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
while($row = $result->fetch_assoc()){
    array_push($tbls, $row['Tables_in_addbase_lab1']);
}
?>

<?php 
$header['css'] = ['main', 'index','display'];
$header['title'] = 'Home';
includeHeader($header);
?>
<style>
#query{
    resize: vertical;
    width: 100%;
    max-height: 200px;
    font-family: 'Courier New', Courier, monospace;
    font-size: medium;
    padding: .5rem;
}
#dataTable{
    width: 100%;
}
</style>
<main class="flex-c flex-grow justify-c-center align-i-center">
    <div class="card p-3 shadow-m flex-c g-1">
        <span>
            <b class="font-m">Query</b>
        </span>
        <span class="flex-c g-1">
            <div class="flex-r g-1">
                <section class="flex-r g-1 justify-c-space-between align-i-center"> 
                    <label for="table">Tables</label>
                    <select class="font-xs p-1" name="table" id="table" onchange="getCols(this)">
                        <option value="">--Select Table--</option>
                        <?php foreach($tbls as $tbl) { ?>
                            <option value="<?=$tbl;?>"><?=$tbl;?></option>
                        <?php }?>
                    </select>
                </section>
                <section class="flex-r g-1 justify-c-space-between align-i-center"> 
                    <label for="columns">Columns</label>
                    <select class="font-xs p-1" name="columns" id="columns" onchange="appendCol(this)">
                        <option value='' selected diabled>--Select Column--</option>
                    </select>
                </section>
            </div>
            <div class="flex-r">
                <textarea name="query" id="query"></textarea>
            </div>
        </span>
        <span class="card p-1">
            <table id="dataTable"></table>
        </span>
        <span class="flex-rr justify-c-space-between g-3">
            <button class="btn btn-green font-xs" type="button" onclick="runQuery()">Run Query</button>
            <button class="btn font-xs" type="button" onclick="goHome()" >Back</button>
        </span>
    </div>
</main>

<?php 
$footer['js'] = ['main', 'query'];
includeFooter($footer);
?>