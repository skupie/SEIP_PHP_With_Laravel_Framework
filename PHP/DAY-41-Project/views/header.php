<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">

</head>
<body>
<nav class="navbar">
        <div class="container">
            <div class="mx-auto"><a href="action.php?page=home"><img src="assets/img/logo.jpg" alt=""></a></div>
        </div>
</nav>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li>
                <a href="action.php?page=home" class="nav-link">সর্বশেষ</a>
            </li>
            <?php foreach ($menus as $menu) { ?>
                <li class="">
                    <a href="action.php?page=menu&id<?php echo $menu['id']; ?>" class="nav-link"><?php echo $menu['name']; ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>
