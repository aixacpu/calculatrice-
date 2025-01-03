<?php
$pageTitle = "Division";
include 'header.php';
include 'functions/functionsMath.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (is_numeric($num1) && is_numeric($num2)) {
        if ($num2 == 0) {
            $error = "Vous ne pouvez pas diviser par 0.";
        } else {
            $result = division($num1, $num2);
            $_SESSION['operations'][] = ["operation" => "Division", "num1" => $num1, "num2" => $num2, "result" => $result];
        }
    } else {
        $error = "Veuillez entrer uniquement des nombres.";
    }
}
?>
<h1>Page Division</h1>
<form method="post">
    <input type="number" name="num1" required placeholder="Nombre 1">
    ÷
    <input type="number" name="num2" required placeholder="Nombre 2">
    <button type="submit">Calculer</button>
</form>
<?php if (isset($result)) echo "<p>Résultat : $result</p>"; ?>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<?php include 'footer.php'; ?>
