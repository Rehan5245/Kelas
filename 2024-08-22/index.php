<?php
require_once("content.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" style.css">
</head>

<body>
    <div class="header">ini header</div>
    <div class="content">ini content</div>
    <div class="footer">ini footer</div>
    <?php
    foreach ($pages as $key => $value) {
    ?>
        <li><a href="pages/<?= $value ?>"></a></li>
    <?php

    }
    ?>
    <ul>
        <li><a href="index.php">home</a></li>
        <li><a href="pages/jurusan.php">jurusan</a></li>
        <li><a href="pages/sejarah.php">sejarah</a></li>
        <li><a href="pages/contact.php">contact</a></li>
    </ul>
    <?php
    foreach ($gambars as $key) {
    ?>
        <img src="images/<?= $key ?>" alt="">
    <?php
    }
    ?>
</body>

</html>