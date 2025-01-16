<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($password === 'cfitech') {
        $_SESSION['user'] = $username;
        header('Location: profile.php');
        exit();
    } else {
        $error = "Identifiants incorrects.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Connexion</h1>
    <form method="POST">
        <input type="text" name="username" placeholder="Prénom" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>
    </form>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <?php include 'footer.php'; ?>
</body>
</html>
