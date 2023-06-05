<?php
$currentPage = $_SERVER['REQUEST_URI'];
?>

<ul class="menu">
    <li><img src="img/nike-logo.png" alt="nike logo" class="logo"></li>
    <li><a class="header-text <?php echo ($currentPage == '/index.php') ? 'active' : ''; ?>" href="index.php">МУЖСКИЕ</a></li>
    <li><a class="header-text <?php echo ($currentPage == '/women.php') ? 'active' : ''; ?>" href="women.php">ЖЕНСКИЕ</a></li>
    <li><a class="header-text <?php echo ($currentPage == '/sale.php') ? 'active' : ''; ?>" href="sale.php">РАСПРОДАЖА</a></li>
    <li><a class="header-text <?php echo ($currentPage == '/about.php') ? 'active' : ''; ?>" href="about.php">ПРО НАС</a></li>

    <form id="search-form" class="search">
    <input type="text" id="search-input" placeholder="Поиск...">
    <button type="submit">Найти</button>
</form>

</ul>
