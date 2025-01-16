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
    <img src="../images/cliente-visiteur-parlant-receptionniste-bureau-bulle-dialogue-illustration-vectorielle-plane-ordinateur-portable-service-communication_74855-13068.jpg.avif" alt="Image Home">
    <p>Voici une descripción de site.</p>
    <?php include 'footer.php'; ?>
</body>
</html>