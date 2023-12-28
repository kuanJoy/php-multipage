<?php
$pages = [
    "Popular" => "./popular.php",
    "New" => "./new.php",
    "Reading list" => "./reading.php",
    "Topics" => "./topics.php",
    "Subscribe" => "./subscribe.php",
];

// $path = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title><?= $title ?></title>
</head>

<body>
    <div class="wrapper">
        <header class="header container">
            <nav class="nav">
                <a href="./index.php" class="logo">
                    <img src="./assets/img/icon/logo.svg" alt="#">
                </a>
                <?php foreach ($pages as $pageName => $pageLink) { ?>
                    <a href="<?= $pageLink ?>" class="nav__link"> <?= $pageName ?></a>
                <?php } ?>
            </nav>
            <div class="search">
                <img src="./assets/img/icon/search.svg" alt="">
            </div>
        </header>