
<?php function includeHeader($data = []) { extract($data) ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=isset($title) ? $title : "Untitled";?></title>

    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">

    <!-- DEFAULT CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">

    <!-- DATA TABLES -->
    <link rel="stylesheet" href="../add/datatables/datatables.min.css">

    <!-- CUSTOM CSS -->
    <?php if(isset($css)) foreach($css as $c) {?>
    <link rel="stylesheet" href="<?="../css/$c";?>.css">
    <?php }?>
</head>
<body class="d-flex flex-column justify-content-between">
<header class="text-center color-white p-1 d-flex justify-content-center">
    <a href="../" class="fw-bold d-flex flex-row align-items-center color-white text-decoration-none">
        <p class="fs-3">C</p>
        <p class="fs-4">RUD's</p>
    </a>
</header>
<div class="flex-grow-1" id="root">
<?php }?>