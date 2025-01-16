<?php 
session_start();
include '../functions/functionsMath.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
    $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);
    if ($num1 !== false && $num2 !== false) {
        $result = division($num1, $num2);
        $_SESSION['results'][] = "Division : $num1 / $num2 = $result";
    } else {
        $error = "Veuillez entrer des nombres valides.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Division</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Page de Division</h1>
    <form method="POST">
        <input type="text" name="num1" placeholder="Nombre 1" required>
        <span>/</span>
        <input type="text" name="num2" placeholder="Nombre 2" required>
        <button type="submit">Calculer</button>
    </form>
    <?php if (isset($result)) echo "<p>Résultat: $result</p>"; ?>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <?php include 'footer.php'; ?>
</body>
</html>
