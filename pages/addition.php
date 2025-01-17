<?php 
session_start();
include '../functions/functionsMath.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
    $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);
    if ($num1 !== false && $num2 !== false) {
        $result = addition($num1, $num2);
        $_SESSION['results'][] = "Addition : $num1 + $num2 = $result";
    } else {
        $error = "Veuillez entrer des nombres valides.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Addition</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Page d'Addition</h1>
    <form method="POST">
        <input type="text" name="num1" placeholder="Number 1" required>
        <span>+</span>
        <input type="text" name="num2" placeholder="Number 2" required>
        <button type="submit">Calculer</button>
    </form>
    <?php if (isset($result)) echo "<p>Résultat: $result</p>"; ?>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <?php include 'footer.php'; ?>
</body>
</html>
