<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Citecalculatrice/css/style.css">
    <title><?php echo $pageTitle ?? "Site PHP"; ?></title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="home.php" <?php if ($pageTitle == "Home") echo 'class="active"'; ?>>Home</a></li>
                <?php if (isset($_SESSION['user'])): ?>
                    <li><a href="debug.php" <?php if ($pageTitle == "DEBUG") echo 'class="active"'; ?>>Debug</a></li>
                    <li><a href="reset.php" <?php if ($pageTitle == "RESET") echo 'class="active"'; ?>>Reset</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php" <?php if ($pageTitle == "Login") echo 'class="active"'; ?>>Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
