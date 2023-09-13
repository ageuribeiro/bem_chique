<?php
    require_once("../../layout.php");
    require_once("../../conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Painel Administrativo | Bem Chique</title>
</head>

<body>
    <nav class="sidebar close">
        <header class="image-text">
            <span class="image">
                <img src="../../img/logo_bemchique.jpg" alt="logo">
            </span>

            <div class="text header-text">
                <span class="name"> Bem Chique</span>
                <span class="slogan"> Moda Elegante</span>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <a href="#">
                        <i class='bx bx-search icon'></i>
                        <input type="text" placeholder="Search...">
                    </a>
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">
                                Revenue
                            </span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">
                                Notifications
                            </span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">
                                Analytics
                            </span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">
                                Likes
                            </span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">
                                Wallets
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="../index.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text"> Logout </span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>
    <section class="home">
        <div class="text">
            <h1>Dashboard</h1>
        </div>
    </section>
    <script type="text/javascript" src="../js/script.js"></script>
</body>

</html>