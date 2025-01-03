<?php
$pageTitle = "DEBUG";
include 'header.php';
echo "<pre>";
print_r($_SESSION); // Affiche toutes les données de session
echo "</pre>";
include 'footer.php';
?>
