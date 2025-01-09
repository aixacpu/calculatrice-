<<?php 
session_start(); // Démarre ou continue la session utilisateur
?>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="/Citecalculatrice/pages/debug.php">DEBUG</a></li>
        <li><a href="/Citecalculatrice/pages/reset.php">RESET</a></li>
        <?php if (isset($_SESSION['user'])): ?>
            <li><a href="profile.php">Mon Profile</a></li>
            <li><a href="/Citecalculatrice/pages/logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="/Citecalculatrice/pages/login.php">Login</a></li>
        <?php endif; ?>
        <li>
            <a href="#">Calculatrice</a>
            <ul>
                <li><a href="/Citecalculatrice/pages/addition.php">Addition</a></li>
                <li><a href="/Citecalculatrice/pages/soustraction.php">Soustraction</a></li>
                <li><a href="/Citecalculatrice/pages/multiplication.php">Multiplication</a></li>
                <li><a href="/Citecalculatrice/pages/division.php">Division</a></li>
            </ul>
        </li>
    </ul>
</nav>
