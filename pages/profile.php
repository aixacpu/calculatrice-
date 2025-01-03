<?php
$pageTitle = "Mon Profile";
include 'header.php';

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>
<h1>Bienvenue, <?php echo $_SESSION['user']; ?>!</h1>
<p>Voici vos opérations enregistrées :</p>
<table>
    <tr>
        <th>Opération</th>
        <th>Nombre 1</th>
        <th>Nombre 2</th>
        <th>Résultat</th>
    </tr>
    <?php foreach ($_SESSION['operations'] as $op): ?>
    <tr>
        <td><?php echo $op['operation']; ?></td>
        <td><?php echo $op['num1']; ?></td>
        <td><?php echo $op['num2']; ?></td>
        <td><?php echo $op['result']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include 'footer.php'; ?>
