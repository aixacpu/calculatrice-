<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Bienvenue sur la page d'accueil</h1>
    <img src="../images/image.png" alt="Image Home">
    <p> Bienvenue sur la calculatrice ."Vos comptes résolus" </p>
    <?php include 'footer.php'; ?>
</body>
</html>