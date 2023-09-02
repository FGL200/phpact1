
<?php function includeHeader($data = []) { extract($data) ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=isset($title) ? $title : "Untitled";?></title>

    <!-- DEFAULT CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">

    <!-- CUSTOM CSS -->
    <?php if(isset($css)) foreach($css as $c) {?>
    <link rel="stylesheet" href="<?="../css/$c";?>.css">
    <?php }?>
</head>
<body class="flex-c b-color-w">
<header class="text-c color-w p-1 font-b flex-r align-i-center justify-c-center">
    <p class="font-l">C</p>
    <p class="font-s">RUD's</p>
</header>
<?php }?>