<?php
$pageTitle = "RESET";
include 'header.php';
session_unset(); 
echo "<p>Toutes les sessions ont été réinitialisées.</p>";
include 'footer.php';
?>
