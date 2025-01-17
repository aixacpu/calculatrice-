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
    <div class="content">
        <div class="card">
            <h1>Bienvenue, <?php echo $_SESSION['user']; ?> !</h1>
            <h2>Historique des opérations :</h2>
            <table>
                <thead>
                    <tr>
                        <th>Résultat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (isset($_SESSION['results'])) {
                        foreach ($_SESSION['results'] as $res) {
                            echo "<tr><td>$res</td></tr>";
                        }
                    } else {
                        echo "<tr><td>Aucune opération effectuée.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>