
<?php function includeFooter($data = []) { extract($data) ?>
<footer class="text-c color-w p-1 font-xs">
    An activity accomplished by the group CRUD and submitted to Mr. Noel Gutierez
</footer>
<!-- CUSTOM CSS -->
<?php if(isset($js)) foreach($js as $j) {?>
<script src="<?="../js/$j";?>.js"></script>
<?php }?>

</body>
</html>
<?php }?>