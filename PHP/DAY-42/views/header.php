<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day-34</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="action.php?page=home" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li>
                <a href="action.php?page=home" class="nav-link">Home</a>
            </li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category</a>
                <ul class="dropdown-menu">
                    <?php foreach ($categories as $category) { ?>
                    <li>
                        <a href="action.php?page=category&id=<?php echo $category['id'] ?>" class="dropdown-item"><?php echo $category['name'] ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </li>

            <?php if(isset($_SESSION['id'])) { ?>
                <li class="dropdown">
                    <a href="action.php?page=logout" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['name']; ?></a>
                    <ul class="dropdown-menu">
                        <li><a href="action.php?page=dashboard" class="dropdown-item">Dashboard</a></li>
                        <li><a href="action.php?page=logout" class="dropdown-item">Logout</a></li>
                    </ul>

                </li>
            <li>
                <a href="action.php?page=full_name" class="nav-link">Full Name</a>
            </li>
            <li>
                <a href="action.php?page=calculator" class="nav-link">Calculator</a>
            </li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Series</a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="action.php?page=series_one"" class="dropdown-item">Series One</a>
                    </li>
                    <li>
                        <a href="action.php?page=series_two" class="dropdown-item">Series Two</a>
                    </li>
                    <li>
                        <a href="action.php?page=series_three" class="dropdown-item">Series Three</a>
                    </li>
            <?php } else { ?>
                <li><a href="action.php?page=login" class="nav-link">Login</a></li>
            <?php } ?>

                </ul>
            </li>
<!--            --><?php //} ?>
        </ul>
    </div>
</nav>
