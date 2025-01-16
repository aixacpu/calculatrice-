<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="debug.php">DEBUG</a></li>
        <li><a href="reset.php">RESET</a></li>
        <?php if (isset($_SESSION['user'])): ?>
            <li><a href="profile.php">Mon Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
        <li>
            <a href="#">Calculatrice</a>
            <ul>
                <li><a href="addition.php">Addition</a></li>
                <li><a href="soustraction.php">Soustraction</a></li>
                <li><a href="multiplication.php">Multiplication</a></li>
                <li><a href="division.php">Division</a></li>
            </ul>
        </li>
    </ul>
</nav>
