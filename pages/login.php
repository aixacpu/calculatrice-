<?php
$pageTitle = "Login";
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($password === "cfitech") {
        $_SESSION['user'] = $username;
        header('Location: mon_profile.php');
        exit();
    } else {
        $error = "Login ou mot de passe incorrect.";
    }
}
?>
<h1>Login</h1>
<form method="post">
    <input type="text" name="username" required placeholder="Prénom">
    <input type="password" name="password" required placeholder="Mot de passe">
    <button type="submit">Se connecter</button>
</form>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<?php include 'footer.php'; ?>
