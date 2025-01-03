<?php
$pageTitle = "Multiplication";
include 'header.php';
include 'functions/functionsMath.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (is_numeric($num1) && is_numeric($num2)) {
        $result = multiplication($num1, $num2);
        $_SESSION['operations'][] = ["operation" => "Multiplication", "num1" => $num1, "num2" => $num2, "result" => $result];
    } else {
        $error = "Veuillez entrer uniquement des nombres.";
    }
}
?>
<h1>Page Multiplication</h1>
<form method="post">
    <input type="number" name="num1" required placeholder="Nombre 1
