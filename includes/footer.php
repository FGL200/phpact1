
<?php function includeFooter($data = []) { extract($data) ?>
</div>
<footer class="text-center color-white p-1 fs-6">
    An activity accomplished by the group CRUD and submitted to Mr. Noel Gutierrez
</footer>
<!-- JQUERY -->
<script src="../add/jquery/jquery.min.js"></script>

<!-- DATA TABLES -->
<script src="../add/datatables/datatables.min.js"></script>

<!-- CUSTOM JS -->
<?php if(isset($js)) foreach($js as $j) {?>
<script src="<?="../js/$j";?>.js"></script>
<?php }?>

</body>
</html>
<?php }?>