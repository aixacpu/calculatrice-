<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mon Profile</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Bienvenue, <?php echo $_SESSION['user']; ?> !</h1>
    <h2>Historique des opérations :</h2>
    <ul>
        <?php 
        if (isset($_SESSION['results'])) {
            foreach ($_SESSION['results'] as $res) {
                echo "<li>$res</li>";
            }
        } else {
            echo "<li>Aucune opération effectuée.</li>";
        }
        ?>
    </ul>
    <?php include 'footer.php'; ?>
</body>
</html>
